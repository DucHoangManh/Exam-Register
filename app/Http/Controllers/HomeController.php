<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Facades\StudentRepository;
use App\Repositories\Facades\ExamRepository;
use App\Repositories\Facades\TestRepository;
use Faker\Generator as Faker;
use PDF;
use Auth;
use Calendar;
use DateTime;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('student');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Auth::user()->student;
        $lastExam = ExamRepository::last();
        $courses = $student->classes->each(function ($class) {
            
        });
        return view('user.home', compact('student'));
    }

    public function registration() {
        $student = Auth::user()->student;
        return view('user.registration', compact('student'));
    }

    public function result() {
        $student = Auth::user()->student;
        return view('user.result', compact('student'));
    }

    public function register(Request $request) {

    }

    public function exportResultPdf() {
        $student = Auth::user()->student; 
        $pdf = PDF::loadView('user.exports.pdf.result', compact('student'));
        // $pdf->set_option('enable_html5_parser', true);
        // dd($pdf);
        return $pdf->download('Ket_qua_dang_ky.pdf');
    }

    public function test() {
        $student = Auth::user()->student; 
        return view('user.exports.pdf.result', compact('student'));
    }

    public function calendar(Faker $faker) {
        $events = [];
        $tests = Auth::user()->student->tests;
        $subjectColor = collect([]);
        if($tests->count()) {
            foreach($tests as $test) {
                $start = new DateTime($test->shift->date.' '.$test->shift->start);
                $end = new DateTime($test->shift->date.' '.$test->shift->end);
                $color = $faker->hexcolor;
                $subjectColor->push([
                    'subject' => $test->class->module->subject->name,
                    'color' => $color
                ]);
                $events[] = Calendar::event(
                    $test->class->module->subject->name,
                    true,
                    $start,
                    $end,
                    null, 
                    [
                        'color' => $color,
                        'textColor' => '#fff'
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('user.calendar', compact('calendar', 'subjectColor'));
    }

    public function testRegister(Request $request) {
        $register = Auth::user()->student->registers->where('id', '=', $request['register_id'])->first();
        if($request['test_id'] == null) {
            $register->test_id = null;
            $register->save();    
        } else if($register->is_baned == 0) {
            $test = TestRepository::findOrFail($request['test_id']);
            if(!$test->isFull()) {
                $register->test_id = $request['test_id'];
                $register->id_number = $test->studentCount() + 1;
                $register->save();
            }
        }
        return redirect()->route('user.registration');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Facades\StudentRepository;
use App\Repositories\Facades\ExamRepository;
use Auth;

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
}

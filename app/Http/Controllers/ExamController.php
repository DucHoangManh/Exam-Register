<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Module;
use App\Repositories\Facades\ExamRepository;
use App\Repositories\Facades\SubjectRepository;
use Illuminate\Support\Facades\View;	

class ExamController extends Controller
{
    public function setCurrent($id) {
    	$exam = ExamRepository::findOrFail($id);
    	session(['exam' => $exam]);
       	return redirect()->route('admin.home');
    }

    public function index()
    {
        $exams = ExamRepository::orderBy('created_at', 'desc')->paginate(10); 
        return view('admin.exam.index', compact('exams'));
    }

    public function create()
    {
        return view('admin.exam.create');
    }

    public function store(Request $request)
    {
        $exam = ExamRepository::findByAttr($request['type'], $request['school_year']);
        $data = [
            'type' => $request['type'],
            'school_year' => $request['school_year']
        ];  
        if($exam->isEmpty()) {
            $exam = ExamRepository::create($data);
            return redirect()->route('exam.show', $exam->id)->with('success', 'Học kỳ '.$exam->type.' - '.$exam->school_year.' đã được tạo thành công');
        } else {
            alert()->error('','Học kỳ '.$request['type'].' - '.$request['school_year'].'đã tồn tại');
            return redirect()->back();
        }
       
    }

    public function show($id)
    {
        $exam = ExamRepository::findOrFail($id);
        return view('admin.exam.show', compact('exam'));
    }

    public function edit($id)
    {
        $exam = ExamRepository::findOrFail($id);
        return view('admin.exam.edit', compact('exam'));
    }

    public function update(Request $request, $id)
    {
        $data = [
            'type' => $request['type'],
            'school_year' => $request['school_year']
        ];
        $result = ExamRepository::update($id, $data);
        return redirect()->route('exam.show', $id);
    }

    public function destroy($id)
    {
        $result = ExamRepository::delete($id);
        return redirect()->route('exam.index');
    }

    public function addSubject(Request $request) {
        $exam = ExamRepository::findOrFail($request['exam_id']);
        $subject = SubjectRepository::findOrFail($request['subject_id']);
        $module = new Module();
        $module->exam_id = $exam->id;
        $module->subject_id = $subject->id;
        $module->save();
        return redirect()->route('exam.show', $exam->id);
    }
}

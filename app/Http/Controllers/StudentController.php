<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Repositories\StudentRepository;
use App\Imports\StudentImport;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{   
    public function index()
    {
        $students = Student::orderBy('created_at', 'desc')->paginate(10); 
        return view('admin.student.index', compact('students'));
    }

    public function create()
    {
        return view('admin.student.create');
    }

    public function import() {
        $import = Excel::import(new StudentImport, request('student_file'));
        return redirect('admin/student');
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     '' => 'required|max:100',
        //     ''  => 'required',
        // ]);
        $student = Student::create($request->only('name', 'code', 'gender', 'birthday'));
        return redirect()->route('student.index');
    }

    public function show($id)
    {
        $students = Student::findOrFail($id);
        return view('admin.student.edit', compact('student'));
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.student.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->name = $request['name'];
        $student->code  = $request['code'];
        $student->gender  = $request['gender'];
        $student->birthday  = $request['birthday'];
        $student->save();
        return redirect()->route('student.index');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('student.index');
    }
}

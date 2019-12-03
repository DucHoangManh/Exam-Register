<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::paginate(10); 
        return view('admin.student.index', compact('students'));
    }

    public function create()
    {
        return view('admin.student.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            '' => 'required|max:100',
            ''  => 'required',
        ]);
        $name = $request['name'];
        $student = Student::create($request->only('name', 'code'));
        return redirect()->route('student.index')->with('flash_message', 'Student, '.$student->name.' created succesfull');
    }

    public function show($id)
    {
        $students = Student::findOrFail($id);
        return view('admin.student.edit', compact('student'));
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('student.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            '' => 'required|max:100',
            ''  => 'required',
        ]);
        $student = Student::findOrFail($id);
        $student->name = $request['name'];
        $student->code  = $request['code'];
        $student->save();
        return redirect()->route('posts.show', $student->id)->with('flash_message', 'Student '.$student->name.' has updated');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('student.index')->with('flash_message', 'Student '.$student->name.' has been deleted');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use App\Repositories\StudentRepository;
use App\Imports\StudentImport;
use App\Exports\StudentExport;
use Maatwebsite\Excel\Facades\Excel;
use Alert;

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
        $import = Excel::import(new StudentImport, request()->file('student_file'));
        return redirect('admin/student');
    }

    public function export() {
        $export = Excel::download(new StudentExport, 'student.xlsx');
        return $export;
    }

    public function store(Request $request)
    {
        if(Student::where('code', '=', $request['code'])->get()->first() == null) {
            $student = Student::create($request->only('name', 'code', 'gender', 'birthday'));
            $user = new User;
            $user->username = $request['code'];
            $user->email = $request['code'].'@vnu.edu.vn';
            $user->type = 0;
            $user->save();
            return redirect()->route('student.show', $student->id)->with('success', 'Sinh viên '.$student->name.' đã được tạo thành công');
        } else {
            alert()->error('','Sinh viên có mã số '.$request['code'].'đã tồn tại');
            return redirect()->back();
        }
       
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.student.show', compact('student'));
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

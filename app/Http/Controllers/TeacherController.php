<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Repositories\TeacherRepository;
use App\Imports\TeacherImport;
use App\Exports\TeacherExport;
use Maatwebsite\Excel\Facades\Excel;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::orderBy('name')->paginate(10); 
        return view('admin.teacher.index', compact('teachers'));
    }

    public function create()
    {
        return view('admin.teacher.create');
    }

    public function import() {
        $import = Excel::import(new TeacherImport, request()->file('teacher_file'));
        return redirect('admin/teacher');
    }

    public function export() {
        $export = Excel::download(new TeacherExport, 'teacher.xlsx');
        return $export;
    }

    public function store(Request $request)
    {
        $teacher = Teacher::create($request->only('name'));
        return redirect()->route('teacher.index');
    }

    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin.teacher.edit', compact('teacher'));
    }

    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin.teacher.edit', compact('teacher'));
    }

    public function update($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->name = request('name');
        $teacher->save();
        return redirect()->route('teacher.index');
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return redirect()->route('teacher.index');
    }
}

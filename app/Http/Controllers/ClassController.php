<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassSubject;
use App\Repositories\ClassRepository;
use App\Imports\ClassImport;
use App\Imports\ClassStudentImport;
use Maatwebsite\Excel\Facades\Excel;

class ClassController extends Controller
{
    public function index()
    {
        $classes = ClassSubject::orderBy('code')->paginate(10); 
        return view('admin.class.index', compact('classes'));
    }

    public function create()
    {
        return view('admin.class.create');
    }

    public function import() {
        $import = Excel::import(new ClassImport, request('class_file'));
        return redirect('admin/class');
    }

    public function store(Request $request)
    {
        $class = ClassSubject::create($request->only('name'));
        return redirect()->route('class.index');
    }

    public function show($id)
    {
        $class = ClassSubject::findOrFail($id);
        return view('admin.class.show', compact('class'));
    }

    public function edit($id)
    {
        $class = ClassSubject::findOrFail($id);
        return view('admin.class.edit', compact('class'));
    }

    public function update($id)
    {
        $class = ClassSubject::findOrFail($id);
        $class->code = request('code');
        $class->save();
        return redirect()->route('class.index');
    }

    public function destroy($id)
    {
        $class = ClassSubject::findOrFail($id);
        $class->delete();
        return redirect()->route('class.index');
    }
}

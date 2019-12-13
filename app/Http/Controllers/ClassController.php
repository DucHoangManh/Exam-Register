<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassSubject;
use App\Repositories\ClassRepository;
use App\Imports\ClassImport;
use App\Imports\ClassStudentImport;
use App\Exports\ClassDetailExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

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

    public function exportDetailExcel($id) {
        $class = ClassSubject::findOrFail($id);
        $file = Excel::download(new ClassDetailExport($id), $class->code.'.xlsx');
        return $file;
    }

    public function exportDetailPdf($id) {
        $class = ClassSubject::findOrFail($id); 
        $pdf = PDF::loadView('admin.class.details.pdf', compact('class'));
        return $pdf->download($class->code.'.pdf');
    }

    public function test() {
        $class = ClassSubject::findOrFail(1); 
        return view('admin.class.details.pdf', compact('class'));
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

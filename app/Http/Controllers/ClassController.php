<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassSubject;
use App\Repositories\Facades\ClassRepository;
use App\Models\Module;
use App\Imports\ClassImport;
use App\Imports\ClassStudentImport;
use App\Exports\ClassDetailExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class ClassController extends Controller
{
    public function index()
    {
        $classes = ClassRepository::orderBy('code')->paginate(10); 
        $count = ClassRepository::all()->count();
        return view('admin.class.index', compact('classes', 'count'));
    }

    public function indexByExam($id) {
        $classes = ClassRepository::findByExamPaginate($id, 10);
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

    public function importStudent() {
        $import = Excel::import(new ClassStudentImport(request('class_id')), request('student_file'));
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
        $module = session('exam')->modules->where('subject_id', '=', $request['subject_id'])->first();
        $code = $module->subject->code.'_'.($module->classes->count()+1);
        $class = ClassSubject::create([
            'teacher_id' => $request['teacher_id'],
            'code' => $code,
            'module_id' => $module->id
        ]);
        return redirect()->route('class.show', $class->id);
    }

    public function show($id)
    {
        $class = ClassRepository::findOrFail($id);
        return view('admin.class.show', compact('class'));
    }

    public function edit($id)
    {
        $class = ClassRepository::findOrFail($id);
        return view('admin.class.edit', compact('class'));
    }

    public function update(Request $request, $id)
    {
        $data = [
            'code' => $request['code']
        ];
        $result = ClassRepository::update($id, $data);
        return redirect()->route('class.show', $id);
    }

    public function destroy($id)
    {
        $result = ClassRepository::delete($id);
        return redirect()->route('class.index');
    }

    public function getTestsJson($id) {
        $tests = ClassRepository::getTestsJson($id);
        return $tests;
    }
}

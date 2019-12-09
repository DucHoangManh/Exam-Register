<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Imports\SubjectImport;
use App\Exports\SubjectExport;
use Maatwebsite\Excel\Facades\Excel;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::orderBy('created_at', 'desc')->paginate(10); 
        return view('admin.subject.index', compact('subjects'));
    }

    public function create()
    {
        return view('admin.subject.create');
    }

    public function import() {
        $import = Excel::import(new SubjectImport, request()->file('subject_file'));
        return redirect('admin/subject');
    }

    public function export() {
        $export = Excel::download(new SubjectExport, 'subject.xlsx');
        return $export;
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     '' => 'required|max:100',
        //     ''  => 'required',
        // ]);
        $subject = Subject::create($request->only('name', 'code', 'credit'));
        return redirect()->route('subject.index');
    }

    public function show($id)
    {
        $subject = Subject::findOrFail($id);
        return view('admin.subject.edit', compact('subject'));
    }

    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        return view('admin.subject.edit', compact('subject'));
    }

    public function update(Request $request, $id)
    {
        $subject = Subject::findOrFail($id);
        $subject->name = $request['name'];
        $subject->credit  = $request['credit'];
        $subject->code  = $request['code'];
        $subject->save();
        return redirect()->route('subject.index');
    }

    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();
        return redirect()->route('subject.index');
    }
}

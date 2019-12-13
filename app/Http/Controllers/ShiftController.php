<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shift;
use App\Repositories\ShiftRepository;
use App\Imports\ShiftImport;
use App\Exports\ShiftExport;
use Maatwebsite\Excel\Facades\Excel;

class ShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shifts = Shift::orderBy('date')->paginate(10);
        return view('admin.shift.index', compact('shifts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shift.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shift = Shift::create($request->only('class_id', 'date', 'start', 'end'));
        return redirect()->route('shift.show', $shift->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shift = Shift::findOrFail($id);
        return view('admin.shift.show', compact('shift'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shift = Shift::findOrFail($id);
        return view('admin.shift.edit', compact('shift'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $shift = Shift::findOrFail($id);
        $shift->class_id = $request['class_id'];
        $shift->date = $request['date'];
        $shift->start = $request['start'];
        $shift->end = $request['end'];
        $shift->room = App\Models\Room::findOrFail($request['room_id'])->id;
        $shift->save();
        return redirect()->route('shift.show', $shift->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shift = Shift::findOrFail($id);
        $shift->delete();
        return redirect()->route('shift.index');
    }

    public function import() {
        $import = Excel::import(new ShiftImport, request()->file('shift_file'));
        return redirect()->route('shift.index');
    }

    public function export() {
        $export = Excel::download(new ShiftExport, 'shift.xlsx');
        return $export;
    }
}

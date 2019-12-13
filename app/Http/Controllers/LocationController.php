<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\LocationImport;
use App\Exports\LocationExport;
use App\Repositories\LocationRepository;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::orderBy('name')->paginate(10);
        return view('admin.location.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.location.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Location::where('name', '=', $request['name'])->get()->first() == null) {
            $location = Location::create(request()->only('name'));
            return redirect()->route('location.index')->with('success', 'Điểm thi '.$location->name.' đã được tạo thành công');
        } else {
            alert()->error('','Điểm thi '.$request['name'].' đã tồn tại');
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $location = Location::findOrFail($id);
        return view('admin.location.show', ['location' => $location]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location = Location::findOrFail($id);
        return view('admin.location.edit', compact('location'));
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
        $location = Location::findOrFail($id);
        $location->name = $request['name'];
        $location->save();
        return redirect()->route('location.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location = Location::findOrFail($id);
        $location->delete();
        return redirect()->route('location.index');
    }

    public function import() {
        $import = Excel::import(new LocationImport, request()->file('location_file'));
        return redirect()->route('location.index');
    }

    public function export() {
        $export = Excel::download(new LocationExport, 'location.xlsx');
        return $export;
    }
}

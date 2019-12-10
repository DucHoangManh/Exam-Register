<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Location;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\RoomImport;
use App\Exports\RoomExport;
use App\Repositories\RoomRepository;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::orderBy('name')->paginate(10);
        return view('admin.room.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.room.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room = Room::create(request()->only('name', 'location_id'));
        return redirect()->route('room.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::findOrFail($id);
        return view('admin.room.show', ['room' => $room]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::findOrFail($id);
        return view('admin.room.edit', compact('room'));
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
        $location = Location::where('name', '=' , $request['location_name'])->first();
        $room = Room::findOrFail($id);
        $room->name = $request['name'];
        $room->location_id = $location->id;
        $room->save();
        return redirect()->route('room.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect()->route('room.index');
    }

    public function import() {
        $import = Excel::import(new RoomImport, request()->file('room_file'));
        return redirect()->route('room.index');
    }

    public function export() {
        $export = Excel::download(new RoomExport, 'room.xlsx');
        return $export;
    }
}

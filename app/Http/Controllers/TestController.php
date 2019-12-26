<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Facades\TestRepository;
use App\Models\Test;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = TestRepository::paginate(10);
        $count = TestRepository::all()->count();
        return view('admin.test.index', compact('tests', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.test.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $test = Test::where([
            ['room_id', '=', $request['room_id']], 
            ['shift_id', '=', $request['shift_id']],
            ['class_id', '=', $request['class_id']]
        ])->get()->first();
        if($test == null) {
            $test = Test::create(request()->only('room_id', 'shift_id', 'class_id'));
            return redirect()->back()->with('success', 'Bài thi đã được tạo thành công');
        } else {
            alert()->error('','Bài thi đã tồn tại');
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
        $test = TestRepository::findOrFail($id);
        return view('admin.test.show', compact('test'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

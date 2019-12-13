<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Repositories\UserRepository;
use App\Imports\UserImport;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('type', '=', '0')->orderBy('created_at', 'desc')->paginate(10); 
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function import() {
        $import = Excel::import(new UserImport, request()->file('user_file'));
        return redirect('admin/user');
    }

    public function export() {
        $export = Excel::download(new UserExport, 'user.xlsx');
        return $export;
    }

    public function store(Request $request)
    {
        $request->merge([
            'password' => Hash::make($request->password)
        ]);
        $user = User::create($request->only('username', 'email', 'password'));
        return redirect()->route('user.index');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->username = $request['username'];
        $user->email  = $request['email'];
        $user->save();
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}

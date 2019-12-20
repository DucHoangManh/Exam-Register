<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use App\Repositories\Facades\ExamRepository;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getLogin() {
        return view('login');
    }

    public function postLogin(Request $request) {
        $rules = [
            'username' => 'required|min:5',
            'password' => 'required|min:6'
        ];
        $messages = [
            'username.required'  => 'Username không được để trống',
            'username.min'      => 'Username chứa ít nhất 5 ký tự', 
            'password.required' => 'Mật khẩu không được để trống',
            'password.min'      => 'Mật khẩu phải chứa ít nhất 6 ký tự'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        else {
        	$username = $request->input('username');
	        $password = $request->input('password');
        	if (Auth::attempt(['username' => $username, 'password' => $password,'type'=>2])) {
                $exam = ExamRepository::last();
                session(['exam' => $exam]);
	        	return redirect('/admin/home');
        	}
	        else if(Auth::attempt(['username' => $username, 'password' => $password,'type'=>1]))         {
	            return redirect()->back();
	        }  else if(Auth::attempt(['username' => $username, 'password' => $password,'type'=>0])) {
	            return redirect()->back();
	        } else {
	            $errors = new MessageBag(['errorlogin' => 'Tên đăng nhập hoặc mật khẩu không đúng']);
	            return redirect()->back()->withInput()->withErrors($errors);
	        }
    	}
	}
}
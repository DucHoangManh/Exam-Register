<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Repositories\Facades\ExamRepository;
use Illuminate\Support\Facades\View;	

class ExamController extends Controller
{
    public function setCurrent($id) {
    	$exam = ExamRepository::findOrFail($id);
    	session(['exam' => $exam]);
       	return redirect()->back();
    }
}

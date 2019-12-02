<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;\
use App\Repositories\ClassRepository;

class ClassController extends Controller
{
    public function index() {
    	$class = $this->ClassRepository->all();
    	return view('class.index', compact($class));
    }

    public function show($id) {
    	$class = $this->ClassRepository->find($id);
    	return view('class.show', compact($class));
    }
}

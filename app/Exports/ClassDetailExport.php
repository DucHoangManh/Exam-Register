<?php

namespace App\Exports;

use App\Models\ClassSubject;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ClassDetailExport implements FromView
{
    public function __construct(int $id) {
    	$this->id = $id;
    }

    public function view(): View
    {
        return view('admin.class.details.excel', [
            'class' => ClassSubject::findOrFail($this->id)
        ]);
    }
}

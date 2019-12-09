<?php

namespace App\Exports;

use App\Models\Subject;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SubjectExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Subject::all();
    }

    public function headings() :array {
    	return ["STT", "Tên môn học", "Số tín chỉ", "Ngày thêm", "Ngày sửa", "Mã môn học"];
    }
}

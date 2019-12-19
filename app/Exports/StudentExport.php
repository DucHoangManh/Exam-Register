<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Student::all();
    }

    public function headings() :array
    {
        return ["STT", "Họ và tên", "MSSV", "Giới tính", "Ngày sinh", "Ngày thêm", "Ngày sửa"];
    }
}

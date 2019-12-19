<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToModel, WithHeadingRow
{
    //Skip heading row in excel file
    public function headingRow() : int {
        return 1;
    }

    public function model(array $row)
    {   
        return new Student([
            'name' => $row['name'] ?? $row['ho_va_ten'] ?? null,
            'code' => $row['code'] ?? $row['mssv'] ?? null,
            'gender' => $row['gender'] ?? $row['gioi_tinh'] ?? null,
            // 'birthday' => $row['birthday'] ?? $row['ngay sinh'] ?? null,
            'birthday' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['birthday'] ?? $row['ngay_sinh'] ?? null)->format('Y-m-d')
            
        ]);
    }
}

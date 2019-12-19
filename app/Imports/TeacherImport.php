<?php

namespace App\Imports;

use App\Models\Teacher;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TeacherImport implements ToModel, WithHeadingRow
{
    /**
    * Number of rows skip in import file
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function headingRow() : int {
        return 1;
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Teacher([
            'name' => $row['name'] ?? $row['ho_va_ten'] ?? null,
            'email' => $row['email'] ?? null
        ]);
    }
}

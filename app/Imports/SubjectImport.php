<?php

namespace App\Imports;

use App\Models\Subject;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SubjectImport implements ToModel, WithHeadingRow
{
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
        return new Subject([
            'name' => $row['name'] ?? $row["ten_mon_hoc"] ?? null,
            'credit' => $row['credit'] ?? $row['so_tin_chi'] ?? null,
            'code' => $row['code'] ?? $row['ma_mon_hoc'] ?? null
        ]);
    }
}

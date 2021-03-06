<?php

namespace App\Imports;

use App\Models\Location;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LocationImport implements ToModel, WithHeadingRow
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
        return new Location([
            'name' => $row['name'] ?? $row['ten_diem_thi'] ?? null
        ]);
    }
}





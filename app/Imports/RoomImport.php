<?php

namespace App\Imports;

use App\Models\Room;
use App\Models\Location;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RoomImport implements ToModel, WithHeadingRow
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
        // dd(($row['name'] ?? $row['ten_diem_thi'] ?? null));
        return new Room([
            'name' => $row['name'] ?? $row['ten_phong_thi'] ?? null,
            'location_id' => Location::where('name', 'like', '%'.($row['name'] ?? $row['ten_diem_thi'] ?? null).'%')->first()->id
        ]);
    }
}

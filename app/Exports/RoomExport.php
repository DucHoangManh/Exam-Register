<?php

namespace App\Exports;

use App\Models\Room;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RoomExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Room::all();
    }

    public function headings() :array
    {
        return ["STT", "Tên phòng thi", "Tên điểm thi", "Ngày thêm", "Ngày sửa"];
    }
}

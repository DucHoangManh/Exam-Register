<?php

namespace App\Imports;

use App\Models\Student;
use App\Models\User;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class StudentBanedImport implements ToCollection, WithHeadingRow
{
	//Skip heading row in excel file
    public function headingRow() : int {
        return 6;
    }

    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) 
        {
            $user = User::where('username', '=', $row['mssv'])->first();
            if($row['chu_thich' == 'Cấm thi']) {
                $user->student->is_baned = '1';
                $user->save();
            }
        }
    }
}

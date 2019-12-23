<?php

namespace App\Imports;

use App\Models\Student;
use App\Models\User;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class StudentBanedImport implements ToCollection, WithHeadingRow
{
    public function __construct(int $class_id) {
        $this->class_id = $class_id;
    }
    
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
            $student = $user->student;
            if($row['chu_thich'] == 'Cấm thi') {
                $student->classes()->updateExistingPivot($this->class_id, ['is_baned' => '1']);
                // $student->save();
            }
        }
    }
}

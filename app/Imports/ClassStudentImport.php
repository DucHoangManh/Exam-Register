<?php

namespace App\Imports;

use App\Models\ClassSubject;
use App\Models\Student;
use App\Repositories\Facades\StudentRepository;
use App\Models\Register;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ClassStudentImport implements ToModel, WithHeadingRow
{
    public function __construct(int $class_id) {
        $this->class_id = $class_id;
    }

    //Skip heading row in excel file
    public function headingRow() : int {
        return 6;
    }

    public function model(array $row)
    {   
        $student = StudentRepository::findByCode($row['mssv']);
        if($student != null && $student->registers->where('class_id', '=', $this->class_id)->count() == 0) {
            return $register = Register::create([
                'student_id' => $student->id,
                'class_id' => $this->class_id
            ]);
        }
        return $student;
    }
}

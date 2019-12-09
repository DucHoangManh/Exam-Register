<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserImport implements ToModel, WithHeadingRow
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
        return new User([
            'username' => $row['username'] ?? $row['ten_tai_khoan'] ?? null,
            'email' => $row['email'] ?? null,
            'password' => Hash::make($row['password'] ?? $row['mat_khau'] ?? null),
            'type' => $row['type'] ?? $row['loai']?? null
        ]);
    }
}

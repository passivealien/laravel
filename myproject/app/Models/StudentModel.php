<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    use HasFactory;

    public function getAllStudents(){
        return(
            [[
                'idnumber' => 1,
                'firstname' => 'Kenneth',
                'lastname' => 'Itang',
                'address' => 'Kilid skwelahan'
            ],
            [
                'idnumber' => 2,
                'firstname' => 'Aleck',
                'lastname' => 'Sumalinog',
                'address' => 'Kilid ilaha Itang'
            ]]

            );
    }
}

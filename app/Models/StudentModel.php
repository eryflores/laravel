<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    public $table = 'student';

   public $primaryKey = 'id';

   public $fillable = ['name', 'address',
                        'age', 'gender',
                        'department', 'course'
                        ];
}
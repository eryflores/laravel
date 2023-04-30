<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterModel extends Model
{
    public $table = 'register';

   public $primaryKey = 'id';

   public $fillable = ['name', 'address',
                        'age', 'gender',
                        'department', 'course'
                        ];
}

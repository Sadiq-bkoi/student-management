<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{    
    protected $table = 'enrollments';
    protected $primarykey = 'id';
    protected $fillable = [
        'name',
        'enrollment_no',
        'student_id',
        'batch_id',
        'join_date',
        'fee'
    ];
    use HasFactory;
}

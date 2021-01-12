<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'gender',
        'nik',
        'birth_place',
        'birth_place',    
        'birth_date',  
        'school_origin', 
        'religion',
        'live_with',
        'phone',           
        'sibling',
        'height',
        'weight',
        'hobby',
        'ambition',
        'achievment1',
        'achievment2',
        'father_name',
        'father_birth_place',
        'father_birth_date',
        'father_last_education',
        'father_job',
        'father_salary',
        'father_address',  
        'mother_name',
        'mother_birth_place',
        'mother_birth_date',
        'mother_last_education',
        'mother_job',        
        'mother_salary',
        'rt',
        'rw',
        'dusun',           
        'desa',
        'kecamatan',     
        'wali_name',
        'wali_birth_place',
        'wali_birth_date',
        'wali_last_education',
        'wali_job',
        'wali_address',
    ];

    protected $hidden = [

    ];
}

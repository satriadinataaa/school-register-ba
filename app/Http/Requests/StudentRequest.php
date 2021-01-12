<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'gender'=> 'required|max:255',
            'nik' => 'required|max:255',
            'birth_place' => 'required|max:255',  
            'birth_date' => 'required|date',  
            'school_origin' => 'required|max:255', 
            'religion' => 'required|max:255',
            'live_with' => 'required|max:255',
            'phone' => 'required|max:255',           
            'sibling' => 'required|integer',
            'height' => 'required|integer',
            'weight' => 'required|integer',
            'hobby' => 'required|max:255',
            'ambition' => 'required|max:255',
            'achievment1',
            'achievment2',
            'father_name' => 'required|max:255',
            'father_birth_place' => 'required|max:255',
            'father_birth_date' => 'required|date',
            'father_last_education' => 'required|max:255',
            'father_job' => 'required|max:255',
            'father_salary' => 'required|max:255',
            'father_address' => 'required|max:255',  
            'mother_name' => 'required|max:255',
            'mother_birth_place' => 'required|max:255',
            'mother_birth_date' => 'required|date',
            'mother_last_education' => 'required|max:255',
            'mother_job' => 'required|max:255',        
            'mother_salary' => 'required|max:255',
            'rt' => 'required|max:255',
            'rw' => 'required|max:255',
            'dusun' => 'required|max:255',           
            'desa' => 'required|max:255',
            'kecamatan' => 'required|max:255',     
            'wali_name',
            'wali_birth_place',
            'wali_birth_date',
            'wali_last_education',
            'wali_job',
            'wali_address',
        ];
    }
}

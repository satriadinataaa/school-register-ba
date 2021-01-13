<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class DashboardController extends Controller
{
    public function index(){
        
        $students = Student::all();
        return view('pages.admin.dashboard',[
           'students' => $students
        ]);
    }

    public function destroy($id)
    {
        $item = Student::findOrFail($id);
        $item->delete();

        return redirect()->route('dashboard.index');
    }

    public function show($id){

        $student = Student::findOrFail($id);
        return view('pages.admin.index',[
            'student' => $student,
        ]);
    }
}

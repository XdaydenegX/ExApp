<?php

namespace App\Http\Controllers;

use App\Models\PassKeys;
use Illuminate\Http\Request;
use App\Models\Students;

class PasskeyByStudentController extends Controller
{
    public function getAllStudentAndPassKeys() {
        $students = Students::all();
        return view('students', [
            'students' => $students,
        ]);
    }

}

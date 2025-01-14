<?php

namespace App\Http\Controllers;

use App\Models\AllStudent;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index () {
        $students = AllStudent::all();

        return response()->json([
            'success' => true,
            'message' => 'Successfully retrieved all students information',
            'data' => $students,
        ]);
    }
}

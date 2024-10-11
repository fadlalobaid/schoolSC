<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        $classrooms =Classroom::
        withCount('students')
        ->paginate(10);
        return view('front.index', [
            'classrooms' => $classrooms
        ]);
    }


}

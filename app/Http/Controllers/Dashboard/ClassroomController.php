<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{

    public function index()
    {
        $request = request();
        $query = Classroom::query()->withCount('students');
        $status = $request->query('status');
        if ($status) {
            $query->whereStatus($status);
        }

        $classrooms = $query
        ->paginate(10);
        return view('dashboard.classroom.index', [
            'classrooms' => $classrooms,
        ]);
    }

    public function create()
    {
        return view('dashboard.classroom.create');
    }

    public function store(Request $request) {}

    public function show(Classroom $classroom)
    {
      
        return view('dashboard.classroom.show', [
            'classroom' => $classroom,
            // 'student'=>$student,


        ]);
    }

    public function edit($id)
    {
        $classrooms = Classroom::find($id);
        return view('dashboard.classroom.edit', [
            'classrooms' => $classrooms,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate(Classroom::rules());
        $classrooms = Classroom::find($id);

        $classrooms->update($request->all());
        return redirect()->route('classrooms.index')->with('info', 'Class  updated successfully');
    }

    public function destroy($id)
    {
        $classrooms = Classroom::find($id);
        $classrooms->delete();
        $classrooms = Classroom::all();
        return redirect()->route('classrooms.index')->with('danger', 'Class  deleted successfully');
    }
}

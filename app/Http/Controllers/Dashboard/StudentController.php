<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{

    public function index()
    {
        $students = Student::paginate(10);
        return view('dashboard.students.index',compact('students'));
    }


    public function create() {
        return view('dashboard.students.create');
    }


    public function store(Request $request)
    {
        $request->validate(Student::rules());
        Student::create($request->all()); //
        return redirect()->route('students.index')->with('success', 'student created successfully');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('dashboard.students.edit', [
            'student' => $student
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate(Student::rules());
        $student = Student::find($id);
        $student->update($request->all());
        return redirect()->route('students.index')->with('info', 'Student  updated successfully');
    }


    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        $student=Student::all();
        return redirect()->route('students.index')->with('danger', 'Student  deleted successfully');


    }

}

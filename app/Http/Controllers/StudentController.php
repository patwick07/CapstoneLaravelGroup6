<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Classes;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
    $students = DB::select("CALL GetStudents()");
    return view('student', ['title'=>'Student Page', 'students'=>$students]);
    }
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
    $classes = DB::select("CALL GetClass()");
    return view('addStudent',['title'=>'Add Student Page', 'classes'=> $classes]);
    }
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
    $request->validate([
    'id_no' => 'required',
    'class_id' => 'required',
    'name' => 'required'
    ]);
    $student = new Student();
    $student->id_no = $request->id_no;
    $student->class_id = $request->class_id;
    $student->name = $request->name;
    $student->save();
    return redirect('/students')
    ->with('success','Student Record has been created successfully.');
    }
    /**
    * Display the specified resource.
    *
    * @param  \App\company  $company
    * @return \Illuminate\Http\Response
    */
    // public function show(Course $course)
    // {
    // return view('courses.show', compact('course'));
    // } 
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Company  $company
    * @return \Illuminate\Http\Response
    */
    public function edit(Student $student)
    {
    $classes = DB::select("CALL GetClass()");
    return view('editStudent', compact('student'), ['title'=>'Edit Student Page','classes'=>$classes]);
    }
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\company  $company
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
    $request->validate([
    'id_no' => 'required',
    'class_id' => 'required',
    'name' => 'required'
    ]);
    $student = Student::find($id);
    $student->id_no = $request->id_no;
    $student->class_id = $request->class_id;
    $student->name = $request->name;
    $student->save();
    return redirect('/students')
    ->with('success','Student Has Been updated successfully');
    }
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Company  $company
    * @return \Illuminate\Http\Response
    */
    public function destroy(Student $student)
    {
    $student->delete();
    return redirect('/students')
    ->with('success',' Record has been deleted successfully');
    }
}

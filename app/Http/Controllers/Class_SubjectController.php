<?php

namespace App\Http\Controllers;

use App\Models\ClassSubject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Class_SubjectController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
    $class_subject = DB::select("CALL GetClassPerSubject()");
    return view('class_subject', ['title'=>'Class Per Subject Page', 'class_subject'=>$class_subject]);
    }
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
    $classes = DB::select("CALL GetClass()");
    $subjects = DB::select("CALL GetSubjects()");
    $faculties = DB::select("CALL GetFaculty()");
    return view('addClass_Subject',['title'=>'Add Class Per Subject Page', 'classes'=> $classes, 'subjects'=> $subjects, 'faculties'=> $faculties]);
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
    'class_id' => 'required',
    'subject_id' => 'required',
    'faculty_id' => 'required'
    ]);
    $class_subject = new ClassSubject();
    $class_subject->class_id = $request->class_id;
    $class_subject->subject_id = $request->subject_id;
    $class_subject->faculty_id = $request->faculty_id;
    $class_subject->save();
    return redirect('/class_subject')
    ->with('success','Class Per Subject Record has been created successfully.');
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
    public function edit(ClassSubject $class_subject)
    {
    $classes = DB::select("CALL GetClass()");
    $subjects = DB::select("CALL GetSubjects()");
    $faculties = DB::select("CALL GetFaculty()");
    return view('editClass_Subject', compact('class_subject'), ['title'=>'Edit Class Per Subject Page','classes'=>$classes, 'subjects'=> $subjects, 'faculties'=> $faculties]);
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
    'class_id' => 'required',
    'subject_id' => 'required',
    'faculty_id' => 'required'
    ]);
    $class_subject = ClassSubject::find($id);
    $class_subject->class_id = $request->class_id;
    $class_subject->subject_id = $request->subject_id;
    $class_subject->faculty_id = $request->faculty_id;
    $class_subject->save();
    return redirect('/class_subject')
    ->with('success','Class Per Subject Has Been updated successfully');
    }
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Company  $company
    * @return \Illuminate\Http\Response
    */
    public function destroy(ClassSubject $class_subject)
    {
    $class_subject->delete();
    return redirect('/class_subject')
    ->with('success',' Record has been deleted successfully');
    }
}

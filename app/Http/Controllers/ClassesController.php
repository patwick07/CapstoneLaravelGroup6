<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Classes;
use Illuminate\Support\Facades\DB;

class ClassesController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
    $data['courses'] = Course::all();
    $classes = DB::select("CALL GetClass()");
    return view('class', $data, ['title'=>'Class Page', 'classes'=>$classes]);
    }
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
    $data['courses'] = Course::all();
    return view('addClass',$data,['title'=>'Add Class Page']);
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
    'course_id' => 'required',
    'level' => 'required',
    'section' => 'required'
    ]);
    $class = new Classes();
    $class->course_id = $request->course_id;
    $class->level = $request->level;
    $class->section = $request->section;
    $class->save();
    return redirect('/classes')
    ->with('success','Class Record has been created successfully.');
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
    public function edit(Classes $class)
    {
    $data['courses'] = Course::all();
    return view('editClass', compact('class'), ['title'=>'Edit Class Page','courses'=>$data['courses']]);
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
    'course_id' => 'required',
    'level' => 'required',
    'section' => 'required'
    ]);
    $class = Classes::find($id);
    $class->course_id = $request->course_id;
    $class->level = $request->level;
    $class->section = $request->section;
    $class->save();
    return redirect('/classes')
    ->with('success','Class Has Been updated successfully');
    }
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Company  $company
    * @return \Illuminate\Http\Response
    */
    public function destroy(Classes $class)
    {
    $class->delete();
    return redirect('/classes')
    ->with('success',' Record has been deleted successfully');
    }
}

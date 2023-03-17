<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
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
    return view('course', $data, ['title'=>'Course Page', 'classes'=>$classes]);
    }
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
    return view('addCourse',['title'=>'Add Course Page']);
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
    'course' => 'required',
    'description' => 'required',
    ]);
    $course = new Course();
    $course->course = $request->course;
    $course->description = $request->description;
    $course->save();
    return redirect('/courses')
    ->with('success','Course Record has been created successfully.');
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
    public function edit(Course $course)
    {
    return view('editCourse', compact('course'), ['title'=>'Edit Course Page']);
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
    'course' => 'required',
    'description' => 'required',
    ]);
    $course = Course::find($id);
    $course->course = $request->course;
    $course->description = $request->description;
    $course->save();
    return redirect('/courses')
    ->with('success','Course Has Been updated successfully');
    }
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Company  $company
    * @return \Illuminate\Http\Response
    */
    public function destroy(Course $course)
    {
    $course->delete();
    return redirect('/courses')
    ->with('success',' Record has been deleted successfully');
    }
}

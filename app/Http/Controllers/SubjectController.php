<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
    // $data['subjects'] = Subject::orderBy('subject','asc')->paginate(100);
    $data['subjects'] = Subject::all();
    return view('subject', $data, ['title'=>'Subject Page']);
    }
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
    return view('addSubject',['title'=>'Add Subject Page']);
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
    'subject' => 'required',
    'description' => 'required',
    ]);
    $subject = new Subject();
    $subject->subject = $request->subject;
    $subject->description = $request->description;
    $subject->save();
    return redirect('/subjects')
    ->with('success','Subject Record has been created successfully.');
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
    public function edit(Subject $subject)
    {
    return view('editSubject', compact('subject'), ['title'=>'Edit Subject Page']);
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
    'subject' => 'required',
    'description' => 'required',
    ]);
    $subject = Subject::find($id);
    $subject->subject = $request->subject;
    $subject->description = $request->description;
    $subject->save();
    return redirect('/subjects')
    ->with('success','Subject Has Been updated successfully');
    }
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Company  $company
    * @return \Illuminate\Http\Response
    */
    public function destroy(Subject $subject)
    {
    $subject->delete();
    return redirect('/subjects')
    ->with('success',' Record has been deleted successfully');
    }
}

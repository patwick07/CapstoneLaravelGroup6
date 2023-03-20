<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use Illuminate\Support\Facades\DB;

class FacultyController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
    $data['faculties'] = Faculty::all();
    return view('faculty', $data, ['title'=>'Faculty Page']);
    }
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
    return view('addFaculty',['title'=>'Add Faculty Page']);
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
    'name' => 'required',
    'email' => 'required',
    'contact' => 'required',
    'address' => 'required'
    ]);
    $faculty = new Faculty();
    $faculty->id_no = $request->id_no;
    $faculty->name = $request->name;
    $faculty->email = $request->email;
    $faculty->contact = $request->contact;
    $faculty->address = $request->address;
    $faculty->save();
    return redirect('/faculties')
    ->with('success','Faculty Record has been created successfully.');
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
    public function edit(Faculty $faculty)
    {
    return view('editFaculty', compact('faculty'), ['title'=>'Edit Faculty Page']);
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
    'name' => 'required',
    'email' => 'required',
    'contact' => 'required',
    'address' => 'required'
    ]);
    $faculty = Faculty::find($id);
    $faculty->id_no = $request->id_no;
    $faculty->name = $request->name;
    $faculty->email = $request->email;
    $faculty->contact = $request->contact;
    $faculty->address = $request->address;
    $faculty->save();
    return redirect('/faculties')
    ->with('success','Faculty Has Been updated successfully');
    }
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Company  $company
    * @return \Illuminate\Http\Response
    */
    public function destroy(Faculty $faculty)
    {
    $faculty->delete();
    return redirect('/faculties')
    ->with('success',' Record has been deleted successfully');
    }
}

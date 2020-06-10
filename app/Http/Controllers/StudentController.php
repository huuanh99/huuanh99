<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use DB;
use App\Student;

use Cart;
session_start();

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student=Student::all();
        return \view('listStudent',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addStudent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student=new Student();
        $student->hoten=$request->name;
        $student->toan=$request->toan;
        $student->ly=$request->ly;
        $student->hoa=$request->hoa;
        $student->save();
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=Student::findOrFail($id);
        return view('updateStudent',\compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student=Student::findOrFail($id);
        $student->hoten=$request->name;
        $student->toan=$request->toan;
        $student->ly=$request->ly;
        $student->hoa=$request->hoa;
        $student->save();
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=Student::findOrFail($id);
        $student->delete();
        return redirect()->route('student.index');

    }
   
}

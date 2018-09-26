<?php

namespace App\Http\Controllers;

use App\StudentModel;
use App\MajorModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('role:admin_dsd,admin_faculty') ;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->input('q');
        $table_student = StudentModel::select_by_student_name($q);
        $data = [
            'table_student' => $table_student,
            'q' => $q
        ];
        return view('volunteer/student/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $table_major = MajorModel::select_all();
        $data = [
            'table_major' => $table_major,
            'table_degree' => ["ปริญญาตรี","ปริญญาโท","ปริญญาเอก"],
        ];
        return view('volunteer/student/create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = [
            'student_id' => $request->input('student_id'),
            'student_name' => $request->input('student_name'),
            'degree' => $request->input('degree'),
            'major_id' => $request->input('major_id'),
        ];
        StudentModel::insert( $input);
        return redirect('/student');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentModel  $studentModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $table_student = StudentModel::select_by_id($id);
        $data = [
            'table_student' => $table_student
        ];
        return view('volunteer/student/show',$data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentModel  $studentModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $table_student = StudentModel::select_by_id($id);
        $table_major = MajorModel::select_all();
        $data = [
            'table_student' => $table_student,
            'table_major' => $table_major,
            'table_degree' => ["ปริญญาตรี","ปริญญาโท","ปริญญาเอก"],
        ];
        return view('volunteer/student/edit',$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentModel  $studentModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = [
            'student_id' => $request->input('student_id'),
            'student_name' => $request->input('student_name'),
            'degree' => $request->input('degree'),
            'major_id' => $request->input('major_id'),
        ];
        StudentModel::update_by_id($input , $id);
        return redirect('/student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentModel  $studentModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StudentModel::delete_by_id($id);
        return redirect('/student');
    }


}

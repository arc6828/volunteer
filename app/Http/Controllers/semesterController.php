<?php

namespace App\Http\Controllers;

use App\SemesterModel;
use Illuminate\Http\Request;

class SemesterController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('role:admin_dsd');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->input('q');
        $table_semester = SemesterModel::select_by_semester_year($q);
        $data = [
            'table_semester' => $table_semester,
            'q' => $q
        ];
        return view('volunteer/semester/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'table_semester_year'   => [2559,2560,2561,2562],
            'table_semester_no'     => [1,2,3],
            'table_semester_type'   => ["ภาคปกติ","ภาคพิเศษ"],
        ];
        return view('volunteer/semester/create',$data);
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
            'semester_year' => $request->input('semester_year'),
            'semester_no'   => $request->input('semester_no'),
            'semester_type' => $request->input('semester_type')      ,
        ];

        SemesterModel::insert($input);
        return redirect('/semester');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SemesterModel  $semesterModel
     * @return \Illuminate\Http\Response
     */
    public function show($id_semester)
    {
        $table_semester = SemesterModel::select_by_id($id);
        $data = [
            'table_semester' => $table_semester
        ];
        return view('volunteer/semester/show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SemesterModel  $semesterModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $table_semester = SemesterModel::select_by_id($id);
        $data = [
            'table_semester' => $table_semester,
            'table_semester_year'   => [2559,2560,2561,2562],
            'table_semester_no'     => [1,2,3],
            'table_semester_type'   => ["ภาคปกติ","ภาคพิเศษ"],
        ];
        return view('volunteer/semester/edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SemesterModel  $semesterModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = [
            'semester_year' => $request->input('semester_year'),
            'semester_no'   => $request->input('semester_no'),
            'semester_type' => $request->input('semester_type'),
        ];
        SemesterModel::update_by_id($input,$id);
        return redirect('/semester');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SemesterModel  $semesterModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SemesterModel::delete_by_id($id);
        return redirect('/semester');
    }

}

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
        $model = new semesterModel();
        /*$table_semester = $model->select();*/
        /*$data = ['table_Semester' => $table_Semester];*/
       $q = $request->input('q');
        $table_semester = $model->select_search($q);

        $data = [
            'table_semester' => $table_semester,
            'q' => $q
        ];
        return view('monster-lite/semester/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('monster-lite/semester/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('sem_name');

        $model = new semesterModel();
        $model->insert($sem_name);

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
        $model = new SemesterModel();
        $table_semester = $model->select_id_semester($id_semester);
        $data = [
            'table_semester' => $table_semester
        ];
        return view('monster-lite/semester/show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SemesterModel  $semesterModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id_semester)
    {
        $model = new SemesterModel();
        $table_semester = $model->select_id_semester($id_semester);
        $data = [
            'table_Semester' => $table_Semester
        ];
        return view('monster-lite/semester/show',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SemesterModel  $semesterModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, semesterModel $semesterModel)
    {
        $sem_name = $request->input('sem_name');
  
        $model = new semesterModel();
        $model-> update($sem_name,$id_semester);

        return redirect('/Semester');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SemesterModel  $semesterModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(semesterModel $semesterModel)
    {
       $model = new semesterModel();
        $model->delete($id_semester);

        return redirect('/Semester');
    }

}
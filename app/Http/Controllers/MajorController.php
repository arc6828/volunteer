<?php

namespace App\Http\Controllers;

use App\MajorModel;
use App\FacultyModel;
use Illuminate\Http\Request;

class MajorController extends Controller
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
        $table_major = MajorModel::select_by_major_name($q);
        $data = [
            'table_major' => $table_major,
            'q' => $q
        ];
        return view('volunteer/major/index',$data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $table_faculty = FacultyModel::select_all();
        $data = [
            'table_faculty' => $table_faculty
        ];
        return view('volunteer/major/create',$data);
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
            'major_name' => $request->input('major_name'),
            'faculty_id' => $request->input('faculty_id')
        ];
        MajorModel::insert($input);
        return redirect('/major');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MajorModel  $majorModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $table_major = MajorModel::select_by_id($id);
        $data = [
            'table_major' => $table_major
        ];
        return view('volunteer/major/show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MajorModel  $majorModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
   {
       $table_major = MajorModel::select_by_id($id);
       $table_faculty = FacultyModel::select_all();
       $data = [
           'table_major' => $table_major,
           'table_faculty' => $table_faculty
       ];
        return view('volunteer/major/edit',$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MajorModel  $majorModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
   {
        $input = [
           'major_name' => $request->input('major_name'),
           'faculty_id' => $request->input('faculty_id')
        ];
        MajorModel::update_by_id($input,$id);
        return redirect('/major');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MajorModel  $majorModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MajorModel::delete_by_id($id);
        return redirect('/major');
    }
}

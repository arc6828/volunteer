<?php

namespace App\Http\Controllers;

use App\FacultyModel;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->input('q');
        $table_faculty = FacultyModel::select_by_faculty_name($q);
        $data = [
            'table_faculty' => $table_faculty,
            'q' => $q
        ];
        return view('volunteer/faculty/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('volunteer/faculty/create');
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
            'faculty_name' => $request->input('faculty_name')
        ];
        FacultyModel::insert($input);
        return redirect('/faculty');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CustomerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $table_faculty = FacultyModel::select_by_id($id);
        $data = [
            'table_faculty' => $table_faculty
        ];
        return view('volunteer/faculty/show',$data);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CustomerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $table_faculty = FacultyModel::select_by_id($id);
        $data = [
            'table_faculty' => $table_faculty
        ];
        return view('volunteer/faculty/edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CustomerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = [
            'faculty_name' => $request->input('faculty_name')
        ];
        FacultyModel::update_by_id($input,$id);
        return redirect('/faculty');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CustomerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FacultyModel::delete_by_id($id);
        return redirect('/faculty');
    }
}

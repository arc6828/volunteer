<?php

namespace App\Http\Controllers;

use App\FacultyModel;
use Illuminate\Http\Request;

class facultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $model = new facultyModel();
        /*$table_traintrip = $model->select();*/
        /*$data = ['table_traintrip' => $table_traintrip];*/
       $q = $request->input('q');
        $table_faculty = $model->select_search($q);

        $data = [
            'table_faculty' => $table_faculty,
            'q' => $q
        ];
        return view('faculty/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faculty/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $model = new facultyModel();
        $model->insert($name);

        return redirect('/faculty');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\CustomerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
    public function show($id_faculty_auto)
    {
        $model = new facultyModel();
        $table_faculty = $model->select_id_faculty_auto($id_faculty_auto);
        $data = [
            'table_faculty' => $table_faculty
        ];
        return view('faculty/show',$data);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CustomerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id_faculty_auto)
    {
        $model = new facultyModel();
        $table_faculty = $model->select_id_faculty_auto($id_faculty_auto);
        $data = [
            'table_faculty' => $table_faculty
        ];
        return view('faculty/edit',$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CustomerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_faculty_auto)
    {
        $name = $request->input('name');
        $model = new facultyModel();
        $model->update($name,$id_faculty_auto);
        return redirect('/faculty');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CustomerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_faculty_auto)
    {
        $model = new facultyModel();
        $model->delete($id_faculty_auto);

        return redirect('/faculty');

    }
}

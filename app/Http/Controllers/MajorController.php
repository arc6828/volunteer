<?php

namespace App\Http\Controllers;

use App\MajorModel;
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
        $model = new MajorModel();
        /*$table_customer = $model->select();*/
         $q = $request->input('q');
        $table_major = $model->select_search($q);

        $data = ['table_major' => $table_major,'q' => $q];
        return view('monster-lite/major/index',$data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('monster-lite/major/create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
 {
        $major_name = $request->input('major_name');
        $id_faculty = $request->input('id_faculty');
       
        $model = new MajorModel();
        $model->insert($major_name, $id_faculty );

        return redirect('/major');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MajorModel  $majorModel
     * @return \Illuminate\Http\Response
     */
    public function show($id_major_auto)
    {
        $model = new MajorModel();
        $table_major = $model->select_id($id_major_auto);
        $data = [
            'table_major' => $table_major
        ];
        return view('monster-lite/major/show',$data);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MajorModel  $majorModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id_major_auto)
   {
        $model = new MajorModel();
        $table_major = $model->select_id($id_major_auto);
        $data = [
            'table_major' => $table_major
        ];
        return view('monster-lite/major/edit',$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MajorModel  $majorModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_major_auto)
   {
        $major_name = $request->input('major_name');
        $id_faculty = $request->input('id_faculty');

        $model = new MajorModel();
        $model->update($major_name, $id_faculty,$id_major_auto);

        return redirect('/major');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MajorModel  $majorModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_major_auto)
    {
         $model = new MajorModel();
        $model->delete($id_major_auto);

        return redirect('/major');

    }           
}

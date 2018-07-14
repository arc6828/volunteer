<?php

namespace App\Http\Controllers;

use App\ActivityModel;
use Illuminate\Http\Request;

class ActivityController extends Controller
{

    public function __construct()
    {
    $this->middleware('auth');
    $this->middleware('role:admin_dsd,admin_faculty') ;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    $model = new ActivityModel();
    $q = $request->input('q');
 $table_activity = $model->select_search($q);
 $data = [
 'table_activity' => $table_activity,
 'q' => $q
    ];
    return view('activity/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('activity/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $activity_name = $request->input('activity_name');
     $date_start = $request->input('date_start');
     $place = $request->input('place');
     $max_hour = $request->input('max_hour');
     $id_semester = $request->input('id_semester');
     $id_activity_type = $request->input('id_activity_type');
     $id_major = $request->input('id_major');
     $model = new ActivityModel();
     $model->insert($activity_name, $date_start, $place, $max_hour, $id_semester, $id_activity_type, $id_major);
    return redirect('/activity');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ActivityModel  $activityModel
     * @return \Illuminate\Http\Response
     */
    public function show($id_activity)
    {
        $model = new ActivityModel();
 $table_activity = $model->select_id($id_activity);
 $data = [
 'table_activity' => $table_activity
 ];
 return view('activity/show',$data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ActivityModel  $activityModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id_activity)
    {
        $model = new ActivityModel();
     $table_activity = $model->select_id($id_activity);
    $data = [
    'table_activity' => $table_activity
    ];
    return view('activity/edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ActivityModel  $activityModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_activity)
    {
    $activity_name = $request->input('activity_name');
     $date_start = $request->input('date_start');
     $place = $request->input('place');
     $max_hour = $request->input('max_hour');
     $id_semester = $request->input('id_semester');
     $id_activity_type = $request->input('id_activity_type');
     $id_major = $request->input('id_major');
     $model = new ActivityModel();
     $model->update($activity_name, $date_start, $place, $max_hour, $id_semester, $id_activity_type, $id_major, $id_activity);
    return redirect('/activity');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ActivityModel  $activityModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_activity)
    {
        $model = new ActivityModel();
 $model->delete($id_activity);
 return redirect('/activity');
    }
}

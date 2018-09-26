<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ActivityModel;
use App\ActivityTypeModel;
use App\MajorModel;
use App\SemesterModel;

class ActivityController extends Controller
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
        $table_activity = ActivityModel::select_by_activity_name($q);
        $data = [
             'table_activity' => $table_activity,
             'q' => $q
        ];
        return view('volunteer/activity/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $table_activity_type = ActivityTypeModel::select_all();
        $table_semester = SemesterModel::select_all();
        $table_major = MajorModel::select_all();
        $data = [
            'table_activity_type' => $table_activity_type,
            'table_semester' => $table_semester,
            'table_major' => $table_major,
        ];
        return view('volunteer/activity/create',$data);
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
            'activity_name'      => $request->input('activity_name'),
            'date_begin'         => $request->input('date_begin'),
            'date_end'           => $request->input('date_end'),
            'time_begin'         => $request->input('time_begin'),
            'time_end'           => $request->input('time_end'),
            'place'              => $request->input('place'),
            'duration_hour'      => $request->input('duration_hour'),
            'semester_id'        => $request->input('semester_id'),
            'activity_type_id'   => $request->input('activity_type_id'),
            'major_id'           => $request->input('major_id'),
        ];
        ActivityModel::insert($input);

        return redirect('/activity');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ActivityModel  $activityModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $table_activity = ActivityModel::select_by_id($id);
        $data = [
            'table_activity' => $table_activity,
            'id' => $id
        ];
        return view('volunteer/activity/show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ActivityModel  $activityModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $table_activity = ActivityModel::select_by_id($id);
        $table_activity_type = ActivityTypeModel::select_all();
        $table_semester = SemesterModel::select_all();
        $table_major = MajorModel::select_all();

        $data = [
            'table_activity' => $table_activity,
            'table_activity_type' => $table_activity_type,
            'table_semester' => $table_semester,
            'table_major' => $table_major,
            'id' => $id
        ];
        return view('volunteer/activity/edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ActivityModel  $activityModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = [
            'activity_name'      => $request->input('activity_name'),
            'date_begin'         => $request->input('date_begin'),
            'date_end'           => $request->input('date_end'),
            'time_begin'         => $request->input('time_begin'),
            'time_end'           => $request->input('time_end'),
            'place'              => $request->input('place'),
            'duration_hour'      => $request->input('duration_hour'),
            'semester_id'        => $request->input('semester_id'),
            'activity_type_id'   => $request->input('activity_type_id'),
            'major_id'           => $request->input('major_id'),
        ];
        ActivityModel::update_by_id($input,$id);
        return redirect('/activity');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ActivityModel  $activityModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ActivityModel::delete_by_id($id);
        return redirect('/activity');
    }
}

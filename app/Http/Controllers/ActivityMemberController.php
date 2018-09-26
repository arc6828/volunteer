<?php

namespace App\Http\Controllers;

use App\ActivityMemberModel;
use Illuminate\Http\Request;

class ActivityMemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('role:student,admin_faculty,admin_dsd');
    }

    public function index(Request $request, $activity_id)
    {
        $q = $request->input('q');
        $table_activity_member =ActivityMemberModel::select_all($activity_id);

        $data = [
            'table_activity_member' => $table_activity_member,
            'q' => $q,
            'activity_id' => $activity_id
        ];
        return view('volunteer/activity_member/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($activity_id)
    {
        return view('volunteer/activity_member/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $activity_id)
    {
        $id_student = $request->input('id_student');
        $id_activity = $request->input('id_activity');
        $hour = $request->input('hour');

        $model = new ActivityMemberModel();
        $model->insert($id_student, $id_activity, $hour);

        return redirect('activity/{$activity_id}/member');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CustomerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
    public function show($activity_id, $id)
    {
        $model = new ActivityMemberModel();
        $table_activity_member = $model->select_id($id);
        $data = [
            'table_activity_member' => $table_activity_member
        ];
        return view('volunteer/activity_member/show',$data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CustomerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
    public function edit($activity_id, $id)
    {
        $model = new ActivityMemberModel();
        $table_activity_member = $model->select_id($id);
        $data = [
            'table_activity_member' => $table_activity_member
        ];
        return view('volunteer/activity_member/edit',$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CustomerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $activity_id, $id)
    {
        $id_student = $request->input('id_student');
        $id_activity = $request->input('id_activity');
        $hour = $request->input('hour');

        $model = new ActivityMemberModel();
        $model->update($id_student, $id_activity, $hour,$id);

        return redirect('activity/{$activity_id}/member');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CustomerModel  $customerModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($activity_id, $id)
    {
        $model = new ActivityMemberModel();
        $model->delete($id);

        return redirect('activity/{$activity_id}/member');

    }

}

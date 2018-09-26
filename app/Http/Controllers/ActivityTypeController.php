<?php

namespace App\Http\Controllers;

use App\ActivityTypeModel;
use Illuminate\Http\Request;

class ActivityTypeController extends Controller
{
	public function __construct()
	{
        $this->middleware('auth');
        //$this->middleware('role:admin_dsd') ;
	}


	public function index(Request $request)
	{
		$q = $request->input('q');
		$table_activity_type = ActivityTypeModel::select_by_activity_type_name($q);
		$data = [
			'table_activity_type' => $table_activity_type,
			'q' => $q
		];
		return view('volunteer/activity_type/index',$data);
	}

	public function create()
	{
		return view('volunteer/activity_type/create');
	}

	public function store(Request $request)
	{
		$input = [
			'activity_type_name' => $request->input('activity_type_name')
		];
		ActivityTypeModel::insert($input);
		return redirect('/activity-type');
	}


	public function show($id)
	{
		$table_activity_type = ActivityTypeModel::select_by_id($id);
		$data = [
			'table_activity_type' => $table_activity_type
		];
		return view('volunteer/activity_type/show',$data);
	}

	public function edit($id)
	{
		$table_activity_type = ActivityTypeModel::select_by_id($id);
		$data = [
			'table_activity_type' => $table_activity_type
		];
		return view('volunteer/activity_type/edit',$data);
	}

	public function update(Request $request, $id)
	{
		$input = [
			'activity_type_name' => $request->input('activity_type_name')
		];
		ActivityTypeModel::update_by_id($input,$id);
		return redirect('/activity-type');
	}

	public function destroy($id)
	{
		ActivityTypeModel::delete_by_id($id);
		return redirect('/activity-type');
	}
}

<?php

namespace App\Http\Controllers;

use App\ActivityTypeModel;
use Illuminate\Http\Request;

class ActivityTypeController extends Controller
{
	public function __construct()
	{
        $this->middleware('auth');
        $this->middleware('role:admin_dsd') ;
	}


	public function index(Request $request)
	{
		$model = new ActivityTypeModel();
		//$table_activity_type = $model->select();
		$q = $request->input('q');
		$table_activity_type = $model->select_search($q);
		$data = [
			'table_activity_type' => $table_activity_type,
			'q' => $q
		];
		return view('monster-lite/activity_type/index',$data);
	}
	    
	public function create()
	{
		return view('monster-lite/activity_type/create');
	}

	public function store(Request $request)
	{
		$activity_type_name = $request->input('activity_type_name');
		$model = new ActivityTypeModel();
		$model->insert($activity_type_name);
		return redirect('/activity-type');
	}


	public function show($id)
	{
		$model = new ActivityTypeModel();
		$table_activity_type = $model->select_id($id);
		$data = [
		'table_activity_type' => $table_activity_type
		];
		return view('monster-lite/activity_type/show',$data);
	}

	public function edit($id)
	{
		$model = new ActivityTypeModel();
		$table_activity_type = $model->select_id($id);
		$data = [
		'table_activity_type' => $table_activity_type
		];
		return view('monster-lite/activity_type/edit',$data);
	}

	public function update(Request $request, $id)
	{
		$activity_type_name = $request->input('activity_type_name');
		$model = new ActivityTypeModel();
		$model->update($activity_type_name,$id);
		return redirect('/activity-type');
	}
	
	public function destroy($id)
	{
		$model = new ActivityTypeModel();
		$model->delete($id);
		return redirect('/activity-type');
	}
}

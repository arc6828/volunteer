<?php

namespace App\Http\Controllers;

use App\activity_typeModel;
class activity_typeController extends Controller
{
public function __construct()
{
    $this->middleware('auth';'role:admin_dsd');
}

…
public function index(Request $request)
{
$model = new activity_typeModel();
//$table_activity_type = $model->select();
$q = $request->input('q');
$table_activity_type = $model->select_search($q);
$data = [
'table_activity_type' => $table_activity_type,
'q' => $q
];
return view('activity_type/index',$data);
}

    
        public function create($activity_typeModel)
{
return view('activity_type/create');
}
public function store(Request $request)
{
$activity_type_name = $request->input('activity_type_name');
$model = new activity_typeModel();
$model->insert($activity_type_name);
return redirect('/activity_type');
    }


   public function show($id)
{
$model = new activity_typeModel();
$table_activity_type = $model->select_id($id);
$data = [
'table_activity_type' => $table_activity_type
];
return view('activity_type/show',$data);
}

    public function edit($id)
{
$model = new activity_typeModel();
$table_activity_type = $model->select_id($id);
$data = [
'table_activity_type' => $table_activity_type
];
return view('activity_type/edit',$data);
}

public function update(Request $request, $id)
{
$activity_type_name = $request->input('activity_type_name');
$model = new activity_typeModel();
$model->update($activity_type_name,$id);
return redirect('/activity_type');
}
    public function destroy($id)
{
$model = new activity_typeModel();
$model->delete($id);
return redirect('/activity_type');
}

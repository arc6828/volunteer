<?php

namespace App;

use Illuminate\Support\Facades\DB;

class ActivityTypeModel
{
    function select(){
		$sql = "select * from activity_type";
		return DB::select($sql, []);
	}

	function select_id($id){
		$sql = "select * from activity_type where id_activity_type = {$id}";
		return DB::select($sql, []);
	}

	function select_search($q){
		$sql = "select * from activity_type where activity_type_name like '%{$q}%'";
		return DB::select($sql, []);
	}

	function insert($activity_type_name){
		$sql = "insert into activity_type (activity_type_name) 
				values ( '{$activity_type_name}')";
		DB::insert($sql, []);
	}

	function update($id,$activity_type_name){
		$sql = "update activity_type set 
				activity_type_name = '{$activity_type_name}'
				where id_activity_type = {$id}";
		DB::update($sql, []);
	}

	function delete($id){
		$sql = "delete from teacher where id_act_mem_auto = {$id}";
		DB::delete($sql, []);
	}

}
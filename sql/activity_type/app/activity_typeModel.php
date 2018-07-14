<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activity_typeModel extends Model
{
    function select(){
		$sql = "select * from activity_type";
		return DB::select($sql, []);
	}

	function select_id($id){
		$sql = "select * from activity_type where id = {$id}";
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

	function update($activity_type_name){
		$sql = "update activity_type set 
				activity_type_name = '{$activity_type_name}';
		DB::update($sql, []);
	}

	function delete($id){
		$sql = "delete from teacher where id = {$id}";
		DB::delete($sql, []);
	}

}
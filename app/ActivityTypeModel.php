<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class ActivityTypeModel extends Model
{
    public static function select_all(){
		$sql = "select * from activity_type";
		return DB::select($sql, []);
	}

	public static function select_id($id){
		$sql = "select * from activity_type where id_activity_type = {$id}";
		return DB::select($sql, []);
	}

	public static function select_search($q){
		$sql = "select * from activity_type where activity_type_name like '%{$q}%'";
		return DB::select($sql, []);
	}

	public static function insert($activity_type_name){
		$sql = "insert into activity_type (activity_type_name)
				values ( '{$activity_type_name}')";
		DB::insert($sql, []);
	}

	public static function update_by_id($id,$activity_type_name){
		$sql = "update activity_type set
				activity_type_name = '{$activity_type_name}'
				where id_activity_type = {$id}";
		DB::update($sql, []);
	}

	public static function delete_by_id($id){
		$sql = "delete from teacher where id_act_mem_auto = {$id}";
		DB::delete($sql, []);
	}

}

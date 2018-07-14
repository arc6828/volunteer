<?php

namespace App;

use Illuminate\Support\Facades\DB;

class ActivityModel 
{
    function select(){
		$sql = "select * from activity";
		return DB::select($sql, []);
	}

	function select_id($id_activity){
		$sql = "select * from activity where id_activity = {$id_activity}";
		return DB::select($sql, []);
	}

	function select_search($q){
		$sql = "select * from activity where activity_name like '%{$q}%'";
		return DB::select($sql, []);
	}

	function insert($activity_name, $date_start, $place, $max_hour, $id_semester, $id_activity_type, $id_major){
		$sql = "insert into activity (activity_name,date_start,place,max_hour,id_semester,id_activity_type,id_major) 
				values ( '{$activity_name}', '{$date_start}', '{$place}', {$max_hour}, {$id_semester}, {$id_activity_type}, {$id_major})";
		DB::insert($sql, []);
	}

	function update($activity_name, $date_start, $place, $max_hour, $id_semester, $id_activity_type, $id_major, $id_activity){
		$sql = "update activity set 
				activity_name = '{$activity_name}', date_start = '{$date_start}',  
				place =  '{$place}', max_hour =  {$max_hour},
				id_semester = {$id_semester}, id_activity_type = {$id_activity_type},
				id_major = {$id_major}
				where id_activity = {$id_activity}";
		DB::update($sql, []);
	}

	function delete($id_activity){
		$sql = "delete from activity where id_activity = {$id_activity}";
		DB::delete($sql, []);
	}

}
<?php

namespace App;

use Illuminate\Support\Facades\DB;

class ActivityMemberModel 
{
    function select(){
		$sql = "select * from activity_member";
		return DB::select($sql, []);
	}

	function select_id($id_act_mem_auto){
		$sql = "select * from activity_member where id_act_mem_auto = {$id_act_mem_auto}";
		return DB::select($sql, []);
	}

	function select_search($q){
		$sql = "select * from activity_member where id_act_mem_auto like '%{$q}%'";
		return DB::select($sql, []);
	}

	function insert($id_student, $id_activity, $hour){
		$sql = "insert into activity_member (id_student,id_activity,hour) 
				values ( {$id_student}, {$id_activity}, {$hour})";
		DB::insert($sql, []);
	}

	function update($id_student, $id_activity, $hour, $id_act_mem_auto){
		$sql = "update activity_member set 
				id_student = {$id_student}, id_activity = {$id_activity},  
				hour =  {$hour}
				where id_act_mem_auto = {$id_act_mem_auto}";
		DB::update($sql, []);
	}

	function delete($id_act_mem_auto){
		$sql = "delete from activity_member where id_act_mem_auto = {$id_act_mem_auto}";
		DB::delete($sql, []);
	}

}
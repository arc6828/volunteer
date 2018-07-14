<?php

namespace App;

use Illuminate\Support\Facades\DB;

class facultyModel 
{
    function select(){
		$sql = "select * from faculty";
		return DB::select($sql, []);
	}

	function select_id_faculty_auto($id_faculty_auto){
		$sql = "select * from faculty where id_faculty_auto = {$id_faculty_auto}";
		return DB::select($sql, []);
	}

	function select_search($q){
		$sql = "select * from faculty where id_faculty_auto like '%{$q}%'";
		return DB::select($sql, []);
	}

	function insert($name){
		$sql = "insert into faculty (name) 
				values ('{$name}')";
		echo "$sql";
		DB::insert($sql, []);
	}

	function update($name,$id_faculty_auto){
		$sql = "update faculty set 
				name = '{$name}'
				where id_faculty_auto = {$id_faculty_auto}";
		echo "$sql";
		DB::update($sql, []);
	}

	function delete($id_faculty_auto){
		$sql = "delete from faculty where id_faculty_auto = {$id_faculty_auto}";
		DB::delete($sql, []);
	}

}
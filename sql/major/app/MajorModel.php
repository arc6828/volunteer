<?php

namespace App;

use Illuminate\Support\Facades\DB;

class MajorModel 
{
    function select(){
		$sql = "select * from major";
		return DB::select($sql, []);
	}

	function select_id($id_major_auto){
		$sql = "select * from major where id_major_auto = {$id_major_auto}";
		return DB::select($sql, []);
	}

	function select_search($q){
		$sql = "select * from major where id_major_auto like '%{$q}%'";
		return DB::select($sql, []);
	}

	function insert($major_name, $id_faculty){
		$sql = "insert into major (major_name,id_faculty) 
				values ( '{$major_name}', {$id_faculty})";
		DB::insert($sql, []);
	}

	function update($major_name, $id_faculty,$id_major_auto){
		$sql = "update major set 
				major_name = '{$major_name}', id_faculty = {$id_faculty}
				where id_major_auto = {$id_major_auto}";
		DB::update($sql, []);
	}

	function delete($id_major_auto){
		$sql = "delete from major where id_major_auto = {$id_major_auto}";
		DB::delete($sql, []);
	}

}
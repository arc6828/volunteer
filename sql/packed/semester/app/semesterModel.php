<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SemesterModel extends Model
{
    function select(){
		$sql = "select * from semester";
		return DB::select($sql, []);
	}

	function select_id($id _semester){
		$sql = "select * from semester where id_semester = {$id_semester}";
		return DB::select($sql, []);
	}

	function select_search($q){
		$sql = "select * from semester where sem_name like '%{$q}%'";
		return DB::select($sql, []);
	}

	function insert($sem_name){
		$sql = "insert into semester (sem_name) 
				values ('{$sem_name}')";
		DB::insert($sql, []);
	}

	function update($sem_name, $id_semester){
		$sql = "update semester set 
				sem_name = '{$sem_name}',where id _semester = {$id_semester}";
		DB::update($sql, []);
	}

	function delete($id_semester){
		$sql = "delete from semester where id _semester = {$id_semester}";
		DB::delete($sql, []);
}

}

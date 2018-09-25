<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SemesterModel extends Model
{
    public static function select_all(){
		$sql = "select * from semester";
		return DB::select($sql, []);
	}

	public static function select_by_id($id_semester){
		$sql = "select * from semester where id_semester = {$id_semester}";
		return DB::select($sql, []);
	}

	public static function select_search($q){
		$sql = "select * from semester where sem_name like '%{$q}%'";
		return DB::select($sql, []);
	}

	public static function insert($sem_name){
		$sql = "insert into semester (sem_name)
				values ('{$sem_name}')";
		DB::insert($sql, []);
	}

	public static function update_by_id($sem_name, $id_semester){
		$sql = "update semester set
				sem_name = '{$sem_name}',where id _semester = {$id_semester}";
		DB::update($sql, []);
	}

	public static function delete_by_id($id_semester){
		$sql = "delete from semester where id _semester = {$id_semester}";
		DB::delete($sql, []);
    }

}

<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FacultyModel extends Model
{
    public static function select(){
		$sql = "select * from faculty";
		return DB::select($sql, []);
	}

	public static function select_id_faculty_auto($id_faculty_auto){
		$sql = "select * from faculty where id_faculty_auto = {$id_faculty_auto}";
		return DB::select($sql, []);
	}

	public static function select_search($q){
		$sql = "select * from faculty where id_faculty_auto like '%{$q}%'";
		return DB::select($sql, []);
	}

	public static function insert($name){
		$sql = "insert into faculty (name)
				values ('{$name}')";
		echo "$sql";
		DB::insert($sql, []);
	}

	public static function update($name,$id_faculty_auto){
		$sql = "update faculty set
				name = '{$name}'
				where id_faculty_auto = {$id_faculty_auto}";
		echo "$sql";
		DB::update($sql, []);
	}

	public static function delete($id_faculty_auto){
		$sql = "delete from faculty where id_faculty_auto = {$id_faculty_auto}";
		DB::delete($sql, []);
	}

}

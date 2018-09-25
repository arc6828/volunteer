<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MajorModel extends Model
{
    public static function select_all(){
		$sql = "select * from major";
		return DB::select($sql, []);
	}

	public static function select_by_id($id_major_auto){
		$sql = "select * from major where id_major_auto = {$id_major_auto}";
		return DB::select($sql, []);
	}

	public static function select_search($q){
		$sql = "select * from major where id_major_auto like '%{$q}%'";
		return DB::select($sql, []);
	}

	public static function insert($major_name, $id_faculty){
		$sql = "insert into major (major_name,id_faculty)
				values ( '{$major_name}', {$id_faculty})";
		DB::insert($sql, []);
	}

	public static function update_by_id($major_name, $id_faculty,$id_major_auto){
		$sql = "update major set
				major_name = '{$major_name}', id_faculty = {$id_faculty}
				where id_major_auto = {$id_major_auto}";
		DB::update($sql, []);
	}

	public static function delete_by_id($id_major_auto){
		$sql = "delete from major where id_major_auto = {$id_major_auto}";
		DB::delete($sql, []);
	}

}

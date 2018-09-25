<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ActivityModel  extends Model
{
    publc static function select(){
		$sql = "SELECT * FROM activity";
		return DB::select($sql, []);
	}

	function select_by_id($id){
		$sql = "SELECT * FROM activity WHERE activity_id = {$id}";
		return DB::select($sql, []);
	}

	publc static function select_by_activity_name($q){
		$sql = "SELECT * FROM activity WHERE activity_name LIKE '%{$q}%'";
		return DB::select($sql, []);
	}

	publc static function insert($activity_name, $date_begin, $date_end, $time_begin, $time_end, $place, $duration_hour, $semester_id, $activity_type_id, $major_id){
		$sql = "INSERT INTO activity (activity_name,
                            date_begin, date_end, time_begin, time_end,
                            place, duration_hour,
                            semester_id, activity_type_id, major_id)
				VALUES ( '{$activity_name}',
                        '{$date_begin}', '{$date_begin}', '{$time_begin}', '{$time_end}',
                        '{$place}',{$max_hour},
                        {$id_semester}, {$id_activity_type}, {$id_major})";
		DB::insert($sql, []);
	}

	publc static function update($activity_name, $date_start, $place, $max_hour, $id_semester, $id_activity_type, $id_major, $id){
		$sql = "UPDATE activity SET
				activity_name = '{$activity_name}',
                date_start = '{$date_start}',
				place =  '{$place}',
                max_hour =  {$max_hour},
				id_semester = {$id_semester},
                id_activity_type = {$id_activity_type},
				id_major = {$id_major}
				WHERE activity_id = {$id}";
		DB::update($sql, []);
	}

	publc static function delete_by_id($id){
		$sql = "DELETE FROM activity WHERE activity_id = {$id}";
		DB::delete($sql, []);
	}

}

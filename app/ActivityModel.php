<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ActivityModel  extends Model
{
    public static function select_all(){
        return DB::table('activity')->get();
	}

	public static function select_by_id($id){
        return DB::table('activity')
            ->join('activity_type', 'activity_type.activity_type_id', '=', 'activity.activity_type_id')
            ->join('semester', 'semester.semester_id', '=', 'activity.semester_id')
            ->join('major', 'major.major_id', '=', 'activity.major_id')
            ->where('activity_id', '=' , $id )
            ->get();
	}

	public static function select_by_activity_name($q){
        return DB::table('activity')
            ->where('activity_name', 'like' , "%{$q}%" )
            ->get();
	}

	public static function insert($input){
        DB::table('activity')->insert($input);
	}

	public static function update_by_id($input, $id){
        DB::table('activity')
            ->where('activity_id', $id)
            ->update($input);
	}

	public static function delete_by_id($id){
        DB::table('activity')
            ->where('activity_id', '=', $id)
            ->delete();
	}
}

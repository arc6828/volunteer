<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ActivityMemberModel extends Model
{
    public static function select_all($activity_id){
        return DB::table('activity_member')
            ->join('activity', 'activity_member.activity_id', '=', 'activity.activity_id')
            ->join('student', 'activity_member.serial', '=', 'student.serial')
            ->where('activity_member.activity_id', $activity_id)
            ->get();
	}

	public static function select_by_id($activity_id, $id){
        return DB::table('activity_member')
            ->join('activity', 'activity_member.activity_id', '=', 'activity.activity_id')
            ->join('student', 'activity_member.serial', '=', 'student.serial')
            ->where('activity_member.activity_id', '=' , $activity_id )
            ->where('activity_member.activity_member_id', '=' , $id )
            ->get();
	}

	public static function select_by_student_name($activity_id, $q){
        return DB::table('activity_member')
            ->join('activity', 'activity_member.activity_id', '=', 'activity.activity_id')
            ->join('student', 'activity_member.serial', '=', 'student.serial')
            ->where('activity_member.activity_id', '=' , $activity_id )
            ->where('student.student_name', 'like' , "%{$q}%" )
            ->get();
	}

	public static function insert($input){
        DB::table('activity_member')->insert($input);
	}

	public static function update_by_id($input, $id){
        DB::table('activity_member')
            ->where('activity_member_id', $id)
            ->update($input);
	}

	public static function delete_by_id($id){
        DB::table('activity_member')
            ->where('activity_member_id', '=', $id)
            ->delete();
	}

}

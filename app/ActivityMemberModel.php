<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ActivityMemberModel extends Model
{
    public static function select_all($activity_id){
        return DB::table('activity_member')
            ->where('activity_id', $activity_id)
            ->get();
	}

	public static function select_by_id($activity_id, $id){
		$sql = "select * from activity_member where id_act_mem_auto = {$id}";
		return DB::select($sql, []);
	}

	public static function select_by_($activity_id, $q){
		$sql = "select * from activity_member where id_act_mem_auto like '%{$q}%'";
		return DB::select($sql, []);
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

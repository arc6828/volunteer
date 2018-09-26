<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class ActivityTypeModel extends Model
{
    public static function select_all(){
        return DB::table('activity_type')->get();
	}

	public static function select_by_id($id){
        return DB::table('activity_type')
            ->where('activity_type_id', '=' , $id )
            ->get();
	}

	public static function select_by_activity_type_name($q){
        return DB::table('activity_type')
            ->where('activity_type_name', 'like' , "%{$q}%" )
            ->get();
	}

	public static function insert($input){
		DB::table('activity_type')->insert($input);
	}

	public static function update_by_id($input, $id){
        DB::table('activity_type')
            ->where('activity_type_id', $id)
            ->update($input);
	}

	public static function delete_by_id($id){
        DB::table('activity_type')
            ->where('activity_type_id', '=', $id)
            ->delete();
	}

}

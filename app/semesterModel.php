<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SemesterModel extends Model
{
    public static function select_all(){
        return DB::table('semester')
            ->get();
	}

	public static function select_by_id($id){
        return DB::table('semester')
            ->where('semester_id', '=' , $id )
            ->get();
	}

    public static function select_by_semester_year($q){
        return DB::table('semester')
            ->where('semester_year', 'like' , "%{$q}%" )
            ->get();
	}

    public static function insert($input){
        DB::table('semester')->insert($input);
	}

	public static function update_by_id($input, $id){
        DB::table('semester')
            ->where('semester_id', $id)
            ->update($input);
	}

	public static function delete_by_id($id){
        DB::table('semester')
            ->where('semester_id', '=', $id)
            ->delete();
    }

}

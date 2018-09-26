<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StudentModel extends Model
{
    public static function select(){
        return DB::table('student')
            ->get();
	}

	public static function select_by_id($id){
        return DB::table('student')
            ->where('serial', '=' , $id )
            ->get();
	}

    public static function select_by_student_name($q){
        return DB::table('student')
            ->where('student_name', 'like' , "%{$q}%" )
            ->get();
	}

	public static function insert($input){
		DB::table('student')->insert($input);
	}

	public static function update_by_id($input, $id){
        DB::table('student')
            ->where('serial', $id)
            ->update($input);
	}

	public static function delete_by_id($id){
        DB::table('student')
            ->where('serial', '=', $id)
            ->delete();
	}
}

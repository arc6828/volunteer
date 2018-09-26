<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MajorModel extends Model
{
    public static function select_all(){
		return DB::table('major')
            ->join('faculty', 'major.faculty_id', '=', 'faculty.faculty_id')
            ->get();
	}

	public static function select_by_id($id){
        return DB::table('major')
            ->join('faculty', 'major.faculty_id', '=', 'faculty.faculty_id')
            ->where('major.major_id', '=' , $id )
            ->get();
	}

	public static function select_by_major_name($q){
        return DB::table('major')
            ->join('faculty', 'major.faculty_id', '=', 'faculty.faculty_id')
            ->where('major_name', 'like' , "%{$q}%" )
            ->get();
	}

	public static function insert($input){
		DB::table('major')->insert($input);
	}

	public static function update_by_id($input,$id){
        DB::table('major')
            ->where('major_id', $id)
            ->update($input);
	}

	public static function delete_by_id($id){
        DB::table('major')
            ->where('major_id', '=', $id)
            ->delete();
	}
}

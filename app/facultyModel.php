<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FacultyModel extends Model
{
    public static function select_all(){
        return DB::table('faculty')->get();
	}

	public static function select_by_id($id){
        return DB::table('faculty')
            ->where('faculty_id', '=' , $id )
            ->get();
	}

    public static function select_by_faculty_name($q){
        return DB::table('faculty')
            ->where('faculty_name', 'like' , "%{$q}%" )
            ->get();
	}

	public static function insert($input){
        DB::table('faculty')->insert($input);
	}

	public static function update_by_id($input,$id){
        DB::table('faculty')
            ->where('faculty_id', $id)
            ->update($input);
	}

	public static function delete_by_id($id){
        DB::table('faculty')
            ->where('faculty_id', '=', $id)
            ->delete();
	}

}

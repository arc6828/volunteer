<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StudentModel 
{
    function select(){
		$sql = "select * from student";
		return DB::select($sql, []);
	}

	function select_id($id_student_auto){
		$sql = "select * from student where id_student_auto = {$id_student_auto}";
		return DB::select($sql, []);
	}

	function select_search($q){
		$sql = "select * from student where id_student like '%{$q}%'";
		return DB::select($sql, []);
	}

	function insert($id_student, $stu_name, $stu_lastname, $degree ,$major){
		$sql = "insert into student (id_student,stu_name,stu_lastname,degree,major) 
				values ( '{$id_student}', {$stu_name}, '{$stu_lastname}', {$degree} , '{$major}')";
		DB::insert($sql, []);
	}

	function update($id_student, $stu_name, $stu_lastname, $degree ,$major, $id_student_auto){
		$sql = "update student set 
				id_student = '{$id_student}', stu_name = {$stu_name}, stu_lastname = {$stu_lastname},  
				degree =  '{$degree}', major =  {$major}
				where id_student_auto = {$id_student_auto}";
		DB::update($sql, []);
	}

	function delete($id_student_auto){
		$sql = "delete from student where id_student_auto = {$id_student_auto}";
		DB::delete($sql, []);
	}
}
<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\mydb;

class StudentModel extends Model
{
    function select(){
		$sql = "select * from student";
		return mydb::select($sql, []);
	}

	function select_id($id_student_auto){
		$sql = "select * from student where id_student_auto = {$id_student_auto}";
		return mydb::select($sql, []);
	}

	function select_search($q){
		$sql = "select * from student where id_student like '%{$q}%'";
		return mydb::select($sql, []);
	}

	function insert($id_student, $stu_name, $stu_lastname, $degree ,$major){
		$sql = "insert into student (id_student,stu_name,stu_lastname,degree,major) 
				values ( '{$id_student}', {$stu_name}, '{$stu_lastname}', {$degree} , '{$major}')";
		mydb::insert($sql, []);
	}

	function update($id_student, $stu_name, $stu_lastname, $degree ,$major, $id_student_auto){
		$sql = "update student set 
				id_student = '{$id_student}', stu_name = {$stu_name}, stu_lastname = {$stu_lastname},  
				degree =  '{$degree}', major =  {$major}
				where id_student_auto = {$id_student_auto}";
		mydb::update($sql, []);
	}

	function delete($id_student_auto){
		$sql = "delete from student where id_student_auto = {$id_student_auto}";
		mydb::delete($sql, []);
	}
}
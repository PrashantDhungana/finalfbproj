<?php 

namespace App\Core;
use App\Model\User as UserData;

abstract class Controller extends Common
{
	protected function render($filePath, $data = [])
	{
		extract($data);
		require(APPPATH."views/" . $filePath . ".php");
	}
	// protected function model($u_id,$address,$email,$dob,$gender,$passwd,$fname,$lname,$phone){
	// 	createTable($u_id,$address,$email,$dob,$gender,$passwd,$fname,$lname,$phone);
	// }

}
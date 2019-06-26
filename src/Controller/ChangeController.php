<?php
namespace App\Controller;

use App\Core\Controller as BaseController;

class ChangeController extends BaseController{
	public function changepasswd(){
			
			if (isset($_POST['passwdChange'])) {
				$passwdChange=new \App\Model\Passwdchange;
				if ($passwdChange->passwdCheck($_POST)&&$passwdChange->strongCheck($_POST)) {
				$passwdChange->passwordchange($_POST);
				}
				//$this->render('register/changepasswd');

			}
				$this->render('register/changepasswd');

	}
	public function logOut(){
		$this->redirect('register/index');
	}
}
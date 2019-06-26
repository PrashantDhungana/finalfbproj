<?php
namespace App\Controller;

use App\Core\Controller as BaseController;

class WelcomeController extends BaseController{

	public function welcome()
	{
		if (isset($_POST['postSmt'])) 
		{
			$cmntModel = new \App\Model\Post;

			$cmntModel->postSth($_POST);

			$this->render('register/welcome',['successString'=>'Post Added Successfully']);

		}
		else
		$this->render('register/welcome');

	}

	public function postCall()

	{
			$grabModel = new \App\Model\GrabPost;
			$grabModel->grabSth();

	}

			public function logout(){
		session_destroy();
		$this->redirect('register/index');
			}

			public function cmntPost(){
				if (isset($_GET['Cmnt'])) {
					
				$postCmnt=new \App\Model\Comment;
				$postCmnt->postCmnt($_GET);
				$this->redirect('welcome/welcome');
				}

				if (isset($_GET['viewCmnt'])) {
					$viewCmnt=new \App\Model\ViewCmnt;
					$viewCmnt->cmntGrab($_GET);
					//$this->render('register/welcome',['comments'=>$array]);
				}
			}


			public function passwdChange(){
				$this->redirect('change/changepasswd');
			}

}  
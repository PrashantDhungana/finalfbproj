<?php 

namespace App\Model;

use App\Core\Model as BaseModel;

class Passwdchange extends BaseModel{
	public function passwordchange($array){
        $count= $_SESSION['error'];
		$email=$array['email'];
		$newPasswd=$array['newPasswd'];
		$oldPasswd=$array['oldPasswd'];

		$sql = "SELECT COUNT(email) AS count FROM users WHERE email='$email';";
        $row=$this->db->query($sql);
        $resultArray= $row->fetch_assoc();
        if ($resultArray['count']==0) {
        	$_SESSION['error']=++$count;
        	echo $_SESSION['error'];
        	echo "Invalid Email/Password";
        	if ($_SESSION['error']>=2) {
        			session_destroy();
					$this->redirect('register/index');
        			
        	}
        }
        else{

					$sql = "SELECT password AS passwd FROM users WHERE email='$email';";
			        $row=$this->db->query($sql);
			        $resultArray= $row->fetch_assoc();
			        $dbpasswd=$resultArray['passwd'];

			        ++$_SESSION['error'];
			        if (password_verify($oldPasswd,$dbpasswd))
			         {
					         	$newPasswd=password_hash($newPasswd,PASSWORD_DEFAULT);
					        	$sql = "UPDATE users
										SET password = '$newPasswd'
										WHERE email='$email'
				      			;";
				        
						        if ($this->db->query($sql)) {
						        	echo("Password Change successfull");
						        }
						        else echo("Error during password change");
				        
				     }
				     else 
					     {
								if ($_SESSION['error']>=2) {
				        		session_destroy();
					     }
			        }

        }


	}


	public function passwdCheck($array){
		if ($array['oldPasswd']!=$array['newPasswd']) {
			return true;
		}
		else echo("Please choose a new password");
	}

	public function strongCheck($array){
	if (preg_match('/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/',$array['newPasswd'])){
      return true;
    }
    else echo("Please choose a strong password.");
	}
}
<?php 

namespace App\Model;

use App\Core\Model as BaseModel;

class Post extends BaseModel{
	public function postSth($array)
	{
		$comntContent=$array['postSth'];
		$uID=$_SESSION['userID'];

		$todayDate=date('Y-m-d');

		$sql = "INSERT INTO post
      			(user_id,post_date,post_content)
      			VALUES
      			('$uID','$todayDate','$comntContent')
      			;";
        
        $this->db->query($sql);
	}
}
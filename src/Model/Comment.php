<?php 

namespace App\Model;

use App\Core\Model as BaseModel;

class Comment extends BaseModel{
	public function postCmnt($array){
		$cmntContent=$array['Comment'];
		$uID=$_SESSION['userID'];
		$cmntDate=date('Y-m-d');
		$postID=$array['postID'];
            // sql to insert
    $sql = "INSERT INTO comments
      			(user_id,post_id,comment_date,comment_content)
      			VALUES
      			('$uID','$postID','$cmntDate','$cmntContent')
      			;";
        
        $this->db->query($sql);
	}
}
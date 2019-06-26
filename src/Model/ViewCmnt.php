<?php 

namespace App\Model;

use App\Core\Model as BaseModel;

class ViewCmnt extends BaseModel{
	public function cmntGrab($array){
	$postID=$array['postID'];
	$sql = "SELECT comment_content AS content FROM comments WHERE post_id='$postID';";
    $result=$this->db->query($sql);
				if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo $row["content"]."<br>";
			    }
			}
			else
				echo "No comments found.";
	}
}
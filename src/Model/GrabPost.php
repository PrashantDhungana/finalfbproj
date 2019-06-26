<?php 

namespace App\Model;

use App\Core\Model as BaseModel;

class GrabPost extends BaseModel{
	public function grabSth()
	{
    $sql = "SELECT post_content,user_id,post_id FROM post;";
    $result=$this->db->query($sql);

 if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	$uID=$row['user_id'];
		    	$sqlUname = "SELECT f_name FROM users WHERE user_id='$uID';";
    			$resultUname=$this->db->query($sqlUname);
    			$rowUname=$resultUname->fetch_assoc();

		    	?>
				<div style="background-color: #009688; color: white;"><?php echo "Posted By:".$rowUname['f_name'];?></div>
		    	<div style="background-color: #212529; color: white; text-align: center; margin: auto;">
		    		<?php echo $row['post_content']; ?>
		    	</div>
		    	<div align="center">
		    	<form action="cmntPost" method="GET">
		    		<textarea maxlength="500" placeholder="Enter Your Comment Here" name="Comment">
					</textarea>
					<input type="hidden" name="postID" value="<?php echo $row['post_id'];?>">
					<button type="submit" name="Cmnt">Comment</button>
					<button type="submit" name="viewCmnt">View Comments</button>
		    	</form>
				</div>
		    	<?php
		    	echo "<br>";
		    	
		    }
		}

		
	}
}
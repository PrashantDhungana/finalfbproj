<?php

if($_SESSION['userName']==NULL)
{
	echo "User not found";
}
else
{
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<style>
		.posts{
			background-color: #007bff;
			opacity: 0.7;
			text-align: center;
		}
	</style>
	<script>
		function expandCmnt(val){
			document.getElementById(val).style.display="block";
		}

	</script>
	<body>

		<!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow p-3">
  <a class="navbar-brand" href="#" title="Site that releases Happiness" ><img src="https://lh3.googleusercontent.com/eP19_A9Y3WPgXTuY_QC1PQkDnE469h_dYQ9jJVcCQoHTkDg7VEq9SNzY2CUIifadJwt3xlBZ39zIvOiT2lrZMDjhDqypcKss8RdbfQALRgXvqUCa2jjnr3uZCimEJjDk29lSD4ZchAzPhr-Q5kMWYo62KDX8EHQmZ1ziDdo9OhybQ5P75n19GpIP4CJ0PkWP59K1i2LJzyM3vSAFDTaHN9WX4XPT3sNWxBKaHfkxaMesaPnF2MXF4NCalvheT4j5qDCuF0Z8a42d586FdN-odkiSPHskRiRTXCJpvRVUQplsP4Ai-5anWfE9DgT38QJxuWVGPaStucb1no97zicYNxQPGdkJv7DPrEzILrsHUiYtHL58GgLDcihdqHWwFI9xFaJLUD-4pJQm2bHAfsXTquZwNzotHlBG5j805mDislMcdfTttsXo2TSXmTz0ENrXL-lgyQ8LQz68Dg0hlJE6yXx9rx0H9V1rQWWffTr-NnjlW0899F-e5ewl8j_FMKryjGfJ9louo1vxCMQ8UlpvKyfFcQJDmgUfwSOiv1J32OePQc18oEP6HGvqeZ-ckn1fUq--59t1sxKonbrUSNq_XR3GDjVceCRB7wRQeGWVfLQOGgHHkTblCubhgvAtKt1yzjJZo8GPJo8arRehs5iX9ltaZOXKtNJB=w574-h326-no" height="50px"  title="C8H11NO2"/>Dopamine</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" ria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="passwdChange">Change Password</a>
      </li>
    </ul>
    <h2 class="text-center text-white"><?php echo $_SESSION['userName']; ?></h2>
    <a href="logOut" id="logOut" class="text-right text-white">Logout</a>
  </div>
</nav>

<!--Post Box  -->
		<div class="container">
			<form action="" method="POST">
			<div class="form-group">
		    <label for="exampleFormControlTextarea1">Create a Post</label><br>
		    <textarea class="form-control" id="exampleFormControlTextarea1" maxlength="500" placeholder="What's on your mind?" name="postSth"></textarea>
		  	</div>
		  	  <button type="submit" class="btn btn-primary" name="postSmt">Post</button>
			</form>
			<small class="bg-success text-white"><?php echo $successString;?></small>
		</div>


		<!-- Posts of users -->

		<div class="container">
			<?php
			$this->postCall();
			$this->cmntPost();
			?>
		</div>
	</body>
	</html>
	<?php
}
?>
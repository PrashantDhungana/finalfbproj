
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<style>
  body{
    background-image: url("bg.jpg");
    background-repeat: no-repeat;
  }
.navbar {                            
    -webkit-box-shadow: 0 16px 6px -6px #999;
    -moz-box-shadow: 0 16px 6px -6px #999;
    box-shadow: 0 16px 6px -6px #999;

    /* the rest of your styling */
}
.banner-curve {
    position: absolute;
    bottom: -30px;
    left: -5px;
    width: calc(100% + 10px);

    -webkit-box-shadow: 0 10px 6px -6px #999;
    -moz-box-shadow: 0 10px 6px -6px #999;
    box-shadow: 0 10px 6px -6px #999;
}
.padding{
  padding-top: 40px;
  background-color: #212529;
  color: #FFF;
  margin-top: 25px;
}
html {
  scroll-behavior: smooth;
}
.form-check{
  display: inline-block;
}
/*.carousel-inner{
  width:100%;
  max-height: 500px !important;
}*/

.form-control1{
  border-color: #FF0000!important; 
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 25px rgba(255, 0, 0, 0.6)!important;
}
</style>
  <title>Dopamine||A Social Network</title>
</head>
<body>

<!-- LOAD NAVBAR HERE -->

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
        <a class="nav-link" href="#create_account">Create Account</a>
      </li>
      <li class="nav-item dropdown">
       <a class="nav-link" href="#login">Login</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST">
      <input type="email" class="form-control mr-sm-2" placeholder="Enter Email" aria-label="Search" id="login" name="mail" required>
      <input type="password" class="form-control mr-sm-2" placeholder="Enter Password" aria-label="Search" name="passwd" required>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="loginSmt">Login</button>
    </form>
  </div>
</nav>



<div class="container padding" id="create_account">
  <!-- Create Account -->

<form method="POST">
  <h3>Create Account</h3>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" autocomplete="off" name="mail" required value="<?php if(isset($_POST['submit'])) echo($_POST['mail'])?>">
    <small class="bg-danger"><?php if(isset($error['email'])){ echo $error['email']; } ?></small>
  </div>
  
    <div class="form-group">
    <label for="exampleInputFirstName1">First Name</label>
    <input type="name" class="form-control" id="fname" aria-describedby="fnameHelp" placeholder="Enter First Name" autocomplete="off" name="fname" required value="<?php if(isset($_POST['submit'])) echo($_POST['fname'])?>">
  </div>
    <div class="form-group">
    <label for="exampleInputname1">Last Name</label>
    <input type="name" class="form-control" id="lname" aria-describedby="lnameHelp" placeholder="Enter Last Name" autocomplete="off" name="lname" required value="<?php if(isset($_POST['submit'])) echo($_POST['lname'])?>">
  </div>
      <div class="form-group">
    <label for="exampleInputAddress">Address</label>
    <input type="text" class="form-control" id="address" aria-describedby="addHelp" placeholder="Enter Address" autocomplete="off" name="address" required value="<?php if(isset($_POST['submit'])) echo($_POST['address'])?>">

  </div>
  <h6>Gender:</h6>
<div style="margin: 10px;"><div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="M" checked>
  <label class="form-check-label" for="exampleRadios1">
    <img src="https://lh3.googleusercontent.com/PokyJMvXOcfy-l4ODazrhsXkr2tZYo-gC_eZ8K8gxcQg0m4gMrtqsJgJ5m7iwwJd6xAKsA8qaTBlPFjY94Tl4f99S_7N8N7meS-4RvLks6nohn6iDchG65hHcbBUQ-l3QqD1zSkVe2uBa5Fz_UzlkZKEUmM6dDfq_OTOh8ABm4RlroTmBcF4WGvADWpxqeQgm44CnHmkwIw0I1Ydo_4lhsfDTmFx_eAWGkj-zkxJrT8lPFpytHc1NXKSbrT89T725M4K8Q44q6e51TXLDKt-Z0rqxTZCZ4UFNmubcXZ06qw_6HA03jlePzLFzpvMo0tdpbCuVjkzVuWSZz_rbDVnDs2e7BnN1I1FNCYRaqBcHWvtRnv8opbbuSKidDc3ohB_sMvHQwL854JVRzXGcK8OwtfYhY-5Ii162Baxc3toTzfb2u3pmvNsN7pHCh26UoA-VG3CiFNgQv0VLECfQTM_kuYpOqqmriYQT8b03uGSfaRZEUK_qjA-ypKE40ibL1um8881uB7MzsP2FtNJRYhEV9o7Wik_xM1_KOrlvSnF73kgqCM7mxXzwYsTcVDDYkG2DIFIHuTD4HSplLvn24J8g6dFrgAueDop6jC40xbvbiQLrQVEK3LToCy2G99ERJ0sTL_muHV2wcp0Nnf9HtXf3lW__rZTSCgH=s225-no" height="20px" width="20px"> Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="F">
  <label class="form-check-label" for="exampleRadios2">
    <img src="https://lh3.googleusercontent.com/ATDI1ohgOjJdKvOHs6F6upzoILCq8DFek_bLuWwH-sX8dAEtVSY0av9qJDoBHwV-K4e6Rl6Ee6cEZBhIlNB_IphqNorTpm6cT_7RaRMU6LeUbVSR7dZKalrXgWbIS3fZPcLll2tsTLI1mb7PHyLiqce3cCPJMpl03sEUazolK8cebjyO7Lo907ZL1sITxa9TuWKBKUVmbnj28sFqT3QNkukPMXbZTMJa1Y19ehlMmftJQg9Gp5Jj5kbAMW1fbmmiQyaztZLtEvNvyPYtiyUEfHxuUbgak_eKlqM0tUr3UfzY_g2vQFyaM4oiauVX3lFICjQj4_k_WnGPrPVk4xHFTFCMadqdluRmhWIWARGM2sdSvH6a3AVmjnauFjdcM_vlgZ2OWOLumqEIsARfu0uLaaxy4Qh_gZTTyI7hZI-VpZGLOH8MZ5Pr-2VWg89FHv7fIrba-2i0n76hNEqDBOLeu-USfPdNFade8yXh93FJapjYoELF2fDkoMY_2UK5t8WC5N29_snLg39c1f4zK9O3BsJTwQB8c0Vd8iREn_3AtqMG6R_eh1DKkhkaM0-wopNWd1OEFj28vM4emG7nWN-_dX-Y1Q23YH6pYpSRoAnGtoQ8qlDnIdKvuTMZEDMZRejE1Q6qJp46kd8W3zyhoLEtMzwCnK7Fm4Hy=s225-no" height="20px" width="20px">Female
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="O">
  <label class="form-check-label" for="exampleRadios2">
    <img src="https://lh3.googleusercontent.com/c1sCT8KxL8yzQ5SRrBZRGO0rb9r4h1giBiA2V3bQichu-DG-69rg7i6ojSqpzhQkg8F4hvYAXrFPYUhu8xMuNk5ZlCN4gjXdLZpKZWHqPTMpzOnX3h-48LH2et3Iv4QN0EzBLx7cU0wTU42XcrT6cVf1bAbSpduTL-dgSlZUJQNpVHJtEqTjTGuLy-blpxyzgssBJdSLp86AptyADRpWGsXRN95cySZV3EzwNUtt19_Ar5tK9d_tThBx1zukCEgRseN-ak7_GtBRRkEw2O-cbgZ-8fMdtvBHaiZW-JW6BM319RZVU7HK1oyi--d7b-YQPRGNjbAZIURtN9hJC7BxI0wmM0LYZx8cXm2sMDlAGI1NJulWCUeIknbY2wV9G2_5ocOdg6eSDJYiM6GpjMjPQfZ3X87egIuLOYy0krgaQ97Dsu1CEmUK7Fv9hSVVrh-tDzj6ifnx1gvDcFYyVnbtQwjNYsh6Xqssw9xf919FWw68lYbZPwLF3XWZJFsEX2OfcSFb1UWw4rWAKHJG9c-hmQfdNmHeVbI5iiSs26qM-G7luzWmifdD_QZEAc5T7jtZu4I7LGzkOCMrBiTzGwsfe0poIcjJ-OIK5Lzgp64vEoWnlITPgubsTHyUpuAk44PtWlDPtaNBz9Rs1a_KzZxbYaYlfD7HQrtH=w728-h780-no" height="20px" width="20px">Other
  </label>
</div>
  <div class="form-group">
    <label for="exampleInputPhone1">Phone Number</label>
    <input type="text" class="form-control" id="ph_no" aria-describedby="phoneHelp" placeholder="Enter Phone Number" autocomplete="off" name="ph_no" required value="<?php if(isset($_POST['submit'])) echo($_POST['ph_no'])?>">
<small class="bg-danger"><?php if(isset($error['phone'])){ echo $error['phone']; } ?></small>
  </div>

  <!-- PHONE NUMBER VALIDATION HERE!!! -->



  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="Password" placeholder="Password" autocomplete="off" name="passwd1" required value="<?php if(isset($_POST['submit'])) echo($_POST['passwd1'])?>">
 <small class="bg-danger"><?php if(isset($error['password'])){ echo $error['password']; } ?></small>
  </div>
  

<!-- DATABASE CONNECTION HERE!!! -->

    <div class="form-group">
    <label for="exampleInputPassword2">Re-enter Password</label>
    <input type="password" class="form-control" id="Reenter" placeholder="Re-enter Password" name="passwd2" required value="<?php if(isset($_POST['submit'])) echo($_POST['passwd2'])?>">
<small class="bg-danger"><?php if(isset($error['equal'])){ echo $error['equal']; } ?></small>

  </div>
  <small>Choose a password of atleast 8 characters,one lowercase,one uppercase and one special Character.</small>
    <div class="form-group">
    <label for="Date">Date of Birth</label>
    <input type="date" class="form-control" id="date" name="dob" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Create Account</button>
</form>
</div>

</body>
</html>

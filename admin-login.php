<?php
require_once './dbcon.php';
session_start();
if(isset($_POST['login']))
{    
    $name=$_POST['name'];
    $password=$_POST['password'];
    
    $roll_chack= mysqli_query($link,"SELECT * from admin where name='$name'");
    if(mysqli_num_rows($roll_chack)>0){
        $row= mysqli_fetch_assoc($roll_chack);
        
        if($row['password']==md5($password))
        {if($row['status']='active'){
        header('location:admin-rcf.php');}
            else {
            $status_inactive="Your Status inactive. please activate it.";    
            }
        }
 else {$wrong_password="This Password is Not Valid.";}
        }
     else {
    $roll_not_found="This Name Not Found";    
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RUET CLUB MANAGEMENT</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
	<!-- Fixed navbar -->
<div class="navbar navbar-inverse">
	<div class="container">
	 <div class="navbar-header">
             <!-- Button for smallest screens -->
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
	     <a class="navbar-brand" href="index.html">
                 <img src="assets/images/club/rcf_logo.jpg" alt="Ruet logo" height="170" width="100"></a>
	</div>
	<div class="navbar-collapse collapse">
	<ul class="nav navbar-nav pull-right mainNav">
            <li><a href="index.php">Home</a></li>
         <li><a href="rcf.php">RCF</a></li>
         <li><a href="apply.php">APPLY for RCF</a></li>
         <li class="active"><a href="admin-login.php">ADMIN LOGIN</a></li>
         <li><a href="#">Contact</a></li>
         <li><a href="logout.php">LogOut</a></li>
         
	</ul>
	</div>
       </div>
    </div>
<!-- /.navbar -->

<!-- Header -->
    <h1 class="text-center">RUET CLUBs MANAGEMENT SYSTEM</h1>
  
      <div class="login-box">
  <h1>ADMIN LOGIN</h1>
  <form action="admin-login.php" method="POST">
  <div class="form-group">
       <div>
           <input class="form-control" type="text" id="name" name="name" placeholder="Enter Your name." required="" class="form-control" value="<?php if(isset($name)){echo $name;} ?>"/>
       <span class="help-block" style="color:red"><?php if(isset($roll_not_found)) {echo $roll_not_found;}?></span> 
       </div>
  </div>
  <div class="form-group">
      <div>
         <input class="form-control" type="password" id="password" name="password" placeholder="Enter Your Password." required="" class="form-control" value="<?php if(isset($password)){echo $password;}?>"/>
         <span class="help-block" style="color:red"><?php if(isset($wrong_password)) {echo $wrong_password;}?></span>
      <span class="help-block" style="color:red"><?php if(isset($status_inactive)) {echo $status_inactive;}?></span>
      </div>
  </div>

      <input type="submit" value="Login" name="login" class="btn btn_info pull-right">
  
  </form>
        </div>
    
<script src="assets/js/modernizr-latest.js"></script> 
<script type='text/javascript' src='assets/js/jquery.min.js'></script>
<script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
<script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/custom.js"></script>
    
</body>
</html>
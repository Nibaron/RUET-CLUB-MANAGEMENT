 <?php
 require_once './dbcon.php';
 session_start();
if(isset($_POST['Registration']))
{    $name=$_POST['name'];
     $roll=$_POST['roll'];
     $department=$_POST['department'];
     
     $photo= explode('.',$_FILES['photo']['name']);
     $photo=end($photo);
     $photo_name=$roll.'.'.$photo;
     
     $input_error=array();
     
     if(empty($name)){
         $input_error['name']="The Name Field is Required.";
     }
     if(empty($roll)){
         $input_error['roll']="The Roll Field is Required.";
     }
     if(empty($department)){
         $input_error['department']="The Department Field is Required.";
     }
      if(count($input_error)==0)
      { $roll_chack = mysqli_query($link,"SELECT * FROM `rcf` WHERE `roll`='$roll';");
      
        if(mysqli_num_rows($roll_chack)==0){
        $qr ="INSERT INTO `rcf`(`name`, `roll`, `department`, `post`, `photo`, `status`) VALUES ('$name','$roll','$department','Member',$photo_name','Pending')";
        
        $res= mysqli_query($link, $qr);
        if($res){
            header('location:rcf.php');
        }
        else{  
        }
        }
     else {
    $roll_error="This Roll Number Already Exists.";
}
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
        <link rel="stylesheet" href="assets/css/reg.css">
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
         <li class="active"><a href="apply.php">APPLY for RCF</a></li>
         <li><a href="admin-login.php">ADMIN LOGIN</a></li>
         <li><a href="#">Contact</a></li>
         <li><a href="logout.php">LogOut</a></li>

	</ul>
	</div>
       </div>
    </div>
<!-- /.navbar -->

<!-- Header -->
    <h1 class="text-center">RUET CAREER FORUM(RCF)</h1>
  <br/>
  <br/>
  
  <div class="container"><a><h2 class="text-center">MEMBER REGISTRATION FORM</h2></a>
  <div class="row"> 
      <div class="col-md-12">
          <form action="apply.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
             
              <div class="form-group">
                  <label for="name" class="control-label col-sm-4">Name</label>
                  <div class="col-sm-5">
                      <input class="form-control" type="text" id="name" name="name" placeholder="Enter Your Name." value="<?php if(isset($name)){echo $name;}?>"/>
                  </div>
                  <span class="error"><?php if(isset($input_error['name'])){echo $input_error['name'];}?></span>
              </div>
              
              <div class="form-group">
                  <label for="roll" class="control-label col-sm-4">Roll</label>
                  <div class="col-sm-5">
                      <input class="form-control" type="text" id="roll" name="roll" placeholder="Enter Your Roll."value="<?php if(isset($roll)){echo $roll;}?>"/>
                  </div>
                  <label class="error"><?php if(isset($input_error['roll'])){echo $input_error['roll'];}?></label>
                  <label class="error"><?php if(isset($roll_error)){echo $roll_error;}?></label>
              </div>
              
              <div class="form-group">
                  <label for="department" class="control-label col-sm-4">Department</label>
                  <div class="col-sm-5">
                      <input class="form-control" type="text" id="department" name="department" placeholder="Enter Your Department." value="<?php if(isset($department)){echo $department;}?>"/>
                  </div>
                  <span class="error"><?php if(isset($input_error['department'])){echo $input_error['department'];}?></span>
              </div>
              
              <div class="form-group">
                  <label for="photo" class="control-label col-sm-4">Photo</label>
                  <div class="col-sm-5">
                      <input id="photo" name="photo" type="file">
                  </div>
              </div>
              <div class="col-sm-4 col-sm-offset-3">
                  <input type="submit" value="Registration" name="Registration"/>
              </div>
             </form>
          
      </div>
  </div>
  </div>
    	 
        <footer id="footer">
            <div class="container">
                <div class="row">
		<div class="col-md-6 panel">
                   <div class="panel-body">
                       <p class="simplenav">
                           <a href="index.html">Home</a> | 
                           <a href="about.html">About</a> |
                           <a href="contact.html">Contact</a>
                       </p>
                   </div>
                </div>
                    <div class="col-md-6 panel">
                        <div class="panel-body">
           <p class="text-right">	Copyright &copy; 2019. By Nibaron Kumar </p>
		       </div>
                    </div>
                </div>		<!-- /row of panels -->
            </div>
        </footer>
	
<script src="assets/js/modernizr-latest.js"></script> 
<script type='text/javascript' src='assets/js/jquery.min.js'></script>
<script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
<script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/custom.js"></script>
    
</body>
</html>
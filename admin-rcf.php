<?php
require_once './dbcon.php';
session_start();
if(!isset($_SESSION['user_login']))
{header('location:login.php');}
$query="select name,roll,department,post,status from rcf";
$result= mysqli_query($link,$query);
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
        <link rel="stylesheet" href="assets/css/rcf.css">
        <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
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
            <li class="active"><a href="index.php">Home</a></li>
         <li><a href="#">About</a></li>
         <li><a href="apply.php">APPLY for RCF</a></li>
         <li><a href="admin-login.php">ADMIN LOGIN</a></li>
         <li><a href="#">Contact</a></li>
         <li><a href="logout.php">LogOut</a></li>
         
	</ul>
	</div>
       </div>
    </div>
<!-- /.navbar -->

<!-- Header -->
  <h1 class="text-center">RUET CAREER FORUM (RCF)</h1>
    <br/>
    <br/>
    <div class="club_des">
        <img src="assets/images/slides/rcf.jpg" alt="rcf">
</div>
    <br/>
    <br/>
    <h2 class="text-center">RCF COMITTEE</h2>
    <div class="ro">
        <div class="colum">
    <div class="car">
        <img src="assets/images/RCF/harun.jpeg">
      <div class="containe">
        <h2>HARUN OR RASHID</h2>
        <h3 id="lol">ADVISOR</h3>
        <p><button class="butto">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="colum">
    <div class="car">
        <img src="assets/images/RCF/rifat.jpg">
      <div class="containe">
        <h2>RIFAT BIN SIRAJ</h2>
        <h3 id="lol">PRESIDENT</h3>
        <p><button class="butto">Contact</button></p>
      </div>
    </div>
  </div>
        <div class="colum">
    <div class="car">
        <img src="assets/images/RCF/tetu.jpeg">
      <div class="containe">
        <h2>AKRAM AHMED TETU</h2>
        <h3 id="lol">VICE PRESIDENT(ADMIN)</h3>
        <p><button class="butto">Contact</button></p>
      </div>
    </div>
  </div>
        <div class="colum">
    <div class="car">
        <img src="assets/images/RCF/RASEL.jpeg">
      <div class="containe">
        <h2>MONIRUL ISLAM RASEL</h2>
        <h3 id="lol">VICE PRESIDENT(PROGRAM)</h3>
        <p><button class="butto">Contact</button></p>
      </div>
    </div>
  </div>
        <div class="colum">
    <div class="car">
        <img src="assets/images/RCF/SAYED.jpeg">
      <div class="containe">
        <h2>ABU SAID MD. REZOUN</h2>
        <h3 id="lol">VICE PRESIDENT(TECHNICAL)</h3>
        <p><button class="butto">Contact</button></p>
      </div>
    </div>
  </div>
        <div class="colum">
    <div class="car">
        <img src="assets/images/RCF/sawon.jpeg">
      <div class="containe">
        <h2>SWAWON SAHA</h2>
        <h3 id="lol">OFFICE SECRETARY</h3>
        <p><button class="butto">Contact</button></p>
      </div>
    </div>
  </div>
        <div class="colum">
    <div class="car">
        <img src="assets/images/RCF/JAKIA.jpeg">
      <div class="containe">
        <h2>JAKIA MIM</h2>
        <h3 id="lol">TREASURER</h3>
        <p><button class="butto">Contact</button></p>
      </div>
    </div>
  </div>
        <div class="colum">
    <div class="car">
        <img src="assets/images/RCF/EVA.jpeg">
      <div class="containe">
          <h2>NISHAT TASNIM EVA</h2>
        <h3 id="lol">ASST. TREASURER</h3>
        <p><button class="butto">Contact</button></p>
      </div>
    </div>
  </div>
        <div class="colum">
    <div class="car">
        <img src="assets/images/RCF/DIBBI.jpeg">
      <div class="containe">
        <h2>DIBBO BARUA</h2>
        <h3 id="lol">ASST. OFFICE SECRETARY</h3>
        <p><button class="butto">Contact</button></p>
      </div>
    </div>
  </div>
        <div class="colum">
    <div class="car">
        <img src="assets/images/RCF/ANA.jpeg">
      <div class="containe">
        <h2>ANANDI MONDAL</h2>
        <h3 id="lol">PRESS SECRETARY</h3>
        <p><button class="butto">Contact</button></p>
      </div>
    </div>
  </div>
</div>
    <div>
    <br/>
    <br/>
    <br/>
    <h2 class="text-center">RCF ALL MEMBERS</h2></div>
    <div class="table-responsive">
        <table id="data" class="table table-hover table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Department</th>
                    <th>Post</th>
                    <th>status</th>
                    <th>action</th>
                </tr>
            </thead>
            <?php
            while($row= mysqli_fetch_array($result))
            {
                echo '
                    <tr> 
                    <td>'.$row['name'].'</td>
                    <td>'.$row['roll'].'</td>
                    <td>'.$row['department'].'</td>
                    <td>'.$row['post'].'</td>
                    <td>'.$row['status'].'</td>
                    <td> 
                    
                   <button type="button" class="btn">Remove</button>                  
</td>
                     </tr>
            ';
            }
            ?>
        </table>
    </div>
    
    
           <p class="text-center">	Copyright &copy; 2019. By Nibaron Kumar </p>
		       
    
     </footer>
<script src="assets/js/modernizr-latest.js"></script> 
<script type='text/javascript' src='assets/js/jquery.min.js'></script>
<script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
<script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/custom.js"></script>
<script src="assets/js/jquery-3.3.1.js"></script>   
<script src="assets/js/jquery.dataTables.min.js"></script> 
<script src="assets/js/dataTables.bootstrap4.min.js"></script>  
<script src="assets/js/script.js"></script>  
<script>
    $('.table tbody').on('click','.btn',function(){
        $(this).closest('tr').remove();
    });
    </script>
</body>
</html>
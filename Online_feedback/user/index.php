<?php 
session_start();
include('../dbconfig.php');
$user= $_SESSION['user'];
if($user=="")
{header('location:../index.php');}
$sql=mysqli_query($conn,"select * from user where email='$user' ");
$users=mysqli_fetch_assoc($sql);
//print_r($users);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" href="../../favicon.ico">

    <title>Student Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

 <link href="../images/images/slider-pages/28167740_148170662535075_5174622239009728066_n.jpg" rel="icon" type="img/png">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color:#202020">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand" style="color:#FFFFFF" href="#">Hello <?php echo $users['name'];?></a>
        </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                 <li><a href="logout.php"  style="color:#FFFFFF">Logout</a></li>
          </ul>
          </nav>
   <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar" style="background-color:#202020">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php">Dashboard <span class="sr-only">(current)</span></a></li>
			<!-- find users' image if image not found then show dummy image -->
			
			<!-- check users profile image -->
		
			
			
			<li><a href="index.php?page=update_password"><span class="glyphicon glyphicon-user"></span> Update Password</a></li>
            <li><a href="index.php?page=update_profile"><span class="glyphicon glyphicon-asterisk"></span> Update Profile</a></li>
			 <li><a href="index.php?page=feedback"><span class="glyphicon glyphicon-thumbs-down"></span> Feedback</a></li>
            
          </ul>
         
         
        </div>
      <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
          <!-- container-->
		  <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="update_password")
			{
				include('update_password.php');
			
			}
			
				if($page=="update_profile")
			{
				include('update_profile.php');
			
			}
			if($page=="feedback")
			{
				include('give_feedback.php');
			
			}
		  }
		  else
		  {
		  
		  ?>
		 
		  
		  
     <h1 align="center" ><a href="">About Your Roles</a></h1>  <div id="img" align="center"><img  align="center" src="../images/images/slider-pages/slider-pages/Untitled-1.png"><br><br><br>
      </div> <div id="content" align="justify">
    <p>Here we aimed to design online web application for issuing the feedback about the
lecturers by student, this is named as College feedback Management System. The student can give
feedback in online system . First of all the questions are
inbuilt. After that it was viewed by the students can give feedback about the lecturers without retrieving their identities. This feedback report was checked
by the Head of the Departments and give this report to the principal and he give counselling
to the college staff. Also Head of the Department and Principal can check individual
student’s feedbacks. Compared to the manual system, online system is very simple to use and also
understand.</p></div>
<?php 




					

?>

         
<?php } ?>
        
          
        </div>
      </div>
    </div>
</div></div></div>
   <div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:15px;height:40px;background:#2A2A2A;">
		<span style="color:#FFFFFF">Developed By ....... 	<a>Group3 of CSE S5 2017-2021 batch</a> </span>
	</div>
 
   
 
  

    <script src="../css/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../css/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/metisMenu.min.js"></script>

  
    <!-- Custom Theme JavaScript -->
    <script src="../css/sb-admin-2.js"></script>

</body>

</html>
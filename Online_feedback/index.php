<?php
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    
	<title> College Feedback Management System</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" type="text/css">

    <link href="css/modern-business.css" rel="stylesheet">


  
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <link href="images/images/slider-pages/28167740_148170662535075_5174622239009728066_n.jpg" rel="icon" type="image/png">

</head>

<body>


    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#252525">
        <div class="container" >
         
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php " style="color:#FFFFFF;:#FF8000;" >College Feedback Management System</a>
				
				
            </div>
        
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					 <li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php">Home</a>
                    </li>
					
					<li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php?info=about">About</a>
                    </li>
					
					<li><a style="color:#FFFFFF" href="index.php?info=registration">Registration</a></li>
				
				
								
	<li class="dropdown">
        <a style="color:#FFFFFF" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#">Login
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="index.php?info=login">Student</a></li>
		  <li><a href="index.php?info=faculty_login">Faculty</a></li> 
              <li><a href="hod">HoD</a></li> 
          <li><a href="admin">Admin</a></li> 
        </ul>
      </li> 
	  
	
	  
	  
	 <li>
                        <a style="color:#FFFFFF" href="index.php?info=contact">Contact</a>
                    </li>
					 	
					
                   

                </ul>
            </div>
         
        </div>
     
    </nav>

<?php 
					@$info=$_GET['info'];
					if($info!="")
					{
											
						 if($info=="about")
						 {
						 include('about.php');
						 }
						
						
						
						

						 
						 else if($info=="contact")
						 {
						 include('contact.php');
						 }
						
						
						 
						 
						 else if($info=="login")
						 {
						 include('login.php');
						 }
						 
						  else if($info=="faculty_login")
						 {
						 include('faculty_login.php');
						 }
						 
						 
						 else if($info=="registration")
						 {
						 	include('registration.php');
						 }
					}
					else
					{
				?>
	
    <header id="myCarousel" class="carousel slide" style="height:550px;"
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

    
        <div class="carousel-inner">
            <div class="item active">
                
                <div class="fill" style="background-image:url(images/images/slide_1.jpg);"></div>
				<div class="carousel-caption">
                    
                </div>
            </div>
           
            <div class="item">
                <div class="fill" style="background-image:url(images/images/slide_3.jpg);"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			 <div class="item">
                <div class="fill" style="background-image:url(images/images/yoga-1.jpg)"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			
			
			
 
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
		
	
	
<div class="container">
				<div class="row">
 	  <div id="about" >
	
 <div class="col-sm-12" style="margin-top:60px;margin-bottom:80px;">
 
     <div about align="center">
       <h2 align="center" >About College Feedback Management System</h2><img src="images/images/slider-pages/slider-pages/Untitled-1.png"><br><br><br>
       <div id="content" align="justify">
         <p>In order to maintain a good recognition at college, the management does every possible
aspect in maintaining the qualities of the lecturer’s and other college facilities. As this is the
online-feedback system, where everything is online we need to develop a system in online
which is very useful to maintain feedback reports by the admin. The purpose of this project is
to make the process of taking feedback from the students in online regarding the teaching of
the faculty members. With this, the institutes can access the feedback reports in a faster way
and without any loss of data. Recently this task was done manually with the use of papers and
pens. This has many drawbacks and evaluating this hand written forms is a difficult process.
Student needs to login to the website of online feedback system and can give his/her
feedback. But the restriction here is once the student submits the report then he/she cannot
modify it later. With this the student can successfully submit feedback on teachers in a very
efficient manner without any loss of data. The admin and the faculty members can access this
feedback analysis without revealing the identities of the students and take appropriate actions.</p>
       </div> 
    </div>
   </div>
 </div>
	</div></div>
   
	<?php } ?>
	<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:15px;height:40px;background:#2A2A2A;">
		<span style="color:#FFFFFF">Developed By ....... 	<a>Silpa,Anna,Goykoshya,Ashija of CSE S5 2017-2021 batch</a> </span>
	</div>
 
    <script src="css/jquery.js"></script>

   
    <script src="css/bootstrap.min.js"></script>


    <script>
    $('.carousel').carousel({
        interval: 5000 
    })
    </script>

</body>

</html>

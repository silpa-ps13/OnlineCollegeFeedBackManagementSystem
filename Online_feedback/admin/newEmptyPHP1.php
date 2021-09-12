<?php
error_reporting(1);
	include('../dbconfig.php');
	extract($_POST);
	if(isset($save))
	{	
		
		
		mysqli_query($conn,"insert into hod values('','$name','$dep',now(),'0')");
		
	$subject ="New User Account Creation";
	$from="info@phptpoint.com";
	$message ="User name: ".$user_name." Password ".$pass;
    $headers = "From:".$from;
    mail($email,$subject,$message,$headers);
		
	$err="<font color='green'>New HoD Successfully Added.</font>";
	}	

?>


<h1 class="page-header" align="center">Add Department<p>
<img src="../images/images/slider-pages/slider-pages/Untitled-1.png"></h1><br>
<div class="col-lg-8" style="margin-bottom:100px;">
	<form method="post" >
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Name:</label>
            	<input type="text" value="<?php echo @$name;?>" name="name" class="form-control" required>
        </div>
   	</div>
	

 
	

	<div class="control-group form-group">
    	<div class="controls">
        	<label>Department:</label>
  <input type="text"  name="dep" value="<?php echo @$dep;?>" class="form-control" required>
        </div>
    </div>
	
	
	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success" style="background-color:#FF8000; border:hidden" name="save" value="Add New HoD">
        </div>
  	</div>
	</form>
</div>
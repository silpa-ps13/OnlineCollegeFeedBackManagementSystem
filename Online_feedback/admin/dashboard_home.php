<h1 align="center" style="text-decoration:underline"><a href="">Admin Dashboard</a></h1>
<?php 
//all complaints

$qq=mysqli_query($conn,"select * from hod ");
$rows=mysqli_num_rows($qq);			
echo "<h3 style='color:red'>Total Number of hod : $rows</h3>";	

$qq=mysqli_query($conn,"select * from faculty ");
$rows=mysqli_num_rows($qq);			
echo "<h3 style='color:green'>Total Number of Faculty : $rows</h3>";	

//all emegency compalints
$q=mysqli_query($conn,"select * from user");
$r1=mysqli_num_rows($q);			
echo "<h3 style='color:orange'>Total Number of Student : $r1</h3>";	


//all users
$q2=mysqli_query($conn,"select * from feedback");
$r2=mysqli_num_rows($q2);			
echo "<h3 style='color:black'>Total Number feedback given by users  : $r2</h3>";	


					

?>

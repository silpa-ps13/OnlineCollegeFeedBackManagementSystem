<form method="post">
<table class="table table-hover">
<tr>

<th> Select Faculty</th>
<td>
<select name="faculty" class="form-control">
	<?php
	$sql=mysqli_query($conn,"select * from faculty");
	while($r=mysqli_fetch_array($sql))
	{
	echo "<option value='".$r['email']."'>".$r['Name']."</option>";
	}
		 ?>
</select>
</td>
<td><input name="sub" type="submit" value="Check Average" class="btn btn-success"/></td>
</tr>
</table>
</form>
<hr style="border:1px solid red"/>
<style>
	@media print{
		body *{
			visibility:hidden;
		}
		.print-container, .print-container *{
			visibility:visible;
		}

	}
	</style>
<div class="row print-container">

<?php
extract($_POST);
if(isset($sub))
{
//Count total Votes
$r=mysqli_query($conn,"select * from feedback where faculty_id='$faculty'");
$c=mysqli_num_rows($r);	
echo "<h4>Faculty Email : ".$faculty."</h4>";
echo "<h4>Total Student Attempts : ".$c."</h4>";


}?>
<h3>Feedback Questions</h3>
Q1 : Teacher provided the course outline having weekly content plan with list of  required text book?<br>
Q2 : Course objectives,learning outcomes and grading criteria are clear to me?<br>
Q3 : Course integrates therotical course concepts with the real world examples?<br>
Q4 :Teacher is punctual,arrives on time and leaves on time?<br>
Q5 :Teacher is good at stimulating the interest in the course content?<br>
Q6 :Teacher is good at explaining the subject matter?<br>
Q7 :Teacher's presentation was clear,loud ad easy to understand?<br>
Q8 :Teacher is good at using innovative teaching methods/ways?<br>
Q9 :Teacher is available and helpful during counseling hours?<br>
Q10 :Teacher has completed the whole course as per course outline?<br>
Q11 :Teacher was always fair and impartial?<br>
Q12 :Assessments conducted are clearly connected to maximize learining objectives?<br>
Q13 :What I liked about the course?<br>
Q14 :Why I disliked about the course?<br>
<br><br>
<button type="button"  style="font-size:12pt;color:white;background-color:green;border:2px ;padding:3px">Strongly Agree 5</button>
<button type="button" style="font-size:12pt;color:white;background-color:Brown;border:2px ;padding:3px">Agree 4</button>
<button type="button" style="font-size:12pt;color:white;background-color:blue;border:2px;padding:3px">Neutral 3</button>
<button type="button" style="font-size:12pt;color:white;background-color:Black;border:2px ;padding:3px"> Disagree 2</button>
<button type="button" style="font-size:12pt;color:white;background-color:red;border:2px ;padding:3px">Strongly Disagree 1</button><br>
<br><br>
<?php

extract($_POST);
if(isset($sub))
{
//Count total Votes
$r=mysqli_query($conn,"select * from feedback where faculty_id='$faculty'");
$c=mysqli_num_rows($r);	
	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr class='success'>";
	echo "<th>S.No</th>";
	echo "<th>Q1</th>";
	echo "<th>Q2</th>";
	echo "<th>Q3</th>";
	echo "<th>Q4</th>";
	echo "<th>Q5</th>";	
	echo "<th>Q6</th>";
	echo "<th>Q7</th>";
	echo "<th>Q8</th>";
	echo "<th>Q9</th>";
	echo "<th>Q10</th>";
	echo "<th>Q11</th>";
	echo "<th>Q12</th>";
	echo "<th>Q13</th>";
	echo "<th>Q14</th>";
	echo "</tr>";
	?><?php
	$i=1;
	$que=mysqli_query($conn,"select * from feedback where faculty_id='$faculty'");
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['Teacher provided the course outline having weekly content plan w']."</td>";
		echo "<td>".$row['Course objectives,learning outcomes and grading criteria are cle']."</td>";
		echo "<td>".$row['Course integrates throretical course concepts with the real worl']."</td>";
		echo "<td>".$row['Teacher is punctual,arrives on time and leaves on time']."</td>";
		echo "<td>".$row['Teacher is good at stimulating the interest in the course conten']."</td>";
		echo "<td>".$row['Teacher is good at explaining the subject matter']."</td>";
		echo "<td>".$row['Teachers presentation was clear,loud ad easy to understand']."</td>";
		echo "<td>".$row['Teacher is good at using innovative teaching methods/ways']."</td>";
		echo "<td>".$row['Teacher is available and helpful during counseling hours']."</td>";
		echo "<td>".$row['Teacher has competed the whole course as per course outline']."</td>";	
		echo "<td>".$row['Teacher was always fair and impartial:']."</td>";
		echo "<td>".$row['Assessments conducted are clearly connected to maximize learinin']."</td>";	
		echo "<td>".$row['What I liked about the course']."</td>";
		echo "<td>".$row['Why I disliked about the course']."</td>";
		$i++;
	}
}
?>

</div>
</div>
					<?php 
					?></div><button class="btn btn-info" align="center" onclick="window.print();">
		
	Print

				
					</button>
					<br><br>
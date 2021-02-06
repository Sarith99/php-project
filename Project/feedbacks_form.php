<html>
<head>
	<link href="st2.css" rel="stylesheet" type="text/css"> 
	<link rel="stylesheet" type="text/css" href="1.css">
</head>
<body>  
<div class="wrapper">
		<div class="top-bar clearfix">
			<div class="top-bar-links">
				<ul>
					<li><a href="first.php">Home</a></li>
					<li><a href="student_data.php">Student Registration</a></li>
					<li><a href="course_data.php">Course Details</a></li>
					<li><a href="personal_registrations.php">Personal Registration</a></li>
					<li><a href="feedbacks_form.php">Feedbacks</a></li>
				</ul>
				
			</div><!--top-bar-links-->
			<div class="search-bar">
				<form method="get" action="first.html">
					<input type="search" name="search-bar">
					<button type="submit"></button>
					
				</form>
			</div><!--search-bar-->
		</div> <!--top-bar--><br>
	<h2><b>Feedback and Inquaries</h2></b>
<form name="feedbacks_form" action = "feedbacks.php" method = "POST">
	<table>

		<!------------------------- Feedback and Inquaries ---------------------------------->
   <tr>
	<td></td>
	<td><textarea name="feedbacks" rows="10" cols="50"></textarea></td>
	</tr><br>
	
	<!----------------------- Submit and Reset ------------------------------->
	<tr>
		<br>
	
	<td colspan="2" align="center">
	<input type="submit" name="submit" value="Submit">
	<input type="reset" name="reset" value="Clear">
	</td>
	</tr>

	</table>
</form>
	

</body>
</html>
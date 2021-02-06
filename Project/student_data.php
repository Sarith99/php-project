<html>
<head>
<link href="st.css" rel="stylesheet" type="text/css"> 
<link rel="stylesheet" type="text/css" href="1.css">
</head>
<title>Student Registration Details</title>
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
	<h1><b><center><u><font size="9" font color="white">Student Course Details</font></u>></h1></b></center><br>
	<font size="5" font color="white">
    <form id="login" method="post" action="student_registration.php">    
        <label><b>User Name:     
        </b>    
        </label>    
        <input type="text" name="uname" id="Uname" placeholder="Username">    
        <br><br>  

<!-----------------------Qualification---------------------------------------->
<tr>
<td><b>Qualifications</b><br></td>
<td>
<textarea name="qualifications" rows="10" cols="50"></textarea><br><br>
</td>
</tr>
<!---------------------------- Courses ----------------------------------->
<tr>
<td><b>Courses</b><br />Applied For:<br></td>
<td>
<input type="radio" name="course" value="Japanese">
Japanese<br>
<input type="radio" name="course" value="Chinese">
Chinese<br>
<input type="radio" name="course" value="French">
French<br>
<input type="radio" name="course" value="Italian">
Italian<br>
<input type="radio" name="course" value="Sinhala">
Sinhala<br>
</td>
</tr>
<!----------------------- Submit and Reset ------------------------------->
<tr>
<td colspan="2" align ="center">
<input name="submit" type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
</form>
</body>
</html>
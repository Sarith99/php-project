<!DOCTYPE html>
<html>
<head>
		<link href="style.css" rel="stylesheet" type="text/css"> 
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


<h1><u><center>OFFICE USE ONLY</u></center></h1>
<font color="white">
<form name = "office use" action = "course_details.php" method = "POST"/>

 
<table width="400">

  <tr>

    <td>Course Code: </td>

    <td><input type="text" name="code" /></td>

  </tr>

  <tr>

    <td>Batch No: </td>

    <td><input type="text" name="bno" /></td>

  </tr>

  <tr>

    <td>Commencement Date:</td>

    <td><input type="text" name="cdate" /></td>

  </tr>

  <tr>

    <td>Register No:</td>

    <td><input type="text" name="rno" /></td>

  </tr>

  <tr>

    <td>Advanced Payment:</td>

    <td><input type="text" name="ap" /></td>

  </tr>

  <tr>

    <td>Course Fee:</td>

    <td><input type="text" name="cfee" /></td>

  </tr>
  <tr>

    <td>Special Comments:</td>

    <td><input type="text" name="sc" /></td>

  </tr>

  <tr>

    <br><td><input type="submit" name="submit" value="submit" /></td>

    <td><input type="button" value="Cancel" /></td>

  </tr>

</table>

<br/>

</form>
  

  </font>

</body>
</html>
<html>
<head>
  <title> DIRM </title>
  <link href="style1.css" rel="stylesheet" type="text/css"> 
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
  <h1><u><center>PERSONAL DETAILS</u></center></h1>
  

  <form name = "personal_details" action = "personal_details.php" method = "POST">
    <br/>
 
<table width="400">
 
  <tr>

    <td> Full Name: </td>

    <td><input type="text" name="fullname"/></td>

  </tr>

  <tr>

    <td>Name with initials:</td>

    <td><input type="text" name="initials" /></td>

  </tr>

  <tr>

    <td>NIC/Passport no</td>

    <td><input type="text" name="nid" /></td>

  </tr>

  <tr>

    <td>Nationality:</td>

    <td><input type="text" name="nation" /></td>

  </tr>

  <tr>

    <td>Address:</td>

    <td><input type="text" name="address" /></td>

  </tr>

  <tr>

    <td>Date of birth:</td>

    <td><input type="text" name="dob" /></td>

  </tr>

  <tr>

    <td>Name of the School:</td>

    <td><input type="text" name="school" /></td>

  </tr>
  <tr>
    <td>Telephone no:</td>
    <td><input type="text" name="tel_no"/></td>
  </tr>
  <tr>
    <td>Email:</td>
    <td><input type="text" name="email"/></td>
  </tr>

  <tr>

    <br><td><input type="submit" name="submit" value="submit" /></td>

    <td><input type="button" value="Cancel" /></td>

  </tr>

</table>
<br/>
</form>
</body>
</html>




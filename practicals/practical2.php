<html>
<head>
<title>REGISTRATION FORM</title>
</head>
<body>
<header>
<h1 align='center'><b><u>Student Registration Form</u></b></h1>
</header>
<div id='formArea' align='center'>
<form method='POST'action='action.php'>
<table border='1'>
<th colspan='2'>Kindly fill out this form with accurate details!</th>
<tr>
<td><label for='firstName' required>First Name:</td>
<td><input type='text' name='firstName'></td>
</tr>
<tr>
<td><label for='lastName' required>Last Name:</td>
<td><input type='text' name='lastName'></td>
</tr>
<tr>
<td><label for='dob' required>Date of Birth:</td>
<td><input type='date' name='dob'></td>
</tr>
<tr>
<td><label for='gender' required>Gender:</td>
<td>
<input type='radio' name='gender' id='male' value='Male'>Male
<input type='radio' name='gender' id='female' value='Female'>Female
<input type='radio' name='gender' id='others' value='Others'>Others
</td>
</tr>
<tr>
<td><label for='email' required>Email Id:</td>
<td><input type='email' name='email'></td>
</tr>
<tr>
<td><label for='username' required>Username:</td>
<td><input type='text' name='username'></td>
</tr>
<tr>
<td><label for='password' required>Password:</td>
<td><input type='password' name='password'></td>
</tr>

<tr>
<td><label>Area/s of Interest:</td>
<td>
<input type='checkbox' name='dept' value='CE'>CE
<input type='checkbox' name='dept' value='IT'>IT
<input type='checkbox' name='dept' value='EC'>EC
</td>
</tr>
<tr>
<td>City</td>
<td>
<select name='city' required>
<option value='ahmedabad'>Ahmedabad</option>
<option value='dahod'>Dahod</option>
<option value='surat'>Surat</option>
<option value='gandhinagar'>Gandhinagar</option>
</select>
</td>
</tr>
<tr>
<td colspan='2'>
<input type='submit' value='Submit'>
<input type='reset' value='Reset'>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>
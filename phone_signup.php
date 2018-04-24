<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="#2d6e84">
<form action="signup_p.php" method="post" enctype="multipart/form-data">
	<table align="center">
		<tr>
			<td>username</td><td> <input type="text" name="username" required/></td>
		</tr>
		<tr>
			<td>email</td><td><input type="text" name="email" required/></td>
		</tr>
		<tr>
			<td>photo</td><td><input type="file" name="photo" required/></td>
		</tr>
		<tr>
			<td>password</td><td><input type="password" name="password" requird></td>
		</tr>
		<tr>
			<button type="submit">signup</button>
		</tr>
	</table>
</form>
</body>
</html>
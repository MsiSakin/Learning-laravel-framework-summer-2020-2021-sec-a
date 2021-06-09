<!DOCTYPE html>
<html>
<head>
	<title> User List</title>
</head>
<body>

		<a href="/user/list"> Back </a>
        <h4> User List </h4>
	<form method="post">	
	<table border="1">
		<tr>
            <td>ID</td>
            <td><input type="text" name="id" value="{{$user['id']}}"></td>
        </tr>
        <tr>
            <td>Username</td>
           <td> <input type="text" name="uname" value="{{$user['username']}}"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="pass" value="{{$user['password']}}"></td>
        </tr>
        <tr>
            <td>Email</td>
           <td><input type="text" name="email" value="{{$user['email']}}"></td>
        </tr>
        <tr>
            <td>Type</td>
            <td><input type="text" name="type" value="{{$user['type']}}"></td>
        </tr>

	</table>
    <input type="submit" Name="submit" value="Update">
	
	</form>
	
</body>
</html>
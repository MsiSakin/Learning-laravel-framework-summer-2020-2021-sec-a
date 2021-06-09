<!DOCTYPE html>
<html>
<head>
	<title> User List</title>
</head>
<body>

		<a href="/user/list"> Back </a>
        <h4> User List </h4>
		
	<table border="1">
		<tr>
            <td>ID</td>
            <td>{{$user['id']}}</td>
        </tr>
        <tr>
            <td>Username</td>
            <td>{{$user['username']}}</td>
        </tr>
        <tr>
            <td>Password</td>
            <td>{{$user['password']}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{$user['email']}}</td>
        </tr>
        <tr>
            <td>Type</td>
            <td>{{$user['type']}}</td>
        </tr>

		
	</table>
	
	
	
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title> User List</title>
</head>
<body>

		<a href="/home"> Back </a>
        <h4> User List </h4>
		
	<table border="1">
		<tr>
            <td>ID</td>
			<td>Userame</td>
			<td>Password</td>
            
            <td>Action</td>
		</tr>
        
    @foreach($userlist as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['username']}}</td>
                <td>{{$user['password']}}</td>
                
                <td>
                    <a href="/user/details/{{$user['id']}}"> Details </a> |
                    <a href="/user/edit/{{$user['id']}}"> Edit </a> |
                    <a href="/user/delete/{{$user['id']}}"> Delete </a> |
                    
                </td>
		    </tr>
      @endforeach
		
	</table>
	
	
	
</body>
</html>
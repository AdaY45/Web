<html>
<head>
<style>
#users {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#users td, #users th {
  border: 1px solid #ddd;
  padding: 8px;
}

#users tr:nth-child(even){background-color: #f2f2f2;}

#users tr:hover {background-color: #ddd;}

#users th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #044A06;
  color: white;
}
</style></head>
<title>User List</title>
<body>
    <table id = "users">
        <thead>
            <tr>
            <th>Name</th>
            <th>City</th>
            <th>Country</th>
            </tr>
        </thead>
        <tbody>
            @if(count($users)>0) 
                @foreach ($users as $key => $user)
                    <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->city}}</td>
                    <td>{{$user->country}}</td>
                    </tr>
                @endforeach
            @else
                <h1>No users are found</h2>
            @endif
        </tbody>
    </table>
</body>
</html>
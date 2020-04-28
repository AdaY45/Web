<html>
<head>
<style>
#user {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#user td, #user th {
  border: 1px solid #ddd;
  padding: 8px;
}

#user tr:nth-child(even){background-color: #f2f2f2;}

#user tr:hover {background-color: #ddd;}

#user th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #044A06;
  color: white;
}
</style></head>
<title>View User</title>
<body>
    <table id = "user">
        <thead>
            <tr>
            <th>Name</th>
            <th>City</th>
            <th>Country</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->city}}</td>
            <td>{{$user->country}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
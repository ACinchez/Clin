<!DOCTPE html>
<html>
<head>
<title>View Patient Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>Id</td>
<td>First Name</td>
<td>Last Name</td>
<td>Middle Name</td>
<td>Civil Status</td>
<td>Address</td>
<td>Birthday</td>
<td>Gender</td>
<td>Year Level</td>
<td>Symptoms</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->firstname }}</td>
<td>{{ $user->lastname }}</td>
<td>{{ $user->middlename }}</td>

<td>{{ $user->address }}</td>
<td>{{ $user->birthday }}</td>
<td>{{ $user->gender }}</td>
<td>{{ $user->yearlevel }}</td>

</tr>
@endforeach
</table>
</body>
</html>
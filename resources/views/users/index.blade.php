<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users - POS System</title>
</head>
<body>
    <p><a href="{{ url('/') }}">&larr; Back to Home</a></p>
    <h1>User List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Full Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->full_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
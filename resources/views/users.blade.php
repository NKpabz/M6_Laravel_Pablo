<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Home</a> |
        <a href="{{ url('/about') }}">About</a> |
        <a href="{{ url('/customers') }}">Customers</a> |
        <a href="{{ url('/users') }}">Users</a>
    </nav>
    <h1>User Accounts</h1>
    <ul>
        @foreach($users as $user)
            <li>{{ $user['username'] }} - Role: {{ $user['role'] }}</li>
        @endforeach
    </ul>
</body>
</html>
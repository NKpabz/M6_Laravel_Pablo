<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Home</a> |
        <a href="{{ url('/about') }}">About</a> |
        <a href="{{ url('/customers') }}">Customers</a> |
        <a href="{{ url('/users') }}">Users</a>
    </nav>
    <h1>Customer Accounts</h1>
    <ul>
        @foreach($customers as $customer)
            <li>{{ $customer['name'] }} - {{ $customer['email'] }}</li>
        @endforeach
    </ul>
</body>
</html>
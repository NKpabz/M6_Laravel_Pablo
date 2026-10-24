<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customers - POS System</title>
</head>
<body>
    <p><a href="{{ url('/') }}">&larr; Back to Home</a></p>
    <h1>Customer List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->full_name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
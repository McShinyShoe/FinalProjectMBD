<!-- resources/views/customers/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
</head>
<body>
    <h1>Customers List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->Customers_ID }}</td>
                    <td>{{ $customer->Customers_Name }}</td>
                    <td>{{ $customer->Customers_EMail }}</td>
                    <td>{{ $customer->Customers_PhoneNumber }}</td>
                    <td>{{ $customer->Customers_Address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

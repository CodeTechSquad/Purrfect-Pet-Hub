<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Welcome to Dashboard</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>{{ $data->first_name }}</td>
                                <td>{{ $data->email }}</td>
                                <td><a href="logout">Logout</a></td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

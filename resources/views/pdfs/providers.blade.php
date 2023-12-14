<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Providers</title>
    <style>
        * {
            /* Change your font family */
            font-family: sans-serif;
        }
        h1{
            text-align: center;
            color: #009879;
        }

        .content-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            min-width: 400px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .content-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }

        .content-table th,
        .content-table td {
            padding: 12px 15px;
        }

        .content-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .content-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .content-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

    </style>
</head>

<body>
    <h1>List of Providers</h1>
    <table class="content-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Country</th>
                <th>City</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($providers as $provider)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $provider['name'] }}</td>
                    <td>{{ $provider['email'] }}</td>
                    <td>{{ $provider['phone'] }}</td>
                    <td>{{ $provider['country'] }}</td>
                    <td>{{ $provider['city'] }}</td>
                    <td>{{ $provider['address'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Message</title>
    <style>
        table tr td {
            padding: 5px;
        }
    </style>
</head>
<body>
    <h2 align="center">Contact Message</h2>
    <table align="center">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th colspan="2">Message</th>
        </tr>
        <tr>
            <td>{{$details['name']}}</td>
            <td>{{$details['email']}}</td>
            <td>{{$details['phone']}}</td>
            <td colspan="2">{{$details['msg']}}</td>
        </tr>
    </table>
</body>
</html>
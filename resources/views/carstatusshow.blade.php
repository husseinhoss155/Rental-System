<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>User Page</title>
</head>
<body style="background-color: #bee5eb">
<div style="padding: 5px;margin:5px;">
    <table border="1">
        <tr>
            <th>Model</th>
            <th>Plate_ID</th>
            <th>Status</th>
        </tr>

        <tr>
        @foreach($result as $car)
            <tr>
                <td>{{$car['model']}}</td>
                <td>{{$car['plate_id']}}</td>
                <td>{{$car['status']}}</td>
            </tr>
            @endforeach
            </tr>

    </table>
</div>
</body>

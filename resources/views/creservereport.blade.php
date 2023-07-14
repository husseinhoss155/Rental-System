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
            <th>cssn</th>
            <th>cname</th>
            <th>cemail</th>
            <th>cgender</th>
            <th>cphone</th>
            <th>caddress</th>
            <th>ccd number</th>
            <th>clisence number</th>
            <th>Model</th>
            <th>Plate_ID</th>
        </tr>

        <tr>
        @foreach($result as $car)
            <tr>
                <td>{{$car['SSN']}}</td>
                <td>{{$car['name']}}</td>
                <td>{{$car['email']}}</td>
                <td>{{$car['gender']}}</td>
                <td>{{$car['phone']}}</td>
                <td>{{$car['address']}}</td>
                <td>{{$car['credit_number']}}</td>
                <td>{{$car['licesne_no']}}</td>
                <td>{{$car['model']}}</td>
                <td>{{$car['plate_id']}}</td>

            </tr>
            @endforeach
            </tr>

    </table>
</div>
</body>

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
            <th>Year</th>
            <th>Plate_ID</th>
            <th>Color</th>
            <th>Price per hour</th>
            <th>Status</th>
            <th>cssn</th>
            <th>cname</th>
            <th>cemail</th>
            <th>cgender</th>
            <th>cphone</th>
            <th>caddress</th>
            <th>ccd number</th>
            <th>clisence number</th>
            <th>res id</th>
            <th>bill</th>
            <th>paid</th>
            <th>pickupdate</th>
            <th>reservation day</th>
            <th>payment day</th>
            <th>paid?</th>
            <th>returndate</th>
        </tr>

        <tr>
        @foreach($result as $car)
            <tr>
                <td>{{$car['model']}}</td>
                <td>{{$car['year']}}</td>
                <td>{{$car['plate_id']}}</td>
                <td>{{$car['color']}}</td>
                <td>{{$car['price']}}</td>
                <td>{{$car['status']}}</td>
                <td>{{$car['SSN']}}</td>
                <td>{{$car['name']}}</td>
                <td>{{$car['email']}}</td>
                <td>{{$car['gender']}}</td>
                <td>{{$car['phone']}}</td>
                <td>{{$car['address']}}</td>
                <td>{{$car['credit_number']}}</td>
                <td>{{$car['licesne_no']}}</td>
                <td>{{$car['res_id']}}</td>
                <td>{{$car['bill']}}</td>
                <td>{{$car['paid']}}</td>
                <td>{{$car['pickupdate']}}</td>
                <td>{{$car['created_at']}}</td>
                <td>{{$car['updated_at']}}</td>
                <td>{{$car['paid']}}</td>
                <td>{{$car['returndate']}}</td>
            </tr>
            @endforeach
            </tr>

    </table>
</div>
</body>

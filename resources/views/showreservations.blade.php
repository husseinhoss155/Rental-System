<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>User Page</title>
</head>
<body style="background-color: #bee5eb">
<div style="padding: 5px;margin: 5px;">

</div>
<div style="position: absolute;top: 20%;left: 50%;transform: translate(-50%,-20%)">
    <table border="1">
        <tr>
            <th>Reservation_ID</th>
            <th>Customer_SSN</th>
            <th>Car Plate_ID</th>
            <th>Bill</th>
            <th>Paid?</th>
            <th>Pick Up date</th>
            <th>Return date</th>
            <th>Action</th>
        </tr>
        @foreach($reservations as $reservation)
            <tr>
                <td>{{$reservation['res_id']}}</td>
                <td>{{$reservation['C_SSN']}}</td>
                <td>{{$reservation['Car_ID']}}</td>
                <td>{{$reservation['bill']}}</td>
                <td>{{$reservation['paid']}}</td>
                <td>{{$reservation['pickupdate']}}</td>
                <td>{{$reservation['returndate']}}</td>
                <td><a href="{{url('/showreservations/'.$reservation['Car_ID'].'/'.$reservation['C_SSN'].'')}}"><button style="padding: 2px;margin: 2px;">Pay</button></a></td>
            </tr>
        @endforeach
    </table>
</div>
</body>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>search Page</title>
</head>
<body style="background-color: #bee5eb">
<div style="padding: 5px;margin: 5px;">
    <form action="adminpage" method = "post">
        @csrf
    <input name="searchmodel">
    <button type="submit" style="margin: 2px;padding: 2px">Search by car model</button><br>
    <input name="searchyear">
    <button type="submit" style="margin: 2px;padding: 2px">Search by car year</button><br>
    <input name="searchplateid">
    <button type="submit" style="margin: 2px;padding: 2px">Search by car plate ID</button><br>
        <input name="searchcolor">
        <button type="submit" style="margin: 2px;padding: 2px">Search by car color</button><br>
        <input name="searchprice">
        <button type="submit" style="margin: 2px;padding: 2px">Search by car price per hour</button><br>
    <input name="searchstatus">
    <button type="submit"  style="margin: 2px;padding: 2px">Search by car status</button><br>
        <input name="ssn">
    <button type="submit"  style="margin: 2px;padding: 2px">Search by customer ssn</button><br>
    <input name="cname">
    <button type="submit"  style="margin: 2px;padding: 2px">Search by customer name</button><br>
    <input name="email">
    <button type="submit"  style="margin: 2px;padding: 2px">Search by customer email</button><br>
    <input name="gender">
    <button type="submit"  style="margin: 2px;padding: 2px">Search by customer gender</button><br>
    <input name="phone">
    <button type="submit"  style="margin: 2px;padding: 2px">Search by customer phone</button><br>
    <input name="address">
    <button type="submit"  style="margin: 2px;padding: 2px">Search by customer address</button><br>
    <input name="cdnumber">
    <button type="submit"  style="margin: 2px;padding: 2px">Search by customer cdnumber</button><br>
    <input name="lnumber">
    <button type="submit"  style="margin: 2px;padding: 2px">Search by customer lnumber</button><br>
    <input name="resdaydate" type="date">
    <button type="submit"  style="margin: 2px;padding: 2px">Search by  reservation day</button><br>
        <input name="respayment" type="date">
        <button type="submit"  style="margin: 2px;padding: 2px">Search by payment day</button><br>
    </form>
   <a href="{{url('/adminpage')}}"> <button type="submit" style="margin: 2px;padding: 2px">Reset all info</button>
   </a>
    <form method="post" action="{{route('logout')}}">
        @csrf
        <button type="submit" style="font-size: smaller;position:absolute;margin: 5px;padding: 5px;right: 2%;top: 2%;transform: translate(-2%,-2%)">Log Out</button>
    </form>
    <form action="{{route('addcar')}}">
        @csrf
        <button type="submit" style="font-size: smaller;position:absolute;margin: 5px;padding: 5px;right: 2%;top: 7%;transform: translate(-2%,-2%)">Add new car</button>
    </form>
    <form action="{{route('updatecar')}}">
        @csrf
        <button type="submit" style="font-size: smaller;position:absolute;margin: 5px;padding: 5px;right: 2%;top: 12%;transform: translate(-2%,-2%)">Update car status</button>
    </form>
    <form action="{{route('showdatereport')}}">
        @csrf
        <button type="submit" style="font-size: smaller;position:absolute;margin: 5px;padding: 5px;right: 2%;top: 17%;transform: translate(-2%,-2%)">Reservations within a specified period</button>
    </form>
    <form action="{{route('showcarreport')}}">
        @csrf
        <button type="submit" style="font-size: smaller;position:absolute;margin: 5px;padding: 5px;right: 2%;top: 22%;transform: translate(-2%,-2%)">Reservations of a specified car</button>
    </form>
    <form action="{{route('showpayment')}}">
        @csrf
        <button type="submit" style="font-size: smaller;position:absolute;margin: 5px;padding: 5px;right: 2%;top: 27%;transform: translate(-2%,-2%)">Payments of specified period</button>
    </form>
    <form action="{{route('customerreservations')}}">
        @csrf
        <button type="submit" style="font-size: smaller;position:absolute;margin: 5px;padding: 5px;right: 2%;top: 32%;transform: translate(-2%,-2%)">All reservations of specific customer</button>
    </form>
    <form action="{{route('cstatus')}}">
        @csrf
        <button type="submit" style="font-size: smaller;position:absolute;margin: 5px;padding: 5px;right: 2%;top: 37%;transform: translate(-2%,-2%)">Status of car on specified day</button>
    </form>
</div>
</body>




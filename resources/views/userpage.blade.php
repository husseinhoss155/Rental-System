<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>User Page</title>
</head>
<body style="background-color: #bee5eb">
<div style="padding: 5px;margin: 5px;">
    <form action="{{route('search')}}" method = "post">
        @csrf
        <label style="padding: 3px;padding: 3px;">Choose a country:</label>
        <select name="selectcountry">
            <option value="all">All</option>
            <option value="egypt">Egypt</option>
            <option value="sudan">Sudan</option>
            <option value="england">England</option>
            <option value="spain">Spain</option>
            <option value="italy">Italy</option>
            <option value="germany">Germany</option>
            <option value="morocco">Morocco</option>
            <option value="japan">Japan</option>
        </select><br><br>
        <label>Car Model:</label>
    <input name="searchmodel"><br><br>
        <label>Car Year:</label>
    <input name="searchyear"><br><br>
        <label>Car Plate ID:</label>
    <input name="searchplateid"><br><br>
        <label>Car Color:</label>
        <input name="searchcolor"><br><br>
        <label>Car Price Per Day:</label>
        <input name="searchprice"><br><br>
        <label>Car Status:</label>
    <input name="searchstatus"><br><br>
        <button type="submit" style="margin: 2px;padding: 2px">Search</button><br>
    </form>

    <form method="post" action="{{route('reset')}}">
        @csrf
        <button type="submit" style="margin: 2px;padding: 2px">Reset all cars</button>
    </form>
<form method="post" action="{{route('logout')}}">
    @csrf
    <button type="submit" style="font-size: smaller;position:absolute;margin: 5px;padding: 5px;right: 2%;top: 2%;transform: translate(-2%,-2%)">Log Out</button>
</form>
    <a href="{{url('/userpage/'.$user['SSN'].'')}}"> <button type="submit" style="font-size: smaller;position:absolute;margin: 5px;padding: 5px;right: 2%;top: 9%;transform: translate(-2%,-2%)">My reservations</button>
    </a>

</div>
<div style="position: absolute;top: 20%;left: 50%;transform: translate(-50%,-20%)">
<table border="1">
    <tr>
        <th>Model</th>
        <th>Year</th>
        <th>Plate_ID</th>
        <th>Color</th>
        <th>Price per day</th>
        <th>Status</th>
        <th>Country</th>
        <th>Action</th>
    </tr>
    @foreach($cars as $car)
        <tr>
            <td>{{$car['model']}}</td>
            <td>{{$car['year']}}</td>
            <td>{{$car['plate_id']}}</td>
            <td>{{$car['color']}}</td>
            <td>{{$car['price']}}</td>
            <td>{{$car['status']}}</td>
            <td>{{$car['country']}}</td>
            <td><a href="{{url('/userpage/'.$car['plate_id'].'/'.$user['SSN'].'')}}"><button style="padding: 2px;margin: 2px;">Reserve</button></a></td>
        </tr>
    @endforeach
</table>
</div>
</body>

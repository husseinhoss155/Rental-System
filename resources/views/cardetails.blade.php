<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>User Page</title>
    <style>
        *{
            padding: 3px;
            margin: 3px;
        }
        .details{
            font-size: large;
            text-align: center;
        }
        .msg{
            border: 3px solid black;
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%,-50%);
            text-align: center;
        }
    </style>
</head>
<body style="background-color: #bee5eb">
    <div class="details" style="position:absolute;border: 3px solid black;width: 300px;left: 40%;top: 10%">
    <label>Model: {{$car['model']}}</label><br><br>
    <label>Year: {{$car['year']}}</label><br><br>
    <label>Plate_ID: {{$car['plate_id']}}</label><br><br>
    <label>Color: {{$car['color']}}</label><br><br>
    <label>Price Per Day: {{$car['price']}}</label><br><br>
    <label>Status: {{$car['status']}}</label><br><br>
    <label>Country: {{$car['country']}}</label><br><br>
    </div>

    <div class="msg">
        <form method="post" action="{{route('showcalculate')}}">
            @csrf
            <label>Pick Up date</label>
            <input name="pickup" type="date"><br><br>
            <label>Return date</label>
            <input name="return" type="date"><br><br>
            <button type="submit">Calculate total price</button><br><br>
        </form>

</div>
</body>

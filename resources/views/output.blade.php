<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>User Page</title>
    <style>
        *{
            font-size: x-large;
            padding: 3px;
            margin: 3px;
        }
        .msg{
            border: 3px solid black;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            text-align: center;
        }
    </style>
</head>
<body style="background-color: #bee5eb">
<div class="msg">
<br><br><label>Total Price = {{$totalprice}}$</label><br><br>
    <form method="post" action="{{route('reserve')}}">
        @csrf
        <button type="submit" value="">Reserve</button>
    </form>
</div>

</body>

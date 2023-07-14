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

    <form method="post" action="{{route('calculate')}}">
        @csrf
        <label>Pick Up date</label>
        <input name="pickup" type="date"><br><br>
        <label>Return date</label>
        <input name="return" type="date"><br><br>
        <button type="submit">Calculate total price</button>
    </form>

    <form method="post" action="{{route('showcar')}}">
        @csrf
        <button type="submit">Show Car Details</button>
    </form>
</div>
</body>

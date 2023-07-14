<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>User Page</title>
    <style>
        *{
            font-size: xx-large;
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
</body>
@if ($errors->any())
    <div class="msg">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <title>Car Registeration</title>
</head>
<body>
<form method="POST" action="/carregister">
    @csrf
    <div class="reg_form">
        <h1>Car Registeration</h1>
        <input type="text" name="model" placeholder="Car Model"><br>
        <input type="text" name="year"  placeholder="Car Model Year"><br>
        <input type="password" name="plate_id" placeholder="Plate ID"><br>
        <input type="text" name="color" placeholder="Car Color"><br>
        <input type="text" name="price" placeholder="Price"><br>
        <input type="text" name="status"  placeholder="Car Status"><br>
        <button type="submit" name="button">Register Car</button>
    </div>
</form>
@if ($errors->any())
    <div class="errors">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
</html>

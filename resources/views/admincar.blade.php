
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>new car Page</title>
</head>
<body style="background-color: #bee5eb">
<div style="padding: 5px;margin: 5px;">
    <form action="{{route('caradd')}}" method = "post">
        @csrf
    <input name="model">
    <text type="submit" style="margin: 2px;padding: 2px"> car model</text><br>
    <input name="year">
    <text type="submit" style="margin: 2px;padding: 2px"> car year</text><br>
    <input name="plate_id">
    <text type="submit" style="margin: 2px;padding: 2px"> car plate ID</text><br>
        <input name="color">
        <text type="submit" style="margin: 2px;padding: 2px"> car color</text><br>
        <input name="country">
        <text type="submit" style="margin: 2px;padding: 2px"> car country</text><br>
        <input name="price">
        <text type="submit" style="margin: 2px;padding: 2px"> car price </text><br>
    <input name="status">
    <text type="submit"  style="margin: 2px;padding: 2px"> car status</text><br>
        <button type="submit" style="margin: 2px;padding: 2px">add</button>
    </form>
</div>

@if(session()->has('msg'))
    <div>
        <p>{{session()->get('msg')}}</p>
    <?php
        session(['msg'=>'']);
    ?>
    </div>
    @endif

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

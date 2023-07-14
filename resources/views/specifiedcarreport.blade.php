<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>update car Page</title>
</head>
<body style="background-color: #bee5eb">
<div style="padding: 5px;margin: 5px;">
    <form action="{{route('showcreport')}}" method = "post">
        @csrf

        <input name="startdate" type="date">
        <text style="margin: 2px;padding: 2px">Start date</text><br>
        <input name="enddate" type="date">
        <text  style="margin: 2px;padding: 2px">End date</text><br>
        <input name="car_id" type="text">
        <text  style="margin: 2px;padding: 2px">Car Plate_ID</text><br>
        <button type="submit" style="margin: 2px;padding: 2px">Show Report</button>
    </form>
</div>

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

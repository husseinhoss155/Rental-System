<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>update car Page</title>
</head>
<body style="background-color: #bee5eb">
<div style="padding: 5px;margin: 5px;">
    <form action="{{route('showcustomerreservations')}}" method = "post">
        @csrf

        <input name="SSN" type="text">
        <text style="margin: 2px;padding: 2px">Customer SSN</text><br>
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

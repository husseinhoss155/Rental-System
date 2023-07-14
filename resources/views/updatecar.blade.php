<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>update car Page</title>
</head>
<body style="background-color: #bee5eb">
<div style="padding: 5px;margin: 5px;">
    <form action="{{route('carupdate')}}" method = "post">
        @csrf

    <input name="plate_id">
    <text style="margin: 2px;padding: 2px">car plate ID</text><br>
    <input name="status">
    <text  style="margin: 2px;padding: 2px">car status</text><br>
        <button type="submit" style="margin: 2px;padding: 2px">update</button>
    </form>
    @if(session()->has('msgs'))
        <div>
            <p>{{session()->get('msgs')}}</p>
            <?php
            session(['msgs'=>'']);
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
</div>
</body>

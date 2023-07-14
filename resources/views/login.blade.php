<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="js/script.js"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
  </head>


  <body>
  <div id="loginform">
    <form action="{{route('login')}}" method="post">
        @csrf
      <h2>Login Form</h2>
      <input class="login" id="emaillogin" name="Email" placeholder="Enter your E-mail"><br>
      <span class="login" id="em_lg_err"></span><br>
      <input class="login" id="passwordlogin" type="password" name="Password" placeholder="Enter your Password"><br>
      <span class="login" id="ps_lg_err"></span><br>
        <button type="submit" name="submit" id="loginbutton" value="Login">Login</button>
    </form>
      <a href="register" style="color: black">Not yet registered?</a>
  </div>
  @if ($errors->any())
      <div class="errors_lg">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  </body>
</html>

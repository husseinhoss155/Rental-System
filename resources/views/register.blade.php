<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <title>Registeration Form</title>
  </head>
  <body>
  <form method="POST" action="/register">
      @csrf
    <div class="reg_form">
      <h1>Registeration Form</h1>
      <input type="text" name="Name" placeholder="Name"><br>
      <input type="text" name="Email"  placeholder="E-mail Address"><br>
      <input type="password" name="Password" placeholder="Password"><br>
      <input type="text" name="phone" placeholder="Phone Number: 01..."><br>
      <input id = "male" type="radio" name="gender" value="Male">
      <label for="male">Male</label>
      <input id = "female" type="radio" name="gender" value="Female">
      <label for="female">Female</label><br>
      <input type="text" name="address" placeholder="Address"><br>
      <input type="text" name="credit_number"  placeholder="Credit Number"><br>
      <input type="text" name="licesne_no" placeholder="License Number"><br>
      <button type="submit" name="button">Register</button>
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

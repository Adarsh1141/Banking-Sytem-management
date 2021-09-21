<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="style.css">
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
  <form action="login-process.php" method="POST">
    <div class="login-box">
      <h1>Login</h1>
      <em class='bx bxs-bank bx-rotate-90 bx-tada bx-md' style='color:rgba(129,229,11,0.99)'  ></em>
      <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" id="user" name="username" placeholder="username" />
      </div>

      <div class="textbox">
        <i class="fas fa-lock"></i>

        <input type="text" id="pass" name="password" placeholder="password" />

      </div>

      
      <button type="submit" class="btn" name="login" default>login</button>
     
      
    </div>
    
  </form>
 
</body>

</html>
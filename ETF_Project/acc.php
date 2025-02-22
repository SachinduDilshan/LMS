<?php 
session_start();
require_once 'Connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="log.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

   <!-----------------------------------header--------------------------------------------->


   
   <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <img src="white.png" style="height: auto; width: 260px">
      </div>
      <ul class="nav navbar-nav">
        <li><a href="home.html">Dashboard</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="acc.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav>

  <style>
    
    header{
    font-family: 'Calibri';
    height: 100vh;
    background-size: cover;
    background-position: center;
    min-height: 100px;

}

    .login {
      max-width: 400px;
      margin-top: 200px;
      margin: 0 auto;
      padding: 40px;
      background-color: #fff;
      border-radius: 4px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login h1 {
      color: #046eb5;
      font-family: 'Roboto', sans-serif;
      font-weight: bold;
      text-align: center;
      margin-bottom: 30px;
    }

    .acc {
      margin-bottom: 20px;
      font-weight: bold;
    }

    .ac label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .acc input[type="text"],
    .acc input[type="password"] {
      width: 100%;
      padding: 8px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    .acc input[type="submit"] {
      background-color:#046eb5;
      transition: 1s;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    .acc input[type="submit"]:hover {
      background-color:#36cdff;
      color: black;
    }
  </style>
</head>

<body>
    <header>
  <div class="login">
  <form action="adminlog.php" method="post">
    <h1 style="font-size: 50px;">Log in</h1>
    
      <div class="acc">
        <label for="useremail" style="font-size: 30px;">Email Address</label>
        <input type="text" id="useremail" name="useremail" placeholder="For lecturer: ssd@gmail.com" required>
      </div>
      <div class="acc">
        <label for="fname" style="font-size: 30px;">Password</label>
        <input type="password" id="password" name="txtpassword" placeholder="For lecturer: 123" required>
      </div>
      <div class="acc">
        <input type="submit" value="Login"  name="btnSubmit">
      </div>
    </form>
  </div>
</header>


<!--------------------------------------------footer-------------------------------------------->


<footer class="footerH">
  <div class="container">
    <div>
      <div class="row">
        <div class="footer-col">
          <h4>Quick links</h4>
          <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="local.html">Local</a></li>
            <li><a href="#">Political</a></li>
            <li><a href="world.html">World</a></li>
            <li><a href="sport.html">Sports</a></li>
            <li><a href=
              
              "about.html">About Us</a></li>
            <li><a href="contactUs.html">contact us</a></li>

          </ul>

        </div>
        <div class="footer-col">
          <h4>contact us</h4>
          <ul>
            <li><a href="https://www.google.com/search?client=firefox-b-d&q=email">E-mail</a></li>
            <li><a href="https://www.whatsapp.com/">whatsapp</a></li>
          </ul>

        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-facebook" viewBox="0 0 16 16">
                <path
                  d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
              </svg></a></i></a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-youtube" viewBox="0 0 16 16">
                <path
                  d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
              </svg></a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-twitter" viewBox="0 0 16 16">
                <path
                  d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
              </svg></a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-github" viewBox="0 0 16 16">
                <path
                  d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
              </svg></a>
          </div>

        </div>

      </div>
    </div>
  </div>
</footer>
</body>

</html>
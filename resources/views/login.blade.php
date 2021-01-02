<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/home-style.css">
    <link rel="stylesheet" href="css/login-style.css">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/ca6c46cb77.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="row nav" >
      <div class="col-3">
        <i id="menubtn" class="fas fa-bars" onclick="openMenu()"></i>
      </div>
      <div class="col-6">
        <p id="nav-bbay">BBAY</p>
      </div>
      <div class="col-3">
        <i class="fas fa-home"></i>
      </div>
    </div>

    <div id ="idsidenav" class="row sidenav">
      <div class="col-12">
        <a class="closebtn" href="#" onclick="closeMenu()">&times;</a>
        <a href="/">Halaman Utama</a>
        <a href="/login" id="pagenow">Login Member FUP</a>
        <a href="#">Berita FUP</a>
      </div>
    </div>

    <div class="row loginform">
      <div class="col-12">
          <div class="judullogin">
            Login Member FUP
            <hr>
          </div>
          <form action="" method="post">
            <input id="wa_login" type="text" name="no_wa" placeholder="Nomor WA/e-mail">
            <input id="pass_login" type="password" name="pass" placeholder="password">
            <input type="submit" name="loginbtn" value="Login">
          </form>
          <div class="daftar">
              <a href="#">Belum punya akun?</a>
          </div>
          <div class="lupa">
            <a href="#">Lupa password?</a>
          </div>
      </div>
    </div>


    </form>

    <script type="text/javascript">

      function openMenu(){
        document.getElementById('idsidenav').style.width = "100%";
      }

      function closeMenu(){
        document.getElementById('idsidenav').style.width = "0%";
      }

    </script>
  </body>
</html>

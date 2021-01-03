<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/home-style.css">
    <title>Home</title>
    <script src="https://kit.fontawesome.com/ca6c46cb77.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="row nav" >
      <div class="col-3">
        <i id="menubtn" class="fas fa-bars fas2" onclick="openMenu()"></i>
      </div>
      <div class="col-6">
        <p id="nav-bbay">BBAY</p>
      </div>
      <div class="col-3">
        <i class="fas fa-home fas2"></i>
      </div>
    </div>

    <div id ="idsidenav" class="row sidenav">
      <div class="col-12">
        <a class="closebtn" href="#" onclick="closeMenu()">&times;</a>
        <a href="/" id="pagenow">Halaman Utama</a>
        <a href="/login">Login Member FUP</a>
        <a href="#">Berita FUP</a>
      </div>
    </div>

    <div class="row poster">
      <div class="col-12">
          <img id="poster" src="bbay-part/bbay-part-23.jpg" alt="">
      </div>
    </div>

    <div class="row partinfo">
      <div class="col-12">
        <p id="nopart">PART 22</p>
        <hr>
        <p id="judulperiode">PERIODE</p>
        <p id="periode">21 Agustus 2020 - 19 September 2020</p>
      </div>
    </div>

    <div class="row partinfo">
      <div class="col-12 donasisekarang">
        <p  id="totaldonasi">Total: Rp 22.100.500</p>
        <hr>
        <p  id="tglsekarang">12 September 2020</p>
        <progress id="persentase" value="80" max="100"></progress>
        <div class="totaldonatur">
          <span id="totaldonatur">±80</span>
          <br>
          <span>Donatur</span>
        </div>
        <div class="totalpaket">
          <span id="totalpaket">±736</span>
          <br>
          <span>Paket</span>
        </div>

        <div class="jazakumullah">
          Jazakumullah Khairan!
        </div>
      </div>
    </div>

    <div class="row footbar">
      <div class="col-12">
        <p>© 2021 Fiqh Untuk Pemula (FUP). <br> All Rights Reserved.</p>
      </div>
    </div>

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

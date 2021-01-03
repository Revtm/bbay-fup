<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/home-style.css">
    <link rel="stylesheet" href="css/donasi-style.css">
    <title>Donasi</title>
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
        <a href="/beranda">Beranda</a>
        <a href="/donasi" id="pagenow">Donasi</a>
        <a href="/"><u>Logout</u></a>
      </div>
    </div>

    <div class="juduldonasi">
      Donasi
      <br>
      <hr>
    </div>

    <div class="row donasiform">
      <div class="col-12">
          <form action="" method="post">
            <input type="text" name="namadonatur" placeholder="Nama Donatur (cth: Bpk Budi)">
            <input type="datetime" name="tanggaldonasi" placeholder="Tanggal Donasi (cth: 2020-08-18)">
            <input type="text" name="nominaldonasi" placeholder="Nominal Donasi (cth: 30000)">
            <label for="buktitransfer" style="color:#1F1F1F; font-size:14px;">Bukti Transfer:</label>
            <input type="file" name="buktitransfer" style="color:#1F1F1F; font-size:14px;">
            <br><br>
            <input type="submit" name="donasibtn" value="Kirim">
          </form>
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

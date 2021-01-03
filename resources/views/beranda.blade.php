<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/home-style.css">
    <link rel="stylesheet" href="css/beranda-style.css">
    <title>Beranda</title>
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
        <a href="/beranda" id="pagenow">Beranda</a>
        <a href="#">Donasi</a>
        <a href="#"><u>Logout</u></a>
      </div>
    </div>

    <div class="salam">
      Assalamu'alaikum
      <br>
      <span>Mas Revan</span> - <span>Gen 3</span>
      <hr>
    </div>

    <div class="row partinfo partinfo2">
      <div class="col-12">
        <div id="judultabel">
          Ranking Donasi FUP
          <br>
          <hr>
        </div>
        <div class="tabel">
          <table class="tabelranking">
                <tr>
                  <td>Ustadz Nur Ahmad</td>
                  <td class="donasi">Rp 5.000.000</td>
                </tr>
                <tr>
                  <td>Mas Abe Gen 2</td>
                  <td class="donasi">Rp 3.000.000</td>
                </tr>
                <tr>
                  <td>Mas Fajar Gen 3</td>
                  <td class="donasi">Rp 2.000.000</td>
                </tr>
                <td>Ustadz Nur Ahmad</td>
                <td class="donasi">Rp 5.000.000</td>
              </tr>
              <tr>
                <td>Mas Abe Gen 2</td>
                <td class="donasi">Rp 3.000.000</td>
              </tr>
              <tr>
                <td>Mas Fajar Gen 3</td>
                <td class="donasi">Rp 2.000.000</td>
              </tr>
          </table>
        </div>
      </div>
    </div>

    <div class="row partinfo partinfo2">
      <div class="col-12">
        <div id="judultabel">
          Riwayat Donasi Anda
          <br>
          <hr>
        </div>
        <div class="tabel">
          <table class="tabelranking">
                <tr>
                  <td>BBAY Part 20</td>
                  <td class="donasi"><a href="#">Rp 1.000.000</a></td>
                </tr>
                <tr>
                  <td>BBAY Part 21</td>
                  <td class="donasi"><a href="#">Rp 30.000</a></td>
                </tr>
                <tr>
                  <td>BBAY Part 22</td>
                  <td class="donasi"><a href="#">Rp 30.000</a></td>
                </tr>
          </table>
        </div>
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

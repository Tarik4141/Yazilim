<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" language="javascript" src="Script.js"></script>
  <link href="css.css" rel="stylesheet">
  <link href="table.css" rel="stylesheet">

  <title>Kullanıcılar</title>

  <!-- Bootstrap core CSS -->


  <!-- Custom styles for this template -->

</head>
<?php
include "leftMenu.php";
echo $leftMenu;
include "readFile.php";
$ogrenciler = readStudents();
?>

<body>
  <div id="TumSayfa">
    <div id="Icerik">
      <div id="GenelTabloSinirlamaAlani">
        <div class="col-md-12">

          <h3 class="title-5 m-b-35">Kullanıcı Bilgileri</h3>
          <div class="table-data__tool">

            <div class="table-data__tool-right">
              <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#myModelUserAdd"><i class="zmdi zmdi-plus"></i>Yeni Kullanıcı Ekle</button>
            </div>
          </div>
          <div class="table-responsive table-responsive-data2">
            <table id="TabloSinirlamaAlani" class="table table-data2">
              <thead>
                <tr>
                  <th>Adı</th>
                  <th>Soyadi</th>
                  <th>Numarası</th>
                  <th>Grubu</th>
                  <th>Cevaplar</th>
                </tr>
              </thead>
              <tbody>
                <?php
                for ($i = 0; $i < count($ogrenciler); $i++) {

                  echo '
    <tr class="tr-shadow">
      <td>' . $ogrenciler[$i][0] . '</td>
      <input id="hangiOgrenciID" type="hidden" class="form-control" name="hangiOgrenci" value="' . $i . '">
      <td>' . $ogrenciler[$i][1] . '</td>
      
      <td>' . $ogrenciler[$i][2] . '</td>
      
      <td>' . $ogrenciler[$i][3] . '</td>
      
      <td>
        <div class="table-data-feature">
         <button class="au-btn au-btn-icon au-btn--darkseagreen au-btn--small" data-toggle="modal" data-target="#cevapModal">
            Göster
          </button>
        </div>
      </td>
    </tr>
    <tr class="spacer"></tr>';
                }
                ?>
                <script>

                </script>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- CEVAPLAR MODAL-->
  <div class="modal fade" id="cevapModal">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Cevapları</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="table-responsive table-responsive-data2">
            <table id="TabloSinirlamaAlani" class="table table-data2">
              <thead>
                <tr>
                  <?php
                  $cevapAnahtari = readCevapAnahtari();
                  $cevaplar = explodeEachChar($cevapAnahtari[0][1]);
                  for ($i = 1; $i < count($cevaplar) + 1; $i++) {
                    echo '<th>' . $i . '</th>';
                  }
                  ?>
                </tr>
                <tr>
                  <?php
                  $ogrencininCevaplari = whichStudent(0);
                  $ogrenciCevaplar = explodeEachChar($ogrencininCevaplari[4]);
                  for ($i = 0; $i < count($ogrenciCevaplar); $i++) {
                    echo '<th>' . $ogrenciCevaplar[$i] . '</th>';
                  }
                  ?>
                </tr>
              </thead>
          </div>
        </div>
      </div>
    </div>
</body>

</html>
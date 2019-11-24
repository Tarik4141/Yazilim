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

<body>
  <div id="TumSayfa">
    <?php
    include "leftMenu.php";
    include "dataBaseInfo.php";
    $conn = new mysqli($servername, $user, $pass, $dbname);
    $query = "select * from ogretimUye;";
    $ogretimUyeleri = $conn->query($query);
    echo $leftMenu;
    ?>
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
                  <th>Sicil Numarası</th>
                  <th>Adı</th>
                  <th>Soyadı</th>
                  <th>Şifre</th>
                  <th>Düzenle</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($ogretimUye = mysqli_fetch_array($ogretimUyeleri)) {
                  echo '
    <tr class="tr-shadow">
      <td>' . $ogretimUye["sicilNo"] . '</td>
      
      <td>' . $ogretimUye["adi"] . '</td>
      
      <td>' . $ogretimUye["soyadi"] . '</td>
      
      <td>' . $ogretimUye["sifre"] . '</td>
      
      <td>
        <div class="table-data-feature">
              <button onclick="userEdit(' . $ogretimUye["sicilNo"] . ',`' . ($ogretimUye["adi"]) . '`,`' . $ogretimUye["soyadi"] . '`,`' . $ogretimUye["sifre"] . '`)" type="submit" data-target="#myModalUserEdit" data-toggle="modal" class="item" data-placement="top" title="Güncelle" data-original-title="Edit">
                <i class="zmdi zmdi-edit"></i>
              </button>
          <button onclick="getUserName()" data-target="#myModalUserEdit" data-toggle="modal" class="item" data-toggle="tooltip" data-placement="top" title="Sil" data-original-title="Delete">
            <i class="zmdi zmdi-delete"></i>
          </button>
        </div>
      </td>
    </tr>
    <tr class="spacer"></tr>';
                }
                ?>
                <script>
                  function userEdit(sicilNo, adi, soyadi, sifre) {
                    getUserName(sicilNo, adi, soyadi, sifre);
                  }

                  function getUserName(sicilNo, adi, soyadi, sifre) {
                    document.getElementById("sicilNoID").value = sicilNo;
                    document.getElementById("oldsicilNoID").value = sicilNo;
                    document.getElementById("adiID").value = adi;
                    document.getElementById("soyadiID").value = soyadi;
                    document.getElementById("sifreID").value = sifre;
                  }
                </script>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="myModelUserAdd">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Kullanici Ekle</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form action="insertUser.php" method="post">
            <div class="form-group">
              <label><b>Sicil No:</b></label>
              <input type="text" class="form-control" name="sicilNo">
            </div>
            <div class="form-group">
              <label><b>Adı:</b></label>
              <input type="text" class="form-control" name="adi">
            </div>
            <div class="form-group">
              <label><b>Soyadı:</b></label>
              <input type="text" class="form-control" name="soyadi">
            </div>
            <div class="form-group">
              <label><b>Şifre:</b></label>
              <input type="text" class="form-control" name="sifre">
            </div>
            <button type="submit" class="btn btn-primary">Ekle</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--User Edit Modal -->
  <div class="modal fade" id="myModalUserEdit">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Kullanici Düzenle</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form action="editUser.php" method="post">
            <div class="form-group">
              <label><b>Sicil No:</b></label>
              <input id="oldsicilNoID" type="hidden" class="form-control" name="oldsicilNo" value="">
              <input id="sicilNoID" type="text" class="form-control" name="sicilNo">
            </div>
            <div class="form-group">
              <label><b>Adı:</b></label>
              <input id="adiID" type="text" class="form-control" name="adi">
            </div>
            <div class="form-group">
              <label><b>Soyadı:</b></label>
              <input id="soyadiID" type="text" class="form-control" name="soyadi">
            </div>
            <div class="form-group">
              <label><b>Şifre:</b></label>
              <input id="sifreID" type="text" class="form-control" name="sifre">
            </div>
            <button type="submit" class="btn btn-primary">Kaydet</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
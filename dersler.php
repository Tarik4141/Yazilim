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
  <title>DERSLER</title>
</head>

<body >
<div id="TumSayfa">
<?php 
  include "leftMenu.php";
  include "dataBaseInfo.php";           
  $conn = new mysqli($servername,$user,$pass,$dbname);
  $query = "select * from dersler;";
  $dersler=$conn->query($query);
  echo $leftMenu;
  ?>
  <div id="Icerik">
	  <div id="GenelTabloSinirlamaAlani">
<div class="col-md-12">

<h3 class="title-5 m-b-35">Ders Bilgileri</h3>
<div class="table-data__tool">

<div class="table-data__tool-right">
<button class="au-btn au-btn-icon au-btn--green au-btn--small"><i class="zmdi zmdi-plus"></i>Yeni Ders Ekle</button>
</div>
</div>
<div class="table-responsive table-responsive-data2">
<table id="TabloSinirlamaAlani" class="table table-data2">
<thead>
<tr>

<th>Ders Kodu</th>
<th>Ders Adı</th>
<th>Bölüm Numarası</th>
<th>Öğrenim Kazanımları</th>
<th>Düzenle</th>
</tr>
</thead>
<tbody>
<?php 
  while($ders = mysqli_fetch_array($dersler))
  {
    echo '
    <tr class="tr-shadow">
      <td>'.$ders["dersKodu"].'</td>

      <td class="status--process">'.$ders["dersAdi"].'</td>
      
      <td>'.$ders["bolumNo"].'</td>
      
      <td>
        <button class="au-btn au-btn-icon au-btn--darkseagreen au-btn--small" data-toggle="modal" data-target="">
          Göster
        </button>
      </td>
      
      <td>
        <div class="table-data-feature">
          <button class="item" data-toggle="tooltip" data-placement="top" title="Güncelle" data-original-title="Edit">
            <i class="zmdi zmdi-edit"></i>
          </button>
          <button class="item" data-toggle="tooltip" data-placement="top" title="Sil" data-original-title="Delete">
            <i class="zmdi zmdi-delete"></i>
          </button>
        </div>
      </td>
    </tr>
    <tr class="spacer"></tr>';
  }
?>
</tbody>
</table>
</div>

</div>
</div>
 </div>
</div>
</body>

</html>

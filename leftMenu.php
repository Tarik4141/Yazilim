<?php session_start(); ?>
<?php
$leftMenu = '<div id="Header">
<div id="HeaderSinirlamaAlani">
    <ul id="SeceneklerAlani">
        <li class="Secenekler">
            <a href="index.html">Çıkış</a>
        </li>
    </ul>
    <div id="HeaderMenuAcmaButonuAlani" onClick="sekme();" >
    <img src="MenuCizgileri.png" border="0" alt="MenüÇizgileri">
</div>
</div>
</div>
<div id="yanSekme" class="list-group list-group-flush bg-light border-right" >
    
         <a class="list-group-item bg-light"  style="padding:15px;">
              <img src="adminLogo.png" alt="adminLogo" class="img-circle" style="max-width:20px;  margin:5px">
              <span  style="vertical-align:middle; font-weight:bold;">Admin</span>
          </a>
  
           <a class="list-group-item bg-light"  style="padding:15px;">
                <img src="avatar5.png" alt="kullanıcıLogo" class="img-circle" style="max-width:33px;  margin:5px; border-radius:50%;">
              <span class="brand-text font-weight-light" style="vertical-align:middle;">'.$_SESSION['glbAdmin']['kullaniciAdi'].'</span>
          </a>
  
         <a href="anaSayfa.php" class="list-group-item list-group-item-action">Ana Sayfa</a>
         <a href="kullaniciEkle.php" class="list-group-item list-group-item-action bg-light">Yeni Kullanıcı Oluştur</a>
         <a href="BolumEkleme.php" class="list-group-item list-group-item-action bg-light">Bölüm Ekle</a>
         <a href="#" class="list-group-item list-group-item-action bg-light" data-toggle="modal" data-target="#myModalDonem">Dönem Ekle</a>
         <a href="#" class="list-group-item list-group-item-action bg-light" data-toggle="modal" data-target="#myModalFakulte">Fakülte Ekle</a>
         <a href="dersler.php" class="list-group-item list-group-item-action bg-light">Dersler</a>
         <a href="dersAtama.php" class="list-group-item list-group-item-action bg-light">Ders Atama</a>   	 
         <a href="#" class="list-group-item list-group-item-action bg-light">Güncelle/Sil</a>
         <a href="#" class="list-group-item list-group-item-action bg-light">Test Okut</a>
         
</div>
<div class="modal fade" id="myModalDonem">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
  <div class="modal-content">
  
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Dönem Ekle</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    
    <!-- Modal body -->
    <div class="modal-body">
    <form action="donemEkle.php" method="post">
<div class="form-group">
<label><b>Dönem Adı:</b></label>
<input type="text" class="form-control" name="donemAdi" >
</div>
<div class="form-group">
  <label ><b>Dönem Kodu:</b></label>
  <input type="text" class="form-control" name="donemId" >
</div>

<button type="submit" class="btn btn-primary">Ekle</button>
</form>
    </div>
  </div>
</div>
</div>


<div class="modal fade" id="myModalFakulte">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
  <div class="modal-content">
  
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Fakülte Ekle</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    
    <!-- Modal body -->
    <div class="modal-body">
    <form action="fakulteEkle.php" method="post">
<div class="form-group">
<label><b>Fakülte Adı:</b></label>
<input type="text" class="form-control" name="fakulteAdi">
</div>
<div class="form-group">
  <label ><b>Fakülte Kodu:</b></label>
  <input type="text" class="form-control" name="fakulteNo" >
</div>

<button type="submit" class="btn btn-primary">Ekle</button>
</form>
    </div>
  </div>
</div>
</div>';

?>
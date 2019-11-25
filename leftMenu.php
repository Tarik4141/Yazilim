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
<div id="yanSekme" class="list-group list-group-flush  border-right" >
    
         <a class="list-group-item "  style="padding:15px;">
              <img src="adminLogo.png" alt="adminLogo" class="img-circle" style="max-width:20px;  margin:5px">
              <span  style="vertical-align:middle; font-weight:bold;">Admin</span>
          </a>
  
           <a class="list-group-item "  style="padding:15px;">
                <img src="avatar5.png" alt="kullanıcıLogo" class="img-circle" style="max-width:33px;  margin:5px; border-radius:50%;">
              <span class="brand-text font-weight-light" style="vertical-align:middle;">' . $_SESSION['glbAdmin']['kullaniciAdi'] . '</span>
          </a>
  
         <a href="anaSayfa.php" class="list-group-item list-group-item-action renk">Ana Sayfa</a>
         <a href="kullaniciEkle.php" class="list-group-item list-group-item-action ">Kullanıcılar</a>
         <a href="BolumEkleme.php" class="list-group-item list-group-item-action ">Bölümler</a>
         <a href="donemler.php" class="list-group-item list-group-item-action ">Dönemler</a>
         <a href="fakulteler.php" class="list-group-item list-group-item-action ">Fakülteler</a>
         <a href="dersler.php" class="list-group-item list-group-item-action ">Dersler</a>
         <a href="dersAtama.php" class="list-group-item list-group-item-action ">Ders Atama</a>   	 
         <a href="#" class="list-group-item list-group-item-action ">Test Okut</a>
         
</div>';

?>
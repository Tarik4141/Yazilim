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
              <span class="brand-text font-weight-light" style="vertical-align:middle;">' . $_SESSION['glbAdmin']['kullaniciAdi'] . '</span>
          </a>
  
         <a href="anaSayfa.php" class="list-group-item list-group-item-action">Ana Sayfa</a>
         <a href="kullaniciEkle.php" class="list-group-item list-group-item-action bg-light">Kullanıcılar</a>
         <a href="BolumEkleme.php" class="list-group-item list-group-item-action bg-light">Bölümler</a>
         <a href="donemler.php" class="list-group-item list-group-item-action bg-light">Dönemler</a>
         <a href="fakulteler.php" class="list-group-item list-group-item-action bg-light">Fakülteler</a>
         <a href="dersler.php" class="list-group-item list-group-item-action bg-light">Dersler</a>
         <a href="dersAtama.php" class="list-group-item list-group-item-action bg-light">Ders Atama</a>   	 
         <a href="#" class="list-group-item list-group-item-action bg-light">Test Okut</a>
         
</div>';

?>
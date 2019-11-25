<?php
include "dataBaseInfo.php";
if (isset($_POST['donemId'])) {
    $donemId = $_POST["donemId"];
    $donemAdi = $_POST["donemAdi"];
    $insert_query = "insert into donem(donemId,donemAdi) values ($donemId,'$donemAdi');";
    $insert = $conn->query($insert_query);
    header("Location: donemler.php");
} else {
    echo 'post edilmedi';
}

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
    <title>Fakülteler</title>

    <!-- Bootstrap core CSS -->


    <!-- Custom styles for this template -->

</head>

<body>
    <div id="TumSayfa">
        <?php
        include "leftMenu.php";
        include "dataBaseInfo.php";
        $conn = new mysqli($servername, $user, $pass, $dbname);
        $query = "select * from donem";
        $result = $conn->query($query);
        echo $leftMenu;
        ?>
        <div id="Icerik">
            <div id="GenelTabloSinirlamaAlani">
                <div class="col-md-12">

                    <h3 class="title-5 m-b-35">Dönemler</h3>
                    <div class="table-data__tool">

                        <div class="table-data__tool-right">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#modalAddDonem"><i class="zmdi zmdi-plus"></i>Yeni Dönem Ekle</button>
                        </div>
                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table id="TabloSinirlamaAlani" class="table table-data2">
                            <thead>
                                <tr>
                                    <th>Dönem Kodu</th>
                                    <th>Dönem Adı</th>
                                    <th>Düzenle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($donem = mysqli_fetch_array($result)) {
                                    echo '  
                                    <tr class="tr-shadow">
                                        <td>' . $donem["donemId"] . '</td>
                                        <td class="status--process"> ' . $donem["donemAdi"] . ' </td>
                                        <td>
                                            <div class="table-data-feature">
                                                <button onclick="donemEdit(' . $donem["donemId"] . ',`' . $donem["donemAdi"] . '`)" data-target="#modalEditDonem" data-toggle="modal" class="item" data-toggle="tooltip" data-placement="top" title="Güncelle" data-original-title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                                <button onclick="deleteDonem(' . $donem["donemId"] . ',`' . $donem["donemAdi"] . '`)" data-target="#modalDeleteDonem" data-toggle="modal" class="item" data-toggle="tooltip" data-placement="top" title="Sil" data-original-title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>';
                                }
                                ?>
                                <script>
                                    function donemEdit(donemNo, donemAdi) {
                                        getDonem(donemNo, donemAdi);
                                    }

                                    function getDonem(donemNo, donemAdi) {
                                        document.getElementById("donemNoID").value = donemNo;
                                        document.getElementById("oldDonemNoID").value = donemNo;
                                        document.getElementById("donemAdiID").value = donemAdi;
                                    }

                                    function deleteDonem(donemNo, donemAdi) {
                                        document.getElementById("deleteDonemID").value = donemNo;
                                        document.getElementById("whichDonem").innerHTML = donemAdi;
                                    }
                                </script>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Modal-->
    <div class="modal fade" id="modalAddDonem">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Dönem Ekle</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="insertDonem.php" method="post">
                        <div class="form-group">
                            <label><b>Dönem No:</b></label>
                            <input type="text" class="form-control" name="donemId">
                        </div>
                        <div class="form-group">
                            <label><b>Dönem Adı:</b></label>
                            <input type="text" class="form-control" name="donemAdi">
                        </div>
                        <button type="submit" class="btn btn-info">Ekle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Modal-->
    <div class="modal fade" id="modalEditDonem">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Dönem Düzenle</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="editDonem.php" method="post">
                        <div class="form-group">
                            <label><b>Dönem No:</b></label>
                            <input id="donemNoID" type="text" class="form-control" name="donemId">
                            <input id="oldDonemNoID" type="hidden" class="form-control" name="oldDonemId" value="">
                        </div>
                        <div class="form-group">
                            <label><b>Dönem Adı:</b></label>
                            <input id="donemAdiID" type="text" class="form-control" name="donemAdi">
                        </div>
                        <button type="submit" class="btn btn-info">Kaydet</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete Modal-->
    <div class="modal fade" id="modalDeleteDonem">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Dönem Sil</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <label id="whichDonem"></label>
                    dönemini silmek istediğinize emin misiniz?
                    <form action="deleteDonem.php" method="post">
                        <button type="submit" class="btn btn-danger">Evet</button>
                        <input id="deleteDonemID" type="hidden" class="form-control" name="donemId" value="">
                    </form>
                    <form>
                        <button type="close" class="btn btn-info">Hayır</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
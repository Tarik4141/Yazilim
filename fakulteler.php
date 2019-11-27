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

<body onresize="test()" onLoad="yenile()">
    <div id="TumSayfa" onClick="kapat()">
        <?php
        include "leftMenu.php";
        include "dataBaseInfo.php";
        $conn = new mysqli($servername, $user, $pass, $dbname);
        $query = "select * from fakulte";
        $result = $conn->query($query);
        echo $leftMenu;
        ?>
        <div id="Icerik">
            <div id="GenelTabloSinirlamaAlani">
                <div class="col-md-12">

                    <h3 class="title-5 m-b-35">Fakülteler</h3>
                    <div class="table-data__tool">

                        <div class="table-data__tool-right">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#ModaladdFaculty"><i class="zmdi zmdi-plus"></i>Yeni Fakülte Ekle</button>
                        </div>
                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table id="TabloSinirlamaAlani" class="table table-data2">
                            <thead>
                                <tr>
                                    <th>Fakülte Kodu</th>
                                    <th>Fakülte Adı</th>
                                    <th>İçerdiği Bölümler</th>
                                    <th>Düzenle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($fakulte = mysqli_fetch_array($result)) {
                                    echo '  
                                    <tr class="tr-shadow">
                                        <td>' . $fakulte["fakulteNo"] . '</td>
                                        <td class="status--process"> ' . $fakulte["fakulteAdi"] . ' </td>
                                        <form method="get" action="fakulteler.php">
                                            <input type = "hidden" name="fakulteAdi" value="' . $fakulte["fakulteAdi"] . '">
                                        </form>
                                            <td><button class="au-btn au-btn-icon au-btn--darkseagreen au-btn--small" data-toggle="modal" data-target="#modalShowDepartments">Göster</button></td>
                                        <td>
                                            <div class="table-data-feature">
                                                <button onclick="facultyEdit(' . $fakulte["fakulteNo"] . ',`' . $fakulte["fakulteAdi"] . '`)" data-target="#modalEditFaculty" data-toggle="modal" class="item" data-toggle="tooltip" data-placement="top" title="Güncelle" data-original-title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                                <button onclick="deleteFaculty(' . $fakulte["fakulteNo"] . ',`' . $fakulte["fakulteAdi"] . '`)" data-target="#modalDeleteFaculty" data-toggle="modal" class="item" data-toggle="tooltip" data-placement="top" title="Sil" data-original-title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>';
                                }
                                ?>
                                <script>
                                    function facultyEdit(fakulteNo, fakulteAdi) {
                                        getFaculty(fakulteNo, fakulteAdi);
                                    }

                                    function getFaculty(fakulteNo, fakulteAdi) {
                                        document.getElementById("fakulteNoID").value = fakulteNo;
                                        document.getElementById("oldfakulteNoID").value = fakulteNo;
                                        document.getElementById("fakulteAdiID").value = fakulteAdi;
                                    }

                                    function deleteFaculty(fakulteNo, fakulteAdi) {
                                        document.getElementById("deleteFacultyID").value = fakulteNo;
                                        document.getElementById("whichFaculty").innerHTML = fakulteAdi;
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
    <div class="modal fade" id="ModaladdFaculty">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Fakülte Ekle</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="insertFaculty.php" method="post">
                        <div class="form-group">
                            <label><b>Fakülte No:</b></label>
                            <input type="text" class="form-control" name="fakulteNo">
                        </div>
                        <div class="form-group">
                            <label><b>Fakülte Adı:</b></label>
                            <input type="text" class="form-control" name="fakulteAdi">
                        </div>
                        <button type="submit" class="btn btn-danger">Ekle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Modal-->
    <div class="modal fade" id="modalEditFaculty">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Fakülte Düzenle</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="editFaculty.php" method="post">
                        <div class="form-group">
                            <label><b>Fakülte No:</b></label>
                            <input id="fakulteNoID" type="text" class="form-control" name="fakulteNo">
                            <input id="oldfakulteNoID" type="hidden" class="form-control" name="oldfakulteNo" value="">
                        </div>
                        <div class="form-group">
                            <label><b>Fakülte Adı:</b></label>
                            <input id="fakulteAdiID" type="text" class="form-control" name="fakulteAdi">
                        </div>
                        <button type="submit" class="btn btn-danger">Ekle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete Modal-->
    <div class="modal fade" id="modalDeleteFaculty">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Fakülte Sil</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <label id="whichFaculty"></label>
                    adlı fakülteyi silmek istediğinize emin misiniz?
                    <form action="deleteFaculty.php" method="post">
                        <button type="submit" class="btn btn-danger">Evet</button>
                        <input id="deleteFacultyID" type="hidden" class="form-control" name="fakulteNo" value="">
                    </form>
                    <form>
                        <button type="close" class="btn btn-info">Hayır</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalShowDepartments">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Bölümler</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="table-data__tool">
                            <div class="table-data__tool-right">
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table id="TabloSinirlamaAlani" class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>Bölüm No</th>
                                        <th>Bölüm Adı</th>
                                        <th>Fakülte</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $fakulteAdi = $_GET["fakulteAdi"];
                                    $bolumler_query = "select bolumNo,bolumAdi,(select fakulteAdi from fakulte where fakulteNo = bolum.fakulteNo) as fakulteAdi from bolum;";
                                    $bolumler_result = $conn->query($bolumler_query);
                                    while ($bolum = mysqli_fetch_array($bolumler_result)) {
                                        echo '  
                                    <tr class="tr-shadow">
                                        <td>' . $fakulteAdi . '</td>
                                        <td>' . $bolum["bolumAdi"] . '</td>
                                        <td>' . $bolum["fakulteAdi"] . '</td>
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
    </div>
</body>

</html>
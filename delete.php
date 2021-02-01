<?php
    include "koneksi.php";
    $id = $_GET['idcustomer'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE idcustomer='$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/web-uas/data_mahasiswa.php'>";
?>
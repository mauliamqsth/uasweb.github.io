<?php
    include "koneksi.php";
    $id = $_GET['idcustomer'];
    $ambilData = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE idcustomer='$id'");
    $data=mysqli_fetch_array($ambilData);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UAS WEB 1</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Edit Data Mahasiswa 
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">

                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="text" name="npm" class="form-control col-md-9" placeholder="Masukkan NPM">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control col-md-9" placeholder="Masukkan Nama">
                    </div>

                    <div class="form-group">
                        <label for="tempat lahir">Tempat Lahir</label>
                        <input type="text" name="tempat lahir" class="form-control col-md-9" placeholder="Masukkan Tempat Lahir">
                    </div>

                    <div class="form-group">
                        <label for="tanggal lahir">Tanggal Lahir</label>
                        <input type="number" name="tanggal lahir" value="<?php echo $data['tanggal lahir']?>" class="form-control col-md-9" placeholder="Masukkan Tanggal Lahir">
                    </div>

                    <div class="form-group">
                        <label for="jenis kelamin">Jenis Kelamin</label>
                        <input type="text" name="jenis kelamin"class="form-control col-md-9" placeholder="Masukkan Jenis Kelamin(P/L)">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" value="<?php echo $data['alamat']?>" class="form-control col-md-9" placeholder="Masukkan Alamat">
                    </div>

                    <div class="form-group">
                        <label for="nama">Kodepos</label>
                        <input type="number" name="kodepos" value="<?php echo $data['kodepos']?>" class="form-control col-md-9" placeholder="Masukkan Kodepos">
                    </div>

                    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">BATAL</button>
                </form>

            </div>
        </div>
    </div>


</body>
</html>

<?php

        include "koneksi.php";
        if(isset($_POST['simpan']))
        {
            $npm       = $_POST['npm'];
            $nama       = $_POST['nama'];
            $tempat_lahir     = $_POST['tempat_lahir'];
            $tanggal_lahir       = $_POST['tanggal_lahir'];
            $jenis_kelamin       = $_POST['jenis_kelamin'];
            $alamat       = $_POST['alamat'];
            $kodepos    = $_POST['kodepos'];

            mysqli_query($koneksi, "UPDATE mahasiswa
            SET npm='$npm', nama='nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', kode_pos='$kode_pos'
            WHERE idcustomer='$id'") or die(mysqli_error($koneksi));

            echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Disimpan.... </h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/web-uas/data_mahasiswa.php'>";
        }
?>
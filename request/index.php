<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-3 border rounded
         2px">
            <form method="POST" action="index.php">
            <h3>Data Siswa</h3>
            Nama Siswa
            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap"><br>
            Sekolah
            <input type="text" class="form-control" name="sekolah" placeholder="Sekolah"><br>
            Motivasi
            <input type="text" class="form-control" name="motivasi" placeholder="Motivasi"><br>
            <input class="btn btn-primary mb-4" type="submit" name="action" value="Submit">
            </form>
        </div>

        <div class="col-3 border rounded 2px ml-4">
            <form method="POST" action="index.php">
            <h3>Data Tim</h3>
            Nama Tim
            <input type="text" class="form-control" name="nama_tim" placeholder="Nama Tim"><br>
            <input class="btn btn-primary" type="submit" name="action" value="Tambahkan Tim">
            </form>
        </div>
    </div>
</div>
<div class="container">
    <h3>Hasil Request</h3>
    <div class="row">
        <div class="col-4 border rounded 2px">
            <?php
                if($_GET){
                    echo "Nama : " . $_GET["nama"];
                    echo "<br>";
                    echo "Sekolah : " . $_GET["sekolah"];
                    echo "<br>";
                    echo "Motivasi : " . $_GET["motivasi"];
                }
            ?>
        </div>
        <div class="col-4 border rounded 2px">
            <?php
                if($_POST){
                    echo "Nama: " . $_POST["nama_tim"];
                }
            ?>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
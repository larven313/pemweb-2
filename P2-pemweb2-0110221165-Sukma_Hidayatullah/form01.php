<?php

$_nama = $_GET['nama'];
$_umur = $_GET['umur'];
$_gender = $_GET['gender'];

$status = ($_umur >= 17) ? "Dewasa" : "Anak-Anak";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <form method="get" action="form01.php">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" placeholder="Masukkan nama" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-4 col-form-label">Umur</label>
            <div class="col-8">
                <input id="umur" name="umur" placeholder="Masukkan umur" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Gender</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L">
                    <label for="gender_0" class="custom-control-label">Laki-laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P">
                    <label for="gender_1" class="custom-control-label">Perempuan</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <div class="container">
        <?php
        echo "Nama lengkap $_nama";
        echo "</br>Umur $_umur";
        echo "</br>Gender $_gender";
        echo "</br>Status  $status";

        ?>
    </div>
</body>

</html>
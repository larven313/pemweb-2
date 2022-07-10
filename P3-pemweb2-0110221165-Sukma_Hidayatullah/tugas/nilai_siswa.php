<?php
include 'libfungsi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <div class="container p-3 border border-primary rounded mt-5">
        <form method="POST" action="nilai_siswa.php" autocomplete="off">
            <div class="form-group row">
                <label for="nam" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <input id="nam" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select">
                        <option value="" hidden>Pilih Matkul</option>
                        <option value="basis-data">Basis Data</option>
                        <option value="php">PHP</option>
                        <option value="ddp">Dasar-dasar Pemrograman</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">NIlai UTS</label>
                <div class="col-8">
                    <input id="nilai_uts" name="nilai_uts" placeholder="NIlai UTS" type="number" max="100" min="0" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                <div class="col-8">
                    <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="number" max="100" min="0" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label>
                <div class="col-8">
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="NIlai UTS" type="number" max="100" min="0" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>


        <?php


        if (isset($_POST['submit'])) {
            $nama_siswa = $_POST['nama'];
            $mata_kuliah = $_POST['matkul'];
            $nilai_uts = $_POST['nilai_uts'];
            $nilai_uas = $_POST['nilai_uas'];
            $nilai_tugas = $_POST['nilai_tugas'];
            $nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
            $keterangan = kelulusan($nilai_akhir);
            $grade = grade($nilai_akhir);
            $predikat = predikat($nilai_akhir);



            // if ($nilai_akhir >= 0 && $nilai_akhir <= 35) {

            //     $predikat = "Sangat Kurang";
            //     // $keterangan = "Tidak Lulus";
            // } else if ($nilai_akhir >= 36 && $nilai_akhir <= 55) {

            //     $predikat = "Kurang";
            //     // $keterangan = "Tidak Lulus";
            // } else if ($nilai_akhir >= 56 && $nilai_akhir <= 69) {

            //     $predikat = "Cukup";
            //     // $keterangan = "Lulus";
            // } else if ($nilai_akhir >= 70 && $nilai_akhir <= 84) {

            //     $predikat = "Memuaskan";
            //     // $keterangan = "Lulus";
            // } else if ($nilai_akhir >= 85 && $nilai_akhir <= 100) {

            //     $predikat = "Sangat Memuaskan";
            //     // $keterangan = "Lulus";
            // } else {

            //     $predikat = "Tidak Ada";
            //     $keterangan = "Tidak Ada";
            // }


            // switch ($predikat) {
            //     case 'Sangat Kurang':
            //         $grade = "E";
            //         break;
            //     case 'Kurang':
            //         $grade = "D";
            //         break;
            //     case 'Cukup':
            //         $grade = "C";
            //         break;
            //     case 'Memuaskan':
            //         $grade = "B";
            //         break;
            //     case 'Sangat Memuaskan':
            //         $grade = "A";
            //         break;
            //     default:
            //         $grade = "I";
            //         break;
            // }




            switch ($mata_kuliah) {
                case 'basis-data':
                    $nama_matkul =  "Basis Data";
                    break;
                case 'php':
                    $nama_matkul =  "PHP";
                    break;
                case 'ddp':
                    $nama_matkul =  "Dasar-dasar Pemrograman";
                    break;
                default:
                    echo "tidak ada";
                    break;
            }
        }



        ?>
    </div>

    <div class="container p-3 border border-success rounded mt-5">
        <?php
        echo "Nama Siswa: $nama_siswa";
        echo "</br>Mata Kuliah : $nama_matkul";
        echo "</br>Nilai UTS : $nilai_uts";
        echo "</br>Nilai UAS : $nilai_uas";
        echo "</br>Nilai Tugas : $nilai_tugas";
        echo "</br>Nilai Akhir : $nilai_akhir";
        echo "</br>Grade : $grade";
        echo "</br>Predikat : $predikat";
        echo "</br>Keterangan : $keterangan";

        ?>
    </div>
</body>

</html>
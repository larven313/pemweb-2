<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <div class="container mt-5 border border-primary rounded">
    <h3>Form Nilai Siswa</h3>
    <hr>
    <form method="POST" action="form_nilai.php">
      <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
        <div class="col-8">
          <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
        <div class="col-8">
          <select id="matkul" name="matkul" class="custom-select">
            <option value="ddp">Dasar-dasar Pemrograman</option>
            <option value="web">Pemrograman Web</option>
            <option value="basis-data">Basis Data</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="uts" class="col-4 col-form-label">Niali UTS</label>
        <div class="col-8">
          <input id="uts" name="uts" placeholder="Nilai UTS" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="uas" class="col-4 col-form-label">Nilai UAS</label>
        <div class="col-8">
          <input id="uas" name="uas" placeholder="Nilai UAS" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label>
        <div class="col-8">
          <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </form>
    <?php
    // ambil data input user
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $nilai_uts = $_POST['uts'];
    $nilai_uas = $_POST['uas'];
    $nilai_tugas = $_POST['tugas'];
    $nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
    $grade;
    $predikat;
    $keterangan;


    if ($nilai_akhir >= 0 && $nilai_akhir <= 35) {

      $predikat = "Sangat Kurang";
      $keterangan = "Tidak Lulus";
    } else if ($nilai_akhir >= 36 && $nilai_akhir <= 55) {

      $predikat = "Kurang";
      $keterangan = "Tidak Lulus";
    } else if ($nilai_akhir >= 56 && $nilai_akhir <= 69) {

      $predikat = "Cukup";
      $keterangan = "Lulus";
    } else if ($nilai_akhir >= 70 && $nilai_akhir <= 84) {

      $predikat = "Memuaskan";
      $keterangan = "Lulus";
    } else if ($nilai_akhir >= 85 && $nilai_akhir <= 100) {

      $predikat = "Sangat Memuaskan";
      $keterangan = "Lulus";
    } else {

      $predikat = "Tidak Ada";
      $keterangan = "Tidak Ada";
    }


    switch ($predikat) {
      case 'Sangat Kurang':
        $grade = "E";
        break;
      case 'Kurang':
        $grade = "D";
        break;
      case 'Cukup':
        $grade = "C";
        break;
      case 'Memuaskan':
        $grade = "B";
        break;
      case 'Sangat Memuaskan':
        $grade = "A";
        break;
      default:
        $grade = "I";
        break;
    }


    ?>
  </div>

  <div class="container border border-primary mt-5">
    <?php
    echo "Nama Siswa : $nama";
    echo "<br>Mata Kuliah : $matkul";
    echo "<br>Nilai UTS : $nilai_uts";
    echo "<br>Nilai UAS : $nilai_uas";
    echo "<br>Nilai Tugas : $nilai_tugas";
    echo "<br>Nilai Akhir : $nilai_akhir";
    echo "<br>Grade : $grade";
    echo "<br>Predikat : $predikat";
    echo "<br>Keterangan : $keterangan";



    ?>
  </div>
</body>

</html>
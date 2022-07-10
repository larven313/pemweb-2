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
        <form method="POST" action="class_nilaimahasiswa.php" autocomplete="off">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <input id="nim" name="nim" placeholder="NIM Lengkap" type="text" class="form-control" required>
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
                <label for="nilai" class="col-4 col-form-label">Nilai</label>
                <div class="col-8">
                    <input id="nilai" name="nilai" placeholder="Nilai " type="number" max="100" min="0" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            <?php
            class NilaiMahasiswa
            {
                var $matakuliah;
                var $nilai;
                var $nim;

                function __construct($nim, $matakuliah, $nilai)
                {
                    $this->matakuliah = $matakuliah;
                    $this->nilai = $nilai;
                    $this->nim = $nim;
                }

                function grade()
                {

                    if ($this->nilai >= 0 && $this->nilai <= 35) {
                        return "E";
                    } else if ($this->nilai >= 36 && $this->nilai <= 55) {
                        return "D";
                    } else if ($this->nilai >= 56 && $this->nilai <= 69) {
                        return "C";
                    } else if ($this->nilai >= 70 && $this->nilai <= 84) {
                        return "B";
                    } else if ($this->nilai >= 85 && $this->nilai <= 100) {
                        return "A";
                    }
                }

                function hasil()
                {
                    if ($this->nilai > 55) {
                        return "Lulus";
                    } else {
                        return "Tidak Lulus";
                    }
                }
            }
            ?>
        </form>


        <?php


        if (isset($_POST['submit'])) {
            $nim_siswa = $_POST['nim'];
            $matakuliah = $_POST['matkul'];
            $nilai = $_POST['nilai'];

            // $keterangan = kelulusan($nilai_akhir);
            // $grade = grade($nilai_akhir);
            // $predikat = predikat($nilai_akhir);
            $nama_matkul;


            switch ($matakuliah) {
                case 'basis-data':
                    $matakuliah =  "Basis Data";
                    break;
                case 'php':
                    $matakuliah =  "PHP";
                    break;
                case 'ddp':
                    $matakuliah =  "Dasar-dasar Pemrograman";
                    break;
                default:
                    echo "tidak ada";
                    break;
            }

            $siswa = new NilaiMahasiswa($nim_siswa, $matakuliah, $nilai);
            $grade = $siswa->grade();
            $kelulusan = $siswa->hasil();


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



        }



        ?>
    </div>

    <div class="container p-3 border border-success rounded mt-5">
        <?php
        // echo "NIM Siswa: $siswa->nim";
        // echo "</br>Mata Kuliah : " . $siswa->matakuliah;
        // echo "</br>Nilai :" . $siswa->nilai;
        // echo "</br>Grade : $grade";
        // echo "</br>Hasil :" . $kelulusan;



        ?>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Hasil</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?= $siswa->nim ?></td>
                    <td><?= $siswa->matakuliah ?></td>
                    <td><?= $siswa->nilai ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $kelulusan ?></td>

                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>
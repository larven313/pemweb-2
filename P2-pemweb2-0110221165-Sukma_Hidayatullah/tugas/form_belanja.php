<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form Belanja</title>
</head>

<body>



    <div class="row border border-primary pt-3 m-5 rounded">
        <div class="col-md-8">
            <h3>Belanja Online</h3>
            <hr>

            <form action="form_belanja.php" method="post">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Customer</label>
                    <div class="col-8">
                        <input id="nama" name="nama" placeholder="Nama Customer" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv">
                            <label for="produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas">
                            <label for="produk_1" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin_cuci">
                            <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                    <div class="col-8">
                        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <div class="offset-4 col-8">
                        <button name="proses" type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
                <?php
                $proses = $_POST['proses'];
                $nama = $_POST['nama'];
                $produk = $_POST['produk'];
                $jumlah = $_POST['jumlah'];

                $nama_produk;
                $total;
                ?>
            </form>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-primary text-white">Daftar Harga</li>
                    <li class="list-group-item">TV : 4.200.000</li>
                    <li class="list-group-item">Kulkas : 3.100.000</li>
                    <li class="list-group-item">MESIN CUCI : 3.800.000</li>
                    <li class="list-group-item bg-primary text-white">Harga Dapat Berubah Setiap Saat</li>
                </ul>
            </div>
        </div>

        <hr class="mt-3">
        <?php
        if ($produk == "tv") {
            $nama_produk = "TV";
            $total = 4200000 * $jumlah;
        } else if ($produk == "kulkas") {
            $nama_produk = "Kulkas";
            $total = 3100000 * $jumlah;
        } else if ($produk == "mesin_cuci") {
            $nama_produk = "Mesin Cuci";
            $total = 3800000 * $jumlah;
        }

        ?>
        <div class="row">
            <table style="width: 20%;">
                <tbody>
                    <tr>
                        <td>Nama Customer</td>
                        <td>:</td>
                        <td><?= $nama ?></td>
                    </tr>
                    <tr>
                        <td>Produk Pilihan</td>
                        <td>:</td>
                        <td><?= $nama_produk ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Beli</td>
                        <td>:</td>
                        <td><?= $jumlah ?></td>
                    </tr>
                    <tr>
                        <td>Total Belanja</td>
                        <td>:</td>
                        <td><?= $total . ',-' ?>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
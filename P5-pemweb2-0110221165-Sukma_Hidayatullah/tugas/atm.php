<?php

require_once "class_account.php";
require_once "class_accountbank.php";


$ac1 = new Account("ahmad", 4343900);
$ac2 = new Account("Dewi", 9000000);


// $ac1->cetak();
// echo "<hr>";
// $ac2->cetak();
// echo '<hr color="red">';
$ab1 = new AccountBank('C001', 6000000, 'Ahmad');
$ab2 = new AccountBank('C002', 5350000, 'Budi');
$ab3 = new AccountBank('C003', 250000, 'Kurniawan');
// $ar_ab = [$ab1->cetak(), $ab2->cetak(), $ab3->cetak()];
$ar_ab = [$ab1, $ab2, $ab3];


$no = 1;
// $ab1->cetak();
// echo "<hr>";
// $ab2->cetak();

// echo "<hr color='green'>";
// $ab1->cetak();
// $ab1->transfer($ab2, 300000);

// echo 'sesudah transfer<br/>';
// $ab1->cetak();
// echo "<hr>";

// $ab2->cetak();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun Bank</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>


    <h1 class="text-center">Sebelum Melakukan Aksi</h1>
    <table border="1" class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>No.Account</th>
                <th>Pemilik</th>
                <th>Saldo</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($ar_ab as $array) {  ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td> <?= $array->nomor ?></td>
                    <td> <?= $array->customer ?></td>
                    <td> <?= $array->saldo ?></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
    <?php
    $ab1->deposit(1000000);
    $ab1->transfer($ab3, 1500000);
    $ab1->transfer($ab2, 500000);

    $ab2->withdraw(2500000);
    echo $ab1->customer . " melakukan deposit sebesar 1000000 <br>";
    echo $ab1->customer . " melakukan tranfser sebesar 1500000 kepada " . $ab3->customer . "<br>";
    echo $ab1->customer . " melakukan tranfser sebesar 500000 kepada " . $ab2->customer . "<br>";


    $no -= 3;

    ?>

    <h1 class="text-center">Sesudah Melakukan Aksi</h1>
    <table border="1" class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>No.Account</th>
                <th>Pemilik</th>
                <th>Saldo</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($ar_ab as $array) {  ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td> <?= $array->nomor ?></td>
                    <td> <?= $array->customer ?></td>
                    <td> <?= $array->saldo ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tables - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WEB02</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Review PHP
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PHP 5 OOP
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PHP 5 OOP
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <br>
        <br>
        <br>
        <?php
        require_once "../class_mahasiswa.php";
        $mahasiswa = new Mahasiswa(449849, "Andi", 3, "TI", "2021");
        $mahasiswa2 = new Mahasiswa(1564854, "Asep", 3.6, "SI", "2021");
        $mahasiswa3 = new Mahasiswa(6982814, "Budi", 2.8, "TI", "2020");
        $mahasiswa4 = new Mahasiswa(254628, "Bambang", 4, "TI", "2021");
        $mahasiswa5 = new Mahasiswa(449849, "Cecep", 2.5, "SI", "2020");

        $ar_mahasiswa = [$mahasiswa->nim, $mahasiswa->nama, $mahasiswa2->nim, $mahasiswa3->nim, $mahasiswa4->nim, $mahasiswa5->nim];

        // foreach ($ar_mahasiswa as $array) {
        //     echo $array;
        //     echo "<br>";
        // }

        ?>
        <div class="container-fluid px-4">

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Prodi</th>
                                <th>Thn Angkatan</th>
                                <th>IPK</th>
                                <th>Predikat</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Prodi</th>
                                <th>Thn Angkatan</th>
                                <th>IPK</th>
                                <th>Predikat</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><?= $mahasiswa->nim ?></td>
                                <td><?= $mahasiswa->nama ?></td>
                                <td><?= $mahasiswa->prodi ?></td>
                                <td><?= $mahasiswa->thn_angkatan ?></td>
                                <td><?= $mahasiswa->ipk ?></td>
                                <td><?= $mahasiswa->predikat_ipk() ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><?= $mahasiswa2->nim ?></td>
                                <td><?= $mahasiswa2->nama ?></td>
                                <td><?= $mahasiswa2->prodi ?></td>
                                <td><?= $mahasiswa2->thn_angkatan ?></td>
                                <td><?= $mahasiswa2->ipk ?></td>
                                <td><?= $mahasiswa2->predikat_ipk() ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><?= $mahasiswa3->nim ?></td>
                                <td><?= $mahasiswa3->nama ?></td>
                                <td><?= $mahasiswa3->prodi ?></td>
                                <td><?= $mahasiswa3->thn_angkatan ?></td>
                                <td><?= $mahasiswa3->ipk ?></td>
                                <td><?= $mahasiswa3->predikat_ipk() ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><?= $mahasiswa4->nim ?></td>
                                <td><?= $mahasiswa4->nama ?></td>
                                <td><?= $mahasiswa4->prodi ?></td>
                                <td><?= $mahasiswa4->thn_angkatan ?></td>
                                <td><?= $mahasiswa4->ipk ?></td>
                                <td><?= $mahasiswa4->predikat_ipk() ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><?= $mahasiswa5->nim ?></td>
                                <td><?= $mahasiswa5->nama ?></td>
                                <td><?= $mahasiswa5->prodi ?></td>
                                <td><?= $mahasiswa5->thn_angkatan ?></td>
                                <td><?= $mahasiswa5->ipk ?></td>
                                <td><?= $mahasiswa5->predikat_ipk() ?></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2021</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
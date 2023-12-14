<?php
require 'functions.php';
$menu = query("SELECT * FROM menu")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-sm">
        <br>

        <div class="row">
            <div class="col">
                <div class="col text-start">
                    <a class="btn btn-primary" href="tambah_data.php">Tambah Menu</a>
                </div>
            </div>
            <div class="col">
                <div class="col text-end">
                    <a class="btn btn-warning" href="index.php">Kembali</a>
                </div>
            </div>
        </div>

        <br>

        <div class="card">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Data menu</h4>
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($menu as $row) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $row["nama"]; ?></td>
                                <td><?= $row["deskripsi"]; ?></td>
                                <td><?= $row["harga"]; ?></td>
                                <td><img src="menu/<?php echo $row["gambar"]; ?>" height="100" width="100"></td>
                                <td>
                                    <a class="btn btn-primary" href="edit.php?id=<?php echo $row["id"]; ?>">Ubah</a>
                                    <a class="btn btn-danger" href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Apakah data ini akan dihapus')">Hapus</a>
                                </td>
                            </tr>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>
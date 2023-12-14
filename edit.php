<?php
require 'functions.php';

$id = $_GET["id"];

$menu = query("SELECT * FROM menu WHERE id=$id")[0];

if (isset($_POST["submit"])) {
    if (edit($_POST) > 0) {
        echo "
                <script>
                    alert('data berhasil diperbaharui');
                    document.location.href = 'admin.php';
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('data gagal diperbaharui');
                    document.location.href = 'admin.php';
                </script>
            ";
        echo "<br>";
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-sm">
        <br>

        <div class="col text-start">
            <a class="btn btn-warning" href="admin.php">Kembali</a>
        </div>

        <div class="card">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-header text-center">
                    <div class="row">
                        <div class="col-11 text-start">
                            <h4>Form Update Data Menu</h4>
                        </div>
                        <div class="col-1 text-end">
                            <a class="btn-close" aria-label="Close" href="admin.php"></a>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="card-body">
                        <input type="hidden" name="id" value="<?= $menu["id"]; ?>">

                        <h6>Nama : </h6>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?= $menu["nama"]; ?>" required><br>

                        <h6>Deskripsi : </h6>
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="<?= $menu["deskripsi"]; ?>" required><br>

                        <h6>Harga : </h6>
                        <input type="text" name="harga" class="form-control" value="<?= $menu["harga"]; ?>" required><br>

                        <h6>Gambar : </h6>
                        <input type="file" name="gambar" class="form-control" value="<?= $menu["gambar"]; ?>" required><br>

                    </div>
                </div>

                <div class="card-footer text-center">
                    <!-- membuat tombol update dan akan dikirim ke file proses -->
                    <button class="btn btn-primary" type="submit" name="submit">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<?php
require 'functions.php';
//cek apakah tombol submit sudah ditekan atau belum 
if (isset($_POST["submit"])) {
    // cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'admin.php';
            </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-sm">
        <br>

        <div class="text-center">
            <h4>Form Tambah Data Menu</h4>
            <br>
        </div>
        <div class="col text-start">
            <a class="btn btn-warning" href="admin.php">Kembali</a>
        </div>
        <!-- Membuat card -->
        <div class="card">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-header text-center">
                    <div class="row">
                        <div class="col-11 text-start">
                            <h4>Form Tambah Data Menu</h4>
                        </div>
                        <div class="col-1 text-end">
                            <a class="btn-close" aria-label="Close" href="admin.php"></a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="card-body">

                        <!-- Membuat inputan data menu -->
                        <h6>Nama : </h6>
                        <input type="text" name="nama" class="form-control" placeholder="Nama menu" required><br>

                        <h6>Deskripsi : </h6>
                        <textarea name="deskripsi" class="form-control" rows="2" placeholder="Deskripsi"></textarea><br>

                        <h6>Harga : </h6>
                        <input type="text" name="harga" class="form-control" placeholder="Harga" required><br>

                        <h6>Gambar : </h6>
                        <input type="file" name="gambar" class="form-control" required><br>

                    </div>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<?php
//koneksi ke Database
$conn = mysqli_connect("localhost", "root", "", "menantea");

if (!$conn) {
    die('Koneksi error : ' . mysqli_connect_errno()
        . ' - ' . mysql_connect_error());
}

$result = mysqli_query($conn, "SELECT * FROM menu");

function query($query_kedua)
{
    global $conn;
    $result = mysqli_query($conn, $query_kedua);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $harga = htmlspecialchars($data["harga"]);
    // $gambar = $_FILES["gambar"]["name"];
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    // // query insert data
    $query = "INSERT INTO menu (nama, deskripsi, harga, gambar)
        VALUES
        ('$nama', '$deskripsi', '$harga', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_multi_query($conn, "DELETE FROM menu WHERE id = $id; ALTER TABLE menu AUTO_INCREMENT = 1");
    // mysqli_query($conn, "DELETE FROM menu WHERE id = $id; ALTER TABLE menu AUTO_INCREMENT = 1");
    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = upload();

    $query = "UPDATE menu SET 
                nama = '$nama',
                deskripsi = '$deskripsi',
                harga = '$harga',
                gambar = '$gambar'
                WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// function cari($keyword){
//     $sql = "SELECT * FROM menu
//     WHERE
//     nama LIKE '%$keyword%' OR
//     deskripsi LIKE '%$keyword%' OR
//     harga LIKE '%$keyword%'
//     ";
//     return query($sql);
// }

//create image upload function
function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
                    alert('Pilih gambar terlebih dahulu!');
                </script>";
        return false;
    }

    //cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile); //memecah string menjadi array
    $ekstensiGambar = strtolower(end($ekstensiGambar)); //mengambil ekstensi gambar paling akhir dan mengubahnya menjadi huruf kecil
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                    alert('Yang anda upload bukan gambar!');
                </script>";
        return false;
    }

    //cek jika ukurannya terlalu besar
    if ($ukuranFile > 5000000) {
        echo "<script>
                    alert('Ukuran gambar terlalu besar!');
                </script>";
        return false;
    }

    // $namaFileBaru = uniqid();
    // $namaFileBaru .= '.';
    // $namaFileBaru .= $ekstensiGambar;

    // var_dump($namaFileBaru); die;
    move_uploaded_file($tmpName, 'menu/' . $namaFile);

    return $namaFile;
}

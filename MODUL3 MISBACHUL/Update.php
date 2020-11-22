<?php
include('connect.php');

// if(isset($_POST['submit'])){
function update($ID, $POST)
{
    global $conn;
    $nama = $POST['nama'];
    $deskripsi = $POST['deskripsi'];
    $tanggal = $POST['tanggal'];
    $jammulai = $POST['mulai'];
    $jamberakhir = $POST['berakhir'];
    $tempat = $POST['tempat'];
    $harga = $POST['harga'];
    $benefit = implode(",", $POST['benefit']);
    $kategori = $POST['kategori'];




    $rand = rand();
    $ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
    $filename = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $temp = $_FILES['gambar']['tmp_name'];
    $pathi = pathinfo($filename, PATHINFO_EXTENSION);



    if (!in_array($pathi, $ekstensi)) {
        header("location:BuatEvent.php?alert=gagal_ekstensi");
    } else {
        // var_dump($POST);
       

        $xr = $rand.'_'.$filename;
        $foto = basename($xr);
        $path = "gambar/$foto";
        move_uploaded_file($temp,$path);
        $query = "UPDATE event SET Nama='$nama',
        Deskripsi='$deskripsi',
        Gambar = '$foto',
        Kategori='$kategori',
        Tanggal='$tanggal',
        Mulai='$jammulai',
        Berakhir='$jamberakhir',
        Tempat='$tempat',
        Harga='$harga',
        Benefit='$benefit' WHERE Id='$ID'
        ";
        mysqli_query($conn, $query);

        header("location:Home.php?alert=berhasil");
        }   
    }

// }

<?php
include_once ("koneksi.php");
if ($_POST) {

    $Id_Sekolah = $_POST['Id_Sekolah'];
    $Nama_Sekolah = $_POST['Nama_Sekolah'];
    $Akreditasi_Sekolah = $_POST['Akreditasi_Sekolah'];
    $Alamat_Sekolah = $_POST['Alamat_Sekolah'];


    if (empty($Id_Sekolah)) {
        echo "<script>alert('Id sekolah tidak boleh kosong');location.href='tambah_jurusan.php';</script>";
    } elseif (empty($Nama_Sekolah)) {
        echo "<script>alert('Nama sekolah tidak boleh kosong');location.href='tambah_jurusan.php';</script>";
    } elseif (empty($Akreditasi_Sekolah)) {
        echo "<script>alert('Akreditasi sekolah tidak boleh kosong');location.href='tambah_jurusan.php';</script>";
    } elseif (empty($Alamat_Sekolah)) {
        echo "<script>alert('Alamat sekolah tidak boleh kosong');location.href='tambah_jurusan.php';</script>";
    } else {

        $insert = pg_query($conn, "insert into tambah_sekolah (Id_Sekolah, Nama_Sekolah, Akreditasi_Sekolah, Alamat_Sekolah) values ('" . $Id_Sekolah . "','" . $Nama_Sekolah . "','" . $Akreditasi_Sekolah . "','" . $Alamat_Sekolah ."')");
        if ($insert) {
            echo "<script>alert('Sukses menambahkan sekolah');location.href='tambah_sekolah.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan sekolah');location.href='tambah_sekolah.php';</script>";
        }




    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <h3>Tambah Jurusan</h3>
    <form action="proses_tambah_sekolah.php" method="post">
        Id Sekolah :
        <input type="text" name="Id_Sekolah" value="" class="form-control">
        Nama Sekolah :
        <input type="text" name="Nama_Sekolah" value="" class="form-control">
        Akreditasi Sekolah :
        <input type="text" name="Akreditasi_Sekolah" value="" class="form-control">
        Alamat Sekolah :
        <input type="text" name="Alamat_Sekolah" value="" class="form-control">
        <input type="submit" name="simpan" value="Tambah sekolah" class="btn btn-primary">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
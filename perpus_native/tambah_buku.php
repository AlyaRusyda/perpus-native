<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Penambahan Buku</title>
    <style>
        * {
            margin : 10px;
        }
    </style>
</head>
<body>
    <h3>Tambah Buku</h3>
    <form action="proses_tambah_buku.php" method="post" enctype="multipart/form-data">
        Nama Buku :
        <input type="text" name="nama_buku" value="" class="form-control">
        Pengarang:
        <input type="text" name="pengarang" value="" class="form-control">
        Deskripsi : 
        <textarea id="" name="deskripsi" rows="4" class="form-control" required></textarea>
        Foto Buku:
        <input type="file" name="foto" value=""  class="form-control">
        <input type="submit" name="simpan" value="Tambah Produk" class="btn btn-primary mt-3">

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
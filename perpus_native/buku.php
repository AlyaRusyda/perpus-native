<?php 
    include "header.php";
?>
<h2 style="margin-top: 20px;">Daftar Buku</h2>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_buku=mysqli_query($conn,"select * from buku");
    while($dt_buku=mysqli_fetch_array($qry_buku)){
        ?>
        <div class="col-md-3">
            <div class="card mt-3 mb-3">
              <img src="assets/foto_produk/<?=$dt_buku['foto']?>"
              width="305px" height="420px">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_buku['nama_buku']?></h5>
                <p class="card-text"><?=substr($dt_buku['deskripsi'], 0,20)?></p>
                <a href="pinjam_buku.php?id_buku=<?=$dt_buku['id_buku']?>" class="btn btn-primary">Pinjam</a>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<div>
    <a href="tambah_buku.php" class="btn btn-primary mb-5">+ Tambah Buku</a>
</div>
<?php 
    include "footer.php";
?>

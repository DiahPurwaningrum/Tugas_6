<h4>Tambah Data</h4>
<br>
<form action="index.php?mod=buku&page=save" method="POST">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="">Jenis Buku</label>
            <input type="text" name="jenis_buku" required value="<?=(isset($_POST['jenis_buku']))?$_POST['jenis_buku']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['jenis_buku']))?$err['jenis_buku']:'';?></span>
        </div>
        <div class="form-group">
            <label for="">Tahun Terbit</label>
            <input type="text" name="tahun_terbit" required value="<?=(isset($_POST['tahun_terbit']))?$_POST['tahun_terbit']:'';?>" class="form-control">
            
        </div>
        <div class="form-group">
            <label for="">Judul Buku</label>
            <input type="text" name="judul_buku" required value="<?=(isset($_POST['judul_buku']))?$_POST['jenis_produk']:'';?>" class="form-control">

        </div>
        <div class="form-group">
            <label for="">Nama Pengarang</label>
            <input type="number" name="nama_pengarang" required value="<?=(isset($_POST['nama_pengarang']))?$_POST['nama_pengarang']:'';?>" class="form-control">
            
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>
           
          
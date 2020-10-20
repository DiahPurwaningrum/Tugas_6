<div class="container-fluid">
    <div class="row">
        <div class="pull-left">
            <h4>Daftar Buku</h4>
        </div>
        <div class="pull-right">
            <a href="index.php?mod=produk&page=add">
                <button class="btn btn-primary">add</button>
            </a>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <td>
                        #
                    </td>
                    <td>Jenis Buku</td>
                    <td>Tahun Terbit</td>
                    <td>Judul Buku</td>
                    <td>Nama Pengarang</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                <?php if($buku!=NULL){
                $no=1;
                foreach($buku as $row){?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$row['jenis_buku']?></td>
                    <td><?=$row['tahun_terbit']?></td>
                    <td><?=$row['judul_buku']?></td>
                    <td><?=$row['nama_pengarang']?></td>
                    <td>
                        <a href="index.php?mod=buku&page=edit&id=<?=md5($row['id_buku'])?>"><i
                                class="fa fa-pencil"></i> </a>
                        <a href="index.php?mod=buku&page=delete&id=<?=md5($row['id_buku'])?>"><i
                                class="fa fa-trash"></i> </a>
                    </td>
                </tr>
                <?php $no++;
                }
            } 
            ?>
            </tbody>
        </table>
    </div>

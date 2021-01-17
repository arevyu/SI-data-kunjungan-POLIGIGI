<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Dokter</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="nip_dokter" class="col-sm-3 control-label">NIP Dokter</label>
                            <div class="col-sm-9">
                                <input type="text" name="nip_dokter" class="form-control" id="inputEmail3" placeholder="Inputkan NIP Dokter" required>
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Dokter</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Dokter" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl" class="col-sm-3 control-label">Tanggal  </label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal " required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="jam" class="col-sm-3 control-label">Jam </label>
                            <div class="col-sm-9">
                                <input type="text" name="jam" class="form-control" id="inputPassword3" placeholder="Inputkan Jam">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nohp" class="col-sm-3 control-label">No HP</label>
                            <div class="col-sm-9">
                                <input type="text" name="nohp" class="form-control" id="inputEmail3" placeholder="Inputkan No HP" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-danger">
                                    <span class="fa fa-save"></span> Simpan Data Dokter</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=dokter&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Dokter
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nip_dokter=$_POST['nip_dokter'];
    $nama=$_POST['nama'];
    $tgl=$_POST['tgl'];
    $jam=$_POST['jam'];
    $nohp=$_POST['nohp'];
	$keterangan=$_POST['keterangan'];
  
    //buat sql
    $sql="INSERT INTO dokter VALUES ('','$nip_dokter','$nama','$tgl','$jam','$nohp','$keterangan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=dokter&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>

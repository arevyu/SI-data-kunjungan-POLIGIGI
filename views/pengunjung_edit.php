<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM pengunjung WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pelanggan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                   
                    <form class="form-horizontal" action="" method="post"> 
						<div class="form-group">
                            <label for="no_pengunjung" class="col-sm-3 control-label">Nomor Pengunjung</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_pengunjung" value="<?=$data['no_pengunjung']?>"class="form-control" id="inputEmail3" placeholder="Nomor Pengunjung">
                            </div>
                        </div>
                         <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                         <div class="form-group">


                    <label class="col-sm-3 control-label">Tanggal </label>
                    <!--untu tahun-->
                    <div class="col-sm-2 col-xs-9">
                        <select name="tahun" class="form-control">
                            <?php for($i=2020;$i>1980;$i--) {?>
                            <option value="<?=$i?>"> <?=$i?> </option>
                            <?php }?>
                            
                        </select>

                    </div>
                    <!--Untuk Bulan-->
                    <div class="col-sm-2 col-xs-9">
                        <select name="bulan" class="form-control">
                            <?php 
                            $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                            for($j=12;$j>0;$j--) {?>
                            <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                            <?php }?>
                            
                        </select>

                    </div>
                    <!--Untuk Tanggal-->
                    <div class="col-sm-2 col-xs-9">
                        <select name="tanggal" class="form-control">
                            <?php for($k=31;$k>0;$k--) {?>
                            <option value="<?=$k?>"> <?=$k?> </option>
                            <?php }?>
                            
                        </select>

                    </div>

                    </div>
                    <!--end tanggal lahir-->           
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Pengunjung</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama Pengunjung">
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label"> Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nohp" class="col-sm-3 control-label"> No HP</label>
                            <div class="col-sm-9">
                                <input type="text" name="nohp" value="<?=$data['nohp']?>"class="form-control" id="inputEmail3" placeholder="No HP">
                            </div>
                        </div>

                        
                        <!--Status-->
                        
                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status" class="form-control">
								
									<option value="bpjs">BPJS</option>
									<option value="umum">Umum</option>
								</select>
                            </div>
                        </div>
                        <!--Akhir Status-->
                        <div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" value="<?=$data['keterangan']?>" class="form-control" id="inputPassword3" placeholder="Keterangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-danger">
                                    <span class="fa fa-edit"></span> Update Data Pengunjung</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pengunjung&actions=tampil" class="btn btn-primary btn-sm">
                        Kembali Ke Data Pengunjung
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $no_pengunjung=$_POST['no_pengunjung'];
    $tgl=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
    $nama=$_POST['nama'];
    $nohp=$_POST['nohp'];
    $alamat=$_POST['alamat'];
    $status=$_POST['status'];
	$keterangan=$_POST['keterangan'];
    //buat sql
    $sql="UPDATE pengunjung SET no_pengunjung='$no_pengunjung',tgl='$tgl',nama='$nama',
	nohp='$nohp',alamat='$alamat',status='$status',keterangan='$keterangan' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=pengunjung&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>




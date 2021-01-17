<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Dokter</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM dokter WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">NIP Dokter</td> <td><?= $data['nip_dokter'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Dokter</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal </td> <td><?= $data['tgl'] ?></td>
                        </tr>
						<tr>
                            <td>No Hp</td> <td><?= $data['nohp'] ?></td>
                        </tr>
                        <tr>
                            <td>Jam</td> <td><?= $data['jam'] ?></td>
                        </tr>
						<tr>
                            <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=dokter&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Dokter </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>


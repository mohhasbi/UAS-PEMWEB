<div class="container pt-5">
<a href="<?= base_url('laporan');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Jumlah Kas Perbulan</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                            <tr>
                                
                                <th>Bulan</th>
                                <th>Tahun</th>
                                <th>Total</th>
                            </tr>
                    </thead>
                    <tbody>
                    <?php foreach($total as $isi){?>
                        <tr>                           
                            <td>
                                <?php
                                $monthNum  = $isi['bulan'];
                                $monthName = date('F', mktime(0, 0, 0, $monthNum, 10));
                                echo $monthName;
                                ?>
                            </td>
                            <td><?php echo $isi['tahun']; ?></td>
                            <td>
                                <?php echo "Rp " . number_format($isi['sum(jumlah)'], 0, ",", "."); ?>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
<br>

    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Warga Belum Bayar</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                            </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach($belumbayar as $isi){?>
                        <tr>                           
                            <td><?= $no; ?></td>
                            <td><?= $isi['nama'];?></td>
                        </tr>
                        <?php $no++; }?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>
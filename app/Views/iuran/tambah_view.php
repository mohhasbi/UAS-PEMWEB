<div class="container p-5">
    <a href="<?= base_url('iuran');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Data Iuran</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('iuran/add');?>">
                <div class="form-group">
                    <label for="">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Bulan</label>
                    <select name="bulan" class="form-control">
                    <option selected>Pilih Bulan ...</option>
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="">Tahun</label>
                    <input type="number" name="tahun" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Jumlah</label>
                    <input type="number" name="jumlah" class="form-control" required>
                </div>
                <div class="form-group">
                <label>Warga</label>
				    <select class="form-control" name="warga_nik">
                    <?php foreach($getWarga as $isi){
                        echo "<option value=" .$isi['nik']. ">" .$isi['nama']. "</option>";
                    }
                    ?>
				    </select>
			    </div>
                
                </div>
                <button class="btn btn-success">Tambah Warga</button>
            </form>
            
        </div>
    </div>
</div>
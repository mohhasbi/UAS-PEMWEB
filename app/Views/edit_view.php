<div class="container p-5">
    <a href="<?= base_url('warga');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Data Warga : <?= $warga->nik;?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('warga/update');?>">
                <div class="form-group">
                    <label for="">NIK</label>
                    <input type="number" value="<?= $warga->nik;?>" name="nik" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">nama</label>
                    <input type="text" value="<?= $warga->nama;?>" name="nama" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelamin" value="L" checked>
                    <label class="form-check-label" for="L">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelamin" value="P">
                        <label class="form-check-label" for="P">Perempuan</label>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" value="<?= $warga->alamat;?>" name="alamat" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">No Rumah</label>
                    <input type="number" value="<?= $warga->no_rumah;?>" name="no_rumah" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" class="form-control">
                        <option value="1" selected>Aktif</option>
                        <option value="0">Non-aktif</option>
                    </select>
                </div>
                <input type="hidden" value="<?= $warga->id;?>" name="id">
                <button class="btn btn-success">Simpan</button>
            </form>
            
        </div>
    </div>
</div>
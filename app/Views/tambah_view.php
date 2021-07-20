<div class="container p-5">
    <a href="<?= base_url('warga');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Data Warga</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('warga/add');?>">
                <div class="form-group">
                    <label for="">NIK</label>
                    <input type="number" name="nik" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" required>
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
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">No Rumah</label>
                    <input type="text" name="no_rumah" class="form-control" required>
                </div>
                    <input type="hidden" name="status" value="1" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Warga</button>
            </form>
            
        </div>
    </div>
</div>
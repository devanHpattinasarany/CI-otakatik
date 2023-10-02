<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>FILKOM &mdash; Tambah Data Students</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= base_url('students'); ?>" class="btn btn-sm"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah Data Students</h1>
    </div>
     
    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4>Tambah Data / Students</h4>
            </div>
            <div class="card-body col-md-6">
                <!-- mehtd spoofing -->
                <form action="<?= base_url('students'); ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="nama_students">Nama Students *</label>
                        <input type="text" name="nama_students" id="nama_students" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="alias_students">Alias</label>
                        <input type="text" name="alias_students" id="alias_students" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="telepon_students">telepon</label>
                        <input type="text" name="telepon_students" id="telepon_students" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email_students">Email Students</label>
                        <input type="text" name="email_students" id="email_students" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="alamat_students">Alamat Students</label>
                        <input type="text" name="alamat_students" id="alamat_students" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="info_students">Info Students</label>
                        <input type="text" name="info_students" id="info_students" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="kelas_students">Kelas Students</label>
                        <input type="text" name="kelas_students" id="kelas_students" class="form-control">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"> Simpan</i></button>
                        <button type="reset" class="btn btn-secondary">Atur Ulang</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
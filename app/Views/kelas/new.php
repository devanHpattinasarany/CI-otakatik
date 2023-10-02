<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>FILKOM &mdash; Tambah Data Kelas</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= base_url('kelas'); ?>" class="btn btn-sm"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah Data Kelas</h1>
    </div>
     
    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4>Tambah Data / Kelas</h4>
            </div>
            <div class="card-body col-md-6">
                <!-- mehtd spoofing -->
                <form action="<?= base_url('kelas'); ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="nama_kelas">Nama Kelas *</label>
                        <input type="text" name="nama_kelas" id="nama_kelas" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="info_kelas">Info Kelas</label>
                        <input type="text" name="info_kelas" id="info_kelas" class="form-control">
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
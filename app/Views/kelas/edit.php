<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>FILKOM &mdash; Edit Data Kelas</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= base_url('kelas'); ?>" class="btn btn-sm"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Edit Data Kelas</h1>
    </div>
     
    <div class="section-body">

        <div class="card col-md-6">
            <div class="card-header">
                <h4>Edit Data / Kelas</h4>
            </div>
            <div class="card-body">
                <!-- mehtd spoofing -->
                <form action="<?= base_url('kelas/update/' . $kls->id_kelas); ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="nama_kelas">Nama Kelas *</label>
                        <input type="text" name="nama_kelas" value="<?= $kls->nama_kelas; ?>" id="nama_kelas" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email_kelas">Info</label>
                        <input type="text" name="info_kelas" value="<?= $kls->info_kelas; ?>" id="email_kelas" class="form-control">
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
<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>FILKOM &mdash; Edit Data Mahasiswa</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= base_url('mahasiswa'); ?>" class="btn btn-sm"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Edit Data Mahasiswa</h1>
    </div>
     
    <div class="section-body">

        <div class="card col-md-6">
            <div class="card-header">
                <h4>Edit Data / Mahasiswa</h4>
            </div>
            <div class="card-body">
                <!-- mehtd spoofing -->
                <form action="<?= base_url('mahasiswa/' . $mhs->id_mhs); ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="nama_mhs">Nama Mahasiswa *</label>
                        <input type="text" name="nama_mhs" value="<?= $mhs->nama_mhs; ?>" id="nama_mhs" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="npm_mhs">NPM *</label>
                        <input type="text" name="npm_mhs" value="<?= $mhs->npm_mhs; ?>" id="npm_mhs" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email_mhs">Email *</label>
                        <input type="text" name="email_mhs" value="<?= $mhs->email_mhs; ?>" id="email_mhs" class="form-control" required>
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
<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>FILKOM &mdash; Edit Data Students</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= base_url('students'); ?>" class="btn btn-sm"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Edit Data Students</h1>
    </div>
     
    <div class="section-body">

        <div class="card col-md-6">
            <div class="card-header">
                <h4>Edit Data / Students</h4>
            </div>
            <div class="card-body">
                <!-- mehtd spoofing -->
                <form action="<?= base_url('students/update/' . $kls->id_students); ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="nama_students">Nama Students *</label>
                        <input type="text" name="nama_students" value="<?= $kls->nama_students; ?>" id="nama_students" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email_students">Info</label>
                        <input type="text" name="info_students" value="<?= $kls->info_students; ?>" id="email_students" class="form-control">
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
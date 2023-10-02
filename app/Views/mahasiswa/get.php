<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>FILKOM &mdash; Daftar Mahasiswa</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Mahasiswa</h1>
        <div class="section-header-button">
            <a href="<?= base_url('mahasiswa/add'); ?>" class="btn btn-primary btn-sm">Tambah Data</a>
        </div>
    </div>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">x</button>
                <b>Success !</b>
                <?= session()->getFlashdata('success'); ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alrt alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">x</button>
                <b>Error !</b>
                <?= session()->getFlashdata('error'); ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4>Daftar Mahasiswa</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>NPM</th>
                            <th>email</th>
                            <th>aksi</th>
                        </tr>
                        <?php foreach ($mhs as $key => $value) : ?>
                            <tr>
                                <td><?= $key + 1; ?></td>
                                <td><?= $value->nama_mhs; ?></td>
                                <td><?= $value->npm_mhs; ?></td>
                                <td><?= $value->email_mhs; ?></td>
                                <td class="text-center" style="width: 15%;">
                                    <a href="<?= base_url('mahasiswa/edit/' . $value->id_mhs); ?>" class="btn btn-warning btn-sm">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form action="<?= base_url('mahasiswa/' . $value->id_mhs); ?>" method="post" class="d-inline" onsubmit="return confirm('anda yakin ingin menghapus data?')">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
<!-- Header -->
<?= view('Superadmin/template/header') ?>
<title><?= $title ?></title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li id="realtime-clock" class="breadcrumb-item"></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Form Tambah -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header" style="background-color: #2060C2;">
                            <h3 class="card-title" style="color: white;">Tambah Data</h3>
                        </div>
                        <div class="card-body">
                            <!-- Form -->
                            <form action="#" method="POST">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required title="Masukkan nama lengkap kamu!">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                                </div>
                                <div class="form-group">
                                    <label for="whatsapp">Nomor WhatsApp</label>
                                    <input type="text" class="form-control" id="whatsapp" name="whatsapp" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Tambah -->

            <!-- Tabel Data -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Tabel data bisa ditampilkan di sini -->
                </div>
            </div>
            <!-- End Tabel Data -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Footer -->
<?= view('Superadmin/template/footer') ?>

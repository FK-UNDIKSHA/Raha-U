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
                                    <input type="text" class="form-control" id="nama" name="nama" required placeholder="Masukkan nama lengkap kamu!">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email" required placeholder="Masukkan e-mail kamu!">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" required placeholder="Masukkan alamat asli kamu!">
                                </div>
                                <div class="form-group">
                                    <label for="whatsapp">Nomor WhatsApp</label>
                                    <input type="text" class="form-control" id="whatsapp" name="whatsapp" required placeholder="Masukkan nomor WhatsApp yang kamu gunakan!">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required placeholder="Masukkan password kamu!">
                                </div>
                                <div class="form-group">
                                    <label for="konfirmasi_password">Konfirmasi Password</label>
                                    <input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password" required placeholder="Konfirmasi password kamu!">
                                </div>
                                <button type="button" class="btn btn-primary" id="btnSimpan">Simpan</button>
                                <button type="button" class="btn btn-danger" id="btnBatal">Batal</button>
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

<!-- SweetAlert Script -->
<script>
    document.getElementById('btnSimpan').addEventListener('click', function() {
        Swal.fire({
            title: 'Konfirmasi',
            text: 'Apakah Anda yakin ingin menyimpan data?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Ya, Simpan',
            cancelButtonText: 'Tidak, Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Proses penyimpanan data di sini
                // Gantilah `action` pada form Anda dengan URL yang sesuai
                // Misalnya, document.querySelector('form').action = 'proses_simpan.php';
                // document.querySelector('form').submit();
            }
        });
    });

    document.getElementById('btnBatal').addEventListener('click', function() {
        Swal.fire({
            title: 'WARNING',
            text: 'Data yang sudah dimasukkan tidak akan disimpan, anda yakin?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, Batalkan',
            cancelButtonText: 'Tidak, Lanjutkan'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect ke halaman lain atau lakukan tindakan lain saat pembatalan
                window.location.href = '<?php echo site_url('superadmin/pengguna') ?>';
            }
        });
    });
</script>
</body>
</html>
</script>

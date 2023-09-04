<?= view('Superadmin/template/header') ?>
<title><?= $title ?></title>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li id="realtime-clock" class="breadcrumb-item"></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header" style="background-color: #2060C2;">
                            <h1 class="card-title" style="color: white;"><b>Profile Saya</b></h1>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <form action="#">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="form-control" name="nama" value="no data" disabled readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input type="text" class="form-control" name="email" value="no data" disabled readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" name="alamat" value="no data" disabled readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor WhatsApp</label>
                                            <input type="text" class="form-control" name="no_tlp" value="no data" disabled readonly>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header" style="background-color: #2060C2;">
                            <h1 class="card-title" style="color: white;"><b>Ubah Password</b></h1>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <label for="new_password">Password Baru</label>
                                            <input type="password" class="form-control" id="new_password" name="new_password">
                                        </div>
                                        <div class="form-group">
                                            <label for="confirm_password">Konfirmasi Password Baru</label>
                                            <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Ubah Password</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>


<!-- SweetAlert Script -->
<script>
    document.querySelector('form').addEventListener('submit', function(event) {
        event.preventDefault(); // Menghentikan pengiriman form yang standar

        Swal.fire({
            title: 'Konfirmasi',
            text: 'Apakah Anda yakin ingin mengubah password?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Ya, Ubah Password',
            cancelButtonText: 'Tidak, Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Mengirimkan form setelah konfirmasi
                this.submit();
            }
        });
    });
</script>


<?= view('Superadmin/template/footer') ?>
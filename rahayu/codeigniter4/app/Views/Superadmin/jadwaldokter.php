<!-- Header -->
<?= view('Superadmin/template/header') ?>

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

    <!-- Tabel Jadwal Operasional Dokter -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Jadwal Operasional Dokter</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Dokter</th>
                                        <th>Hari Operasional</th>
                                        <th>Jam Operasional</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Isi tabel dengan data jadwal operasional dokter -->
                                    <tr>
                                        <td>Dokter A</td>
                                        <td>Senin - Jumat</td>
                                        <td>08:00 - 17:00</td>
                                    </tr>
                                    <tr>
                                        <td>Dokter B</td>
                                        <td>Senin - Sabtu</td>
                                        <td>09:00 - 18:00</td>
                                    </tr>
                                    <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- login sukses -->
<?= view('Superadmin/template/footer') ?>

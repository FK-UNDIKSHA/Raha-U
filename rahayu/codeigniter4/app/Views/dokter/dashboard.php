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
        
        <!-- Tabel Konsultan -->
        <section class="content">
        <div class="container-fluid">
            <?php if (session()->getFlashdata('warning')) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-triangle me-2"></i><?= session()->getFlashdata('warning') ?>
                    <a href="<?= base_url('publik/myprofile') ?>" class="alert-link stretched-link" id="change-password-link">Klik di sini</a> untuk membuat password baru..
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header" style="background-color: #2060C2;">
                            <h1 class="card-title text-dark"><b>Laporan Kamu</b></h1>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <p class="d-flex justify-content-end"></p>
                            <table id="laporan-dashboard" class="table table-striped table-bordered" style="margin: auto;">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Pasien</th>
                                        <th class="text-center">Keluhan Pasien</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- No Data -->
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    </div><!-- /.container-fluid -->
</div>

    <!-- /.content-header -->


    <!-- Main content -->

    
</div>
<!-- /.content-wrapper -->
<!-- login sukses -->


<?= view('Superadmin/template/footer') ?>

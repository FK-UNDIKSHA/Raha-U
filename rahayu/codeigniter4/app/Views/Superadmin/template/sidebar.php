<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark" style="background-color: #2060C2;">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <a class="d-block text-white">Halo, <?= session()->get('nama') ?></a>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li id="realtime-clock" class="d-block text-white"></li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed; top:0; background-color: #2060C2">
            <!-- Brand Logo -->
            <a class="brand-link mb-2">
                <img src="<?= base_url('assets/img/RAHA-U (Logo).png') ?>" alt="RAHA-U" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">RAHA-U</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <!-- Dashboard menu item -->
                        <li class="nav-item">
                            <a href="<?= base_url('superadmin/dashboard') ?>" class="nav-link">
                                <i class="nav-icon fas fa-house"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('superadmin/jadwal') ?>" class="nav-link">
                                <i class="nav-icon fas fa-clock"></i>
                                <p>
                                    Jadwal Dokter
                                </p>
                            </a>
                        </li>
                        <!-- Pengguna menu item -->
                        <li class="nav-item">
                            <a href="<?= base_url('superadmin/pengguna') ?>" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Pengguna
                                </p>
                            </a>
                        </li>
                        <!-- Keluar menu item -->
                        <li class="nav-item">
                            <a href="<?= base_url('superadmin/profile') ?>" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Profile Saya
                                </p>
                            </a>
                        </li>
                        <!-- Keluar menu item -->
                        <li class="nav-item">
                                <a href="#" class="nav-link" onclick="logoutConfirmation()">
                                    <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Keluar
                                </p>
                                </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- SweetAlert Logout 1 -->
        <script>
            function logoutConfirmation() {
                Swal.fire({
                    title: 'Sudah selesai?',
                    text: "Anda akan keluar dari halaman ini.",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Batal',
                    confirmButtonText: 'Keluar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "<?= base_url('/logout') ?>";
                    }
                })
            }
        </script>

</body>
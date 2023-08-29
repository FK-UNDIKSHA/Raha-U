<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline"></div>
    <!-- Default to the left -->
    <center>
        <strong>Copyright &copy; 2023
            <a href="#">RAHA-U Official Website </a>
        </strong>
    </center>
</footer>



<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/addon/js/adminlte.min.js') ?>"></script>

<!-- realtime addons script -->
<script>
    function realTimeClock() {
        var rtClock = new Date();
        var hours = rtClock.getHours();
        var minutes = rtClock.getMinutes();
        var seconds = rtClock.getSeconds();
        var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        var day = days[rtClock.getDay()];
        var date = rtClock.getDate();
        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        var month = months[rtClock.getMonth()];
        var year = rtClock.getFullYear();

        // menambahkan nol di depan angka < 10
        hours = (hours < 10 ? "0" : "") + hours;
        minutes = (minutes < 10 ? "0" : "") + minutes;
        seconds = (seconds < 10 ? "0" : "") + seconds;

        // menampilkan tanggal dan waktu secara real-time
        document.getElementById('realtime-clock').innerHTML = day + ', ' + date + ' ' + month + ' ' + year + ' ' + hours + ":" + minutes + ":" + seconds;

        setTimeout(realTimeClock, 1000); // memperbarui waktu setiap 1 detik
    }

    realTimeClock(); // memanggil fungsi realTimeClock() untuk pertama kali
</script>



<!-- SweetAlert -->
<!-- login sukses -->
<?php if (session()->getFlashdata('successLogin')) : ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: '<?= session()->getFlashdata('successLogin') ?>',
            showConfirmButton: false,
            timer: 3000
        });
    </script>
<?php endif; ?>
<!-- Konfirmasi logout -->
<script>
    function logoutConfirmation() {
        Swal.fire({
            title: 'PERINGATAN',
            text: "Sesi akan diakhiri.",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#54B435',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Batal',
            confirmButtonText: 'Keluar',
            reverseButtons: true,
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?= base_url('/logout') ?>";
            }
        })
    }
</script>

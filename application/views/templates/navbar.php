<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" style="width: 120px;" class="rounded-circle image-fluid" src="https://lppm.unram.ac.id/wp-content/uploads/2018/07/LOGO-UNRAM-1.png" />
                    <span class="clear">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">Sistem Presensi</span>
                        </a>
                    </span>
                </div>
                <div class="logo-element">
                    UNRAM
                </div>
            </li>
            <li>
                <a href="#"><i class="fa fa-calendar"></i> <span class="nav-label">Absensi Hari Ini</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?= base_url('admin') ?>">Absensi Hari Ini</a></li>
                    <li><a href="<?= base_url('admin/kelolapresensi') ?>">Kelola Absensi</a></li>
                    <li><a href="<?= base_url('admin/cekpresensi') ?>">Periksa Absen Ganda</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Pegawai</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?= base_url('admin/data_pegawai') ?>">Presensi</a></li>
                    <li><a href="<?= base_url('admin/status_pegawai') ?>">Daftar Pegawai</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Opsi Pegawai</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?= base_url('admin/surat_tugas') ?>">Surat Tugas</a></li>
                    <li><a href="<?= base_url('admin/surat_cuti') ?>">Cuti</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-calendar"></i> <span class="nav-label">Opsi Absensi</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?= base_url('admin/uangmakan') ?>">Uang Makan</a></li>
                    <li><a href="<?= base_url('admin/tukin') ?>">Tukin</a></li>
                    <li><a href="<?= base_url('admin/libur') ?>">Hari Libur</a></li>
                    <li><a href="admin/uploadabsen">Upload Absensi</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= base_url('admin/pengaturan') ?>"><i class="fa fa-gears"></i> <span class="nav-label">Pengaturan</span></a>
            </li>
            <li>
                <a href="<?= base_url('admin/backup') ?>"><i class="fa fa-refresh"></i> <span class="nav-label">Cadangkan dan Kembalikan</span></a>
            </li>
        </ul>

    </div>
</nav>
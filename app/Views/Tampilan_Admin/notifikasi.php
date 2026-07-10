<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('css_admin/style_notifikasi_admin.css') ?>">

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('admin') ?>" class="menu-item">
        <i class="fa-solid fa-gauge"></i> Dashboard
    </a>
    <a href="<?= base_url('admin/kelola_user') ?>" class="menu-item">
        <i class="fa-solid fa-users-gear"></i> Kelola User
    </a>
    <a href="<?= base_url('admin/riwayat') ?>" class="menu-item">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat
    </a>
</aside>

<main class="content-area">
    
    <div class="page-header">
        <h1 class="page-title">Notifikasi</h1>
    </div>

    <div class="data-card">
        
        <div class="table-responsive">
            <table class="notification-table">
                <thead>
                    <tr>
                        <th class="col-no">No</th>
                        <th class="col-title">Judul</th>
                        <th class="col-msg">Pesan</th>
                        <th class="col-date">Tanggal</th>
                        <th class="col-status">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class="td-title">Permintaan Donor Baru</td>
                        <td>Ada permintaan donor darah dari RS Bhakti Agung.</td>
                        <td>08 Mei 2025, 10:30 WIB</td>
                        <td>
                            <span class="badge-unread">Belum Dibaca</span>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td class="td-title">Donor Darah Diterima</td>
                        <td>Permintaan donor darah Anda telah diterima.</td>
                        <td>07 Mei 2025, 15:45 WIB</td>
                        <td>
                            <span class="badge-read">Dibaca</span>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td class="td-title">Stok Darah Menipis</td>
                        <td>Stok darah golongan O menipis. Mohon bantu sebarkan informasi.</td>
                        <td>06 Mei 2025, 09:20 WIB</td>
                        <td>
                            <span class="badge-unread">Belum Dibaca</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="pagination-wrapper">
            <div>Total Data: 3 Notifikasi</div>
            <div class="pagination-links">
                <span class="page-nav"><i class="fa-solid fa-chevron-left"></i></span>
                <span class="page-active">1</span>
                <span class="page-nav"><i class="fa-solid fa-chevron-right"></i></span>
            </div>
        </div>

    </div>

</main>
<?= $this->endSection() ?>
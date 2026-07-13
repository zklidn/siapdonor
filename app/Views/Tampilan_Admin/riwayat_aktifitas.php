<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('css_admin/style_riwayat_aktifitas.css') ?>">

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('admin') ?>" class="menu-item">
        <i class="fa-solid fa-gauge"></i> Dashboard
    </a>
    <a href="<?= base_url('admin/kelola_user') ?>" class="menu-item">
        <i class="fa-solid fa-users-gear"></i> Kelola User
    </a>
    <a href="<?= base_url('admin/riwayat') ?>" class="menu-item menu-active">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat
    </a>
</aside>

<main class="content-area">
    <h1 class="page-title">Riwayat Aktivitas</h1>

    <div class="data-card">
        
        <div class="table-responsive">
            <table class="history-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Aktivitas</th>
                        <th>Pengguna</th>
                        <th>Waktu</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php if (!empty($logs)) : ?>
                        <?php 
                            $page = isset($_GET['page_logs']) ? $_GET['page_logs'] : 1;
                            $no = 1 + (5 * ($page - 1));
                        ?>

                        <?php foreach ($logs as $log) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                
                                <td class="td-activity">
                                    <?= esc($log['aktivitas']) ?>
                                </td>
                                
                                <td>
                                    <?= esc($log['nama_pengguna'] ?? 'Sistem / Tidak Diketahui') ?>
                                </td>
                                
                                <td>
                                    <?= date('d M Y H:i', strtotime($log['created_at'])) ?>
                                </td>
                                
                                <td>
                                    <?= esc($log['keterangan'] ?? '-') ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    <?php else : ?>
                        <tr>
                            <td colspan="5" class="empty-state">
                                Belum ada riwayat aktivitas.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div class="pagination-wrapper">
            <div>Total Data: <b><?= esc($totalData) ?></b> aktivitas</div>
            
            <div class="pagination-links">
                <span class="page-nav"><i class="fa-solid fa-chevron-left"></i></span>
                <span class="page-active">1</span>
                <span class="page-nav"><i class="fa-solid fa-chevron-right"></i></span>
                
                </div>
        </div>
        
    </div>
</main>

<?= $this->endSection() ?>
<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('css_admin/style_kelola_user.css') ?>">

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('admin') ?>" class="menu-item">
        <i class="fa-solid fa-gauge"></i> Dashboard
    </a>
    <a href="<?= base_url('admin/kelola_user') ?>" class="menu-item menu-active">
        <i class="fa-solid fa-users-gear"></i> Kelola User
    </a>
    <a href="<?= base_url('admin/riwayat') ?>" class="menu-item">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat
    </a>
</aside>

<main class="content-area">
    <h1 class="page-title">Kelola User</h1>

    <div class="data-card">
        
        <form action="" method="get" class="filter-form">
            
            <div class="filter-group">
                <div class="search-wrapper">
                    <i class="fa-solid fa-magnifying-glass search-icon"></i>
                    <input type="text" name="keyword" value="<?= isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>" placeholder="Cari nama atau email..." class="search-input">
                </div>
                
                <select name="role" onchange="this.form.submit()" class="filter-select">
                    <option value="">Semua Peran</option>
                    <option value="PMI" <?= (isset($_GET['role']) && $_GET['role'] == 'PMI') ? 'selected' : '' ?>>PMI</option>
                    <option value="Rumah Sakit" <?= (isset($_GET['role']) && $_GET['role'] == 'Rumah Sakit') ? 'selected' : '' ?>>Rumah Sakit</option>
                    <option value="Admin" <?= (isset($_GET['role']) && $_GET['role'] == 'Admin') ? 'selected' : '' ?>>Admin</option>
                </select>
                
                <button type="submit" class="btn-search">Cari</button>
            </div>

        </form>

        <div class="table-responsive">
            <table class="user-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Peran</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php if (!empty($users)) : ?>
                        <?php 
                            // Rumus nomor urut halaman
                            $page = isset($_GET['page_users']) ? $_GET['page_users'] : 1;
                            $no = 1 + (5 * ($page - 1));
                        ?>

                        <?php foreach ($users as $u) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td class="td-name"><?= esc($u['nama']) ?></td>
                                <td><?= esc($u['email']) ?></td>
                                <td><?= esc($u['role'] ?? '-') ?></td>
                                
                                <td>
                                    <?php if (isset($u['status']) && $u['status'] == 'Aktif') : ?>
                                        <span class="badge-aktif">Aktif</span>
                                    <?php else : ?>
                                        <span class="badge-nonaktif">Nonaktif</span>
                                    <?php endif; ?>
                                </td>
                                
                                <td class="action-group">
                                    <a href="javascript:void(0);" onclick="konfirmasiHapus('<?= base_url('admin/hapus_user/' . $u['id']) ?>', '<?= esc($u['nama']) ?>')">
                                        <i class="fa-solid fa-trash icon-delete" title="Hapus"></i>
                                    </a>
                                </td>

                            </tr>
                        <?php endforeach; ?>

                    <?php else : ?>
                        <tr>
                            <td colspan="6" class="empty-state">
                                Data user tidak ditemukan.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div class="pagination-wrapper" style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
            <div>Total Data: <b><?= esc($totalData) ?></b> user</div>
            
            <!-- Bungkus pager bawaan CI4 dengan class CSS yang baru kita buat -->
            <div class="gaya-paginasi-ci4">
                <?= $pager->links('users') ?> 
            </div>
        </div>
        
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function konfirmasiHapus(url, namaUser) {
        Swal.fire({
            title: 'Hapus Akun?',
            text: "Apakah Anda yakin ingin menghapus akun " + namaUser + "? Tindakan ini tidak dapat dibatalkan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#8b0000',
            cancelButtonColor: '#6b7280',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    }
</script>

<?= $this->endSection() ?>
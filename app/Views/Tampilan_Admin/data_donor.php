<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<style>
    /* 1. Area Judul & Tombol Tambah */
    .page-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; }
    .page-title { font-size: 24px; font-weight: 700; color: #111827; }
    .btn-tambah { background: #8b0000; color: white; border: none; padding: 10px 20px; border-radius: 8px; font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 8px; transition: 0.2s; }
    .btn-tambah:hover { background: #700000; }

    /* 2. Kotak Utama (Card) */
    .table-card { background: white; border-radius: 12px; border: 1px solid #e5e7eb; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.05); }
    
    /* 3. Area Pencarian & Filter */
    .controls-area { padding: 20px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #e5e7eb; }
    .search-box { position: relative; width: 300px; }
    .search-box i { position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: #9ca3af; }
    .search-input { width: 100%; padding: 10px 10px 10px 40px; border: 1px solid #e5e7eb; border-radius: 8px; outline: none; font-size: 14px; }
    .search-input:focus { border-color: #8b0000; }
    .filter-select { padding: 10px 15px; border: 1px solid #e5e7eb; border-radius: 8px; outline: none; background: white; color: #4b5563; font-size: 14px; cursor: pointer; }

    /* 4. Tabel Data */
    table { width: 100%; border-collapse: collapse; text-align: left; }
    th { background: #f9fafb; padding: 16px 20px; font-size: 13px; font-weight: 600; color: #6b7280; border-bottom: 1px solid #e5e7eb; }
    td { padding: 16px 20px; font-size: 14px; color: #111827; border-bottom: 1px solid #f3f4f6; vertical-align: middle; }
    
    /* Status Badge */
    .badge { padding: 6px 12px; border-radius: 20px; font-size: 12px; font-weight: 600; display: inline-block; text-align: center; min-width: 70px; }
    .badge-aktif { background: #dcfce7; color: #16a34a; }
    .badge-nonaktif { background: #fee2e2; color: #dc2626; }

    /* Aksi (Ikon Mata & Sampah) */
    .action-btns { display: flex; gap: 15px; align-items: center; }
    .btn-view { color: #6b7280; cursor: pointer; transition: 0.2s; font-size: 16px; }
    .btn-view:hover { color: #111827; }
    .btn-delete { color: #dc2626; cursor: pointer; transition: 0.2s; font-size: 16px; }
    .btn-delete:hover { color: #991b1b; }

    /* 5. Pagination (Bawah) */
    .pagination-area { display: flex; justify-content: space-between; align-items: center; padding: 20px; background: white; }
    .pagin-info { font-size: 14px; color: #6b7280; }
    .pagin-buttons { display: flex; gap: 5px; align-items: center; }
    .page-btn { width: 35px; height: 35px; display: flex; justify-content: center; align-items: center; border: 1px solid #e5e7eb; border-radius: 6px; background: white; color: #4b5563; text-decoration: none; font-size: 14px; font-weight: 500; cursor: pointer; transition: 0.2s;}
    .page-btn.active { background: #8b0000; color: white; border-color: #8b0000; }
    .page-btn:hover:not(.active) { background: #f9fafb; }
    .page-dots { color: #6b7280; margin: 0 5px; letter-spacing: 2px; }
</style>

<div class="page-header">
    <h1 class="page-title">Data Donor</h1>
    <button class="btn-tambah"><i class="fa-solid fa-plus"></i> Tambah Donor</button>
</div>

<div class="table-card">
    
    <div class="controls-area">
        <div class="search-box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" class="search-input" placeholder="Cari nama donor...">
        </div>
        <select class="filter-select">
            <option value="">Semua Status</option>
            <option value="aktif">Aktif</option>
            <option value="nonaktif">Nonaktif</option>
        </select>
    </div>

    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kota</th>
                    <th>Gol. Darah</th>
                    <th>Rhesus</th>
                    <th>Status</th>
                    <th>Kontak</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Andi Saputra</td>
                    <td>Makassar</td>
                    <td>O</td>
                    <td>+</td>
                    <td><span class="badge badge-aktif">Aktif</span></td>
                    <td>0810-0456-7800</td>
                    <td>
                        <div class="action-btns">
                            <i class="fa-solid fa-eye btn-view"></i>
                            <i class="fa-solid fa-trash btn-delete"></i>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Siti Nurhaliza</td>
                    <td>Gowa</td>
                    <td>A</td>
                    <td>+</td>
                    <td><span class="badge badge-aktif">Aktif</span></td>
                    <td>0812-3222-3333</td>
                    <td>
                        <div class="action-btns">
                            <i class="fa-solid fa-eye btn-view"></i>
                            <i class="fa-solid fa-trash btn-delete"></i>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Muhammad Rizki</td>
                    <td>Maros</td>
                    <td>B</td>
                    <td>+</td>
                    <td><span class="badge badge-aktif">Aktif</span></td>
                    <td>0813-4444-5555</td>
                    <td>
                        <div class="action-btns">
                            <i class="fa-solid fa-eye btn-view"></i>
                            <i class="fa-solid fa-trash btn-delete"></i>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Fadillah Aulia</td>
                    <td>Makassar</td>
                    <td>AB</td>
                    <td>+</td>
                    <td><span class="badge badge-nonaktif">Nonaktif</span></td>
                    <td>0812-0000-7777</td>
                    <td>
                        <div class="action-btns">
                            <i class="fa-solid fa-eye btn-view"></i>
                            <i class="fa-solid fa-trash btn-delete"></i>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Rudi Hartono</td>
                    <td>Makassar</td>
                    <td>O</td>
                    <td>-</td>
                    <td><span class="badge badge-aktif">Aktif</span></td>
                    <td>0812-8888-9999</td>
                    <td>
                        <div class="action-btns">
                            <i class="fa-solid fa-eye btn-view"></i>
                            <i class="fa-solid fa-trash btn-delete"></i>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="pagination-area">
        <div class="pagin-info">Menampilkan 1 - 5 dari 120 data</div>
        <div class="pagin-buttons">
            <a href="#" class="page-btn active">1</a>
            <a href="#" class="page-btn">2</a>
            <a href="#" class="page-btn">3</a>
            <span class="page-dots">...</span>
            <a href="#" class="page-btn">24</a>
            <a href="#" class="page-btn"><i class="fa-solid fa-chevron-right"></i></a>
        </div>
    </div>

</div>

<?= $this->endSection() ?>
<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('admin') ?>" class="menu-item">
        <i class="fa-solid fa-gauge"></i> Dashboard
    </a>
    <a href="<?= base_url('admin/kelola_user') ?>" class="menu-item">
        <i class="fa-solid fa-users-gear"></i> Kelola User
    </a>
    <a href="<?= base_url('admin/data_donor') ?>" class="menu-item">
        <i class="fa-solid fa-droplet"></i> Data Donor
    </a>
    <a href="<?= base_url('admin/riwayat') ?>"  class="menu-item">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat
    </a>
</aside>

<main class="content-area">
    <h1 style="margin-bottom: 25px; color: #111827;">Kelola User</h1>

    <div style="background: white; border-radius: 12px; border: 1px solid #e5e7eb; padding: 25px;">
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; flex-wrap: wrap; gap: 15px;">
            
            <div style="display: flex; gap: 15px; flex: 1;">
                <div style="position: relative; width: 280px;">
                    <i class="fa-solid fa-magnifying-glass" style="position: absolute; left: 15px; top: 12px; color: #9ca3af;"></i>
                    <input type="text" placeholder="Cari nama user..." style="width: 100%; padding: 10px 15px 10px 40px; border: 1px solid #e5e7eb; border-radius: 8px; outline: none; font-size: 14px; background: #f9fafb;">
                </div>
                
                <select style="padding: 10px 15px; border: 1px solid #e5e7eb; border-radius: 8px; outline: none; font-size: 14px; color: #4b5563; cursor: pointer; background: #f9fafb;">
                    <option>Semua Peran</option>
                    <option>PMI</option>
                    <option>Rumah Sakit</option>
                    <option>Admin</option>
                </select>
            </div>

        </div>

        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px; min-width: 800px;">
                <thead>
                    <tr style="border-bottom: 2px solid #f3f4f6;">
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">No</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Nama</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Email</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Peran</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Instansi</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Status</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #f3f4f6; transition: 0.2s;">
                        <td style="padding: 18px 10px; color: #4b5563;">1</td>
                        <td style="padding: 18px 10px; font-weight: 600; color: #111827;">PMI Makassar</td>
                        <td style="padding: 18px 10px; color: #4b5563;">pmi@makassar.id</td>
                        <td style="padding: 18px 10px; color: #4b5563;">PMI</td>
                        <td style="padding: 18px 10px; color: #4b5563;">PMI Makassar</td>
                        <td style="padding: 18px 10px;">
                            <span style="background: #dcfce7; color: #166534; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Aktif</span>
                        </td>
                        <td style="padding: 18px 10px; display: flex; gap: 15px;">
                            <i class="fa-solid fa-pen-to-square" style="color: #9ca3af; cursor: pointer; font-size: 16px;"></i>
                            <i class="fa-solid fa-trash" style="color: #ef4444; cursor: pointer; font-size: 16px;"></i>
                        </td>
                    </tr>

                    <tr style="border-bottom: 1px solid #f3f4f6; transition: 0.2s;">
                        <td style="padding: 18px 10px; color: #4b5563;">2</td>
                        <td style="padding: 18px 10px; font-weight: 600; color: #111827;">RS Wahidin</td>
                        <td style="padding: 18px 10px; color: #4b5563;">rs@wahidin.id</td>
                        <td style="padding: 18px 10px; color: #4b5563;">Rumah Sakit</td>
                        <td style="padding: 18px 10px; color: #4b5563;">RS Wahidin</td>
                        <td style="padding: 18px 10px;">
                            <span style="background: #dcfce7; color: #166534; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Aktif</span>
                        </td>
                        <td style="padding: 18px 10px; display: flex; gap: 15px;">
                            <i class="fa-solid fa-pen-to-square" style="color: #9ca3af; cursor: pointer; font-size: 16px;"></i>
                            <i class="fa-solid fa-trash" style="color: #ef4444; cursor: pointer; font-size: 16px;"></i>
                        </td>
                    </tr>

                    <tr style="border-bottom: 1px solid #f3f4f6; transition: 0.2s;">
                        <td style="padding: 18px 10px; color: #4b5563;">3</td>
                        <td style="padding: 18px 10px; font-weight: 600; color: #111827;">Admin Utama</td>
                        <td style="padding: 18px 10px; color: #4b5563;">admin@siapdonor.id</td>
                        <td style="padding: 18px 10px; color: #4b5563;">Admin</td>
                        <td style="padding: 18px 10px; color: #4b5563;">Administrator</td>
                        <td style="padding: 18px 10px;">
                            <span style="background: #dcfce7; color: #166534; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Aktif</span>
                        </td>
                        <td style="padding: 18px 10px; display: flex; gap: 15px;">
                            <i class="fa-solid fa-pen-to-square" style="color: #9ca3af; cursor: pointer; font-size: 16px;"></i>
                            <i class="fa-solid fa-trash" style="color: #ef4444; cursor: pointer; font-size: 16px;"></i>
                        </td>
                    </tr>

                    <tr style="border-bottom: 1px solid #f3f4f6; transition: 0.2s;">
                        <td style="padding: 18px 10px; color: #4b5563;">4</td>
                        <td style="padding: 18px 10px; font-weight: 600; color: #111827;">PMI Maros</td>
                        <td style="padding: 18px 10px; color: #4b5563;">pmi@maros.id</td>
                        <td style="padding: 18px 10px; color: #4b5563;">PMI</td>
                        <td style="padding: 18px 10px; color: #4b5563;">PMI Maros</td>
                        <td style="padding: 18px 10px;">
                            <span style="background: #ffedd5; color: #c2410c; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Nonaktif</span>
                        </td>
                        <td style="padding: 18px 10px; display: flex; gap: 15px;">
                            <i class="fa-solid fa-pen-to-square" style="color: #9ca3af; cursor: pointer; font-size: 16px;"></i>
                            <i class="fa-solid fa-trash" style="color: #ef4444; cursor: pointer; font-size: 16px;"></i>
                        </td>
                    </tr>

                    <tr style="border-bottom: 1px solid #f3f4f6; transition: 0.2s;">
                        <td style="padding: 18px 10px; color: #4b5563;">5</td>
                        <td style="padding: 18px 10px; font-weight: 600; color: #111827;">RS Stella Maris</td>
                        <td style="padding: 18px 10px; color: #4b5563;">rs@stella.id</td>
                        <td style="padding: 18px 10px; color: #4b5563;">Rumah Sakit</td>
                        <td style="padding: 18px 10px; color: #4b5563;">RS Stella Maris</td>
                        <td style="padding: 18px 10px;">
                            <span style="background: #dcfce7; color: #166534; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Aktif</span>
                        </td>
                        <td style="padding: 18px 10px; display: flex; gap: 15px;">
                            <i class="fa-solid fa-pen-to-square" style="color: #9ca3af; cursor: pointer; font-size: 16px;"></i>
                            <i class="fa-solid fa-trash" style="color: #ef4444; cursor: pointer; font-size: 16px;"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 25px; font-size: 14px; color: #6b7280; flex-wrap: wrap; gap: 15px;">
            <div>Menampilkan 1 - 5 dari 24 data</div>
            
            <div style="display: flex; gap: 8px; align-items: center;">
                <span style="padding: 6px 10px; cursor: pointer; color: #9ca3af;"><i class="fa-solid fa-chevron-left"></i></span>
                
                <span style="background: #8b0000; color: white; padding: 6px 14px; border-radius: 6px; font-weight: 600; cursor: pointer;">1</span>
                
                <span style="padding: 6px 14px; cursor: pointer; border-radius: 6px; transition: 0.2s;">2</span>
                <span style="padding: 6px 14px; cursor: pointer; border-radius: 6px; transition: 0.2s;">3</span>
                <span style="padding: 6px 14px; cursor: pointer; border-radius: 6px; transition: 0.2s;">4</span>
                <span style="padding: 6px 14px; cursor: pointer; border-radius: 6px; transition: 0.2s;">5</span>
                
                <span style="padding: 6px 10px; cursor: pointer; color: #4b5563;"><i class="fa-solid fa-chevron-right"></i></span>
            </div>
        </div>
        
    </div>
</main>

<?= $this->endSection() ?>
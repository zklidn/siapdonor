<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('pmi') ?>" class="menu-item">
        <i class="fa-solid fa-house"></i> Dashboard
    </a>
    <a href="<?= base_url('pmi/data_pendonor') ?>" class="menu-item menu-active">
        <i class="fa-solid fa-users"></i> Data Pendonor
    </a>
    <a href="<?= base_url('pmi/stok_darah') ?>" class="menu-item">
        <i class="fa-solid fa-droplet"></i> Stok Darah
    </a>
    <a href="<?= base_url('pmi/permintaan_darah') ?>" class="menu-item">
        <i class="fa-solid fa-file-invoice"></i> Permintaan Darah
    </a>
    <a href="<?= base_url('pmi/riwayat_donor') ?>" class="menu-item">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat Donor
    </a>
    <a href="<?= base_url('pmi/laporan') ?>" class="menu-item">
        <i class="fa-solid fa-file-lines"></i> Laporan
    </a>
</aside>

<main class="content-area">
    <div style="margin-bottom: 25px;">
        <div style="font-size: 13px; color: #6b7280; margin-bottom: 5px;">
            <a href="<?= base_url('pmi/data_pendonor') ?>" style="color: #6b7280; text-decoration: none;">Data Pendonor</a> 
            <i class="fa-solid fa-chevron-right" style="font-size: 10px; margin: 0 5px;"></i> 
            <span style="color: #111827; font-weight: 600;">Tambah Pendonor</span>
        </div>
        <h1 style="color: #111827; font-size: 24px;">Formulir Tambah Pendonor Baru</h1>
    </div>

    <div style="background: white; border-radius: 12px; border: 1px solid #e5e7eb; padding: 30px;">
        <form action="<?= base_url('pmi/simpan_donor') ?>" method="POST">
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 30px;">
                
                <div>
                    <h3 style="font-size: 16px; color: #111827; margin-bottom: 20px; border-bottom: 2px solid #f3f4f6; padding-bottom: 10px;">
                        <i class="fa-solid fa-user" style="color: #8b0000; margin-right: 8px;"></i>Informasi Pribadi
                    </h3>

                    <div style="margin-bottom: 18px;">
                        <label style="font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px; display: block;">Nomor Induk Kependudukan (NIK)</label>
                        <input type="text" name="nik" placeholder="Masukkan 16 digit NIK..." style="width: 100%; padding: 11px 15px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none; background: #f9fafb;">
                    </div>

                    <div style="margin-bottom: 18px;">
                        <label style="font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px; display: block;">Nama Lengkap</label>
                        <input type="text" name="nama" placeholder="Masukkan nama lengkap..." style="width: 100%; padding: 11px 15px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none; background: #f9fafb;">
                    </div>

                    <div style="margin-bottom: 18px; display: flex; gap: 15px;">
                        <div style="flex: 1;">
                            <label style="font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px; display: block;">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" placeholder="Kota lahir..." style="width: 100%; padding: 11px 15px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none; background: #f9fafb;">
                        </div>
                        <div style="flex: 1;">
                            <label style="font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px; display: block;">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" style="width: 100%; padding: 10px 15px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none; background: #f9fafb; color: #4b5563;">
                        </div>
                    </div>

                    <div style="margin-bottom: 18px;">
                        <label style="font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px; display: block;">Jenis Kelamin</label>
                        <div style="display: flex; gap: 20px; padding: 10px 0;">
                            <label style="font-size: 14px; color: #4b5563; cursor: pointer; display: flex; align-items: center; gap: 6px;">
                                <input type="radio" name="jenis_kelamin" value="L" style="accent-color: #8b0000;"> Laki-laki
                            </label>
                            <label style="font-size: 14px; color: #4b5563; cursor: pointer; display: flex; align-items: center; gap: 6px;">
                                <input type="radio" name="jenis_kelamin" value="P" style="accent-color: #8b0000;"> Perempuan
                            </label>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 style="font-size: 16px; color: #111827; margin-bottom: 20px; border-bottom: 2px solid #f3f4f6; padding-bottom: 10px;">
                        <i class="fa-solid fa-heart-pulse" style="color: #8b0000; margin-right: 8px;"></i>Data Medis & Wilayah
                    </h3>

                    <div style="margin-bottom: 18px; display: flex; gap: 15px;">
                        <div style="flex: 1;">
                            <label style="font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px; display: block;">Golongan Darah</label>
                            <select name="golongan_darah" style="width: 100%; padding: 11px 15px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none; background: #f9fafb; color: #4b5563; cursor: pointer;">
                                <option value="">Pilih</option>
                                <option value="A">A</option><option value="B">B</option>
                                <option value="O">O</option><option value="AB">AB</option>
                            </select>
                        </div>
                        <div style="flex: 1;">
                            <label style="font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px; display: block;">Rhesus</label>
                            <select name="rhesus" style="width: 100%; padding: 11px 15px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none; background: #f9fafb; color: #4b5563; cursor: pointer;">
                                <option value="+">+</option>
                                <option value="-">-</option>
                            </select>
                        </div>
                    </div>

                    <div style="margin-bottom: 18px;">
                        <label style="font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px; display: block;">Kecamatan (Kota Palu)</label>
                        <select name="kecamatan" style="width: 100%; padding: 11px 15px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none; background: #f9fafb; color: #4b5563; cursor: pointer;">
                            <option value="">Pilih Kecamatan</option>
                            <option value="Palu Barat">Palu Barat</option><option value="Palu Timur">Palu Timur</option>
                            <option value="Palu Selatan">Palu Selatan</option><option value="Palu Utara">Palu Utara</option>
                            <option value="Mantikulore">Mantikulore</option><option value="Tatanga">Tatanga</option>
                            <option value="Ulujadi">Ulujadi</option><option value="Tawaeli">Tawaeli</option>
                        </select>
                    </div>

                    <div style="margin-bottom: 18px;">
                        <label style="font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px; display: block;">No. Telepon / WhatsApp</label>
                        <input type="text" name="kontak" placeholder="Contoh: 0812xxxx..." style="width: 100%; padding: 11px 15px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none; background: #f9fafb;">
                    </div>

                    <div style="margin-bottom: 18px;">
                        <label style="font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px; display: block;">Status Keaktifan</label>
                        <select name="status" style="width: 100%; padding: 11px 15px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none; background: #f9fafb; color: #4b5563; cursor: pointer;">
                            <option value="Aktif">Aktif (Bisa mendonor)</option>
                            <option value="Nonaktif">Nonaktif (Ditangguhkan)</option>
                        </select>
                    </div>
                </div>

            </div>

            <div style="display: flex; justify-content: flex-end; gap: 15px; border-top: 1px solid #e5e7eb; padding-top: 25px;">
                <a href="<?= base_url('pmi/data_pendonor') ?>" style="background: white; color: #4b5563; border: 1px solid #e5e7eb; padding: 10px 25px; border-radius: 8px; font-weight: 600; text-decoration: none; font-size: 14px; text-align: center; transition: 0.2s;">
                    Batal
                </a>
                <button type="submit" style="background: #8b0000; color: white; border: none; padding: 10px 30px; border-radius: 8px; font-weight: 600; font-size: 14px; cursor: pointer; transition: 0.2s;">
                    Simpan Data Donor
                </button>
            </div>

        </form>
    </div>
</main>

<?= $this->endSection() ?>
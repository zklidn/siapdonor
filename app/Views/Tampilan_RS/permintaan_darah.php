<?= $this->include('layout/header') ?> <style>

    .page-header { 
        margin-bottom: 30px; 
    }
    .page-header h1 { 
        font-size: 26px; 
        font-weight: 700; 
        color: #111827; 
        margin-bottom: 4px; 
    }
    .page-header p { 
        font-size: 14px; 
        color: #6b7280; 
    }

    /* CARD CONTAINER FORM */
    .form-card {
        background: #ffffff;
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.02);
        border: 1px solid #e5e7eb;
        max-width: 800px;
    }

    /* GRID UNTUK FIELD FORM */
    .form-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        margin-bottom: 25px;
    }
    .form-group-full {
        grid-column: span 2;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }
    .form-group label {
        font-size: 14px;
        font-weight: 600;
        color: #374151;
    }
    .form-control {
        width: 100%;
        padding: 12px 14px;
        border: 1.5px solid #e5e7eb;
        border-radius: 10px;
        font-size: 14px;
        color: #1f2937;
        background-color: #fff;
        outline: none;
        transition: border-color 0.2s, box-shadow 0.2s;
    }
    .form-control:focus {
        border-color: #8b0000;
        box-shadow: 0 0 0 3px rgba(139, 0, 0, 0.1);
    }
    textarea.form-control {
        resize: vertical;
        min-height: 100px;
    }

    /* TOMBOL AKSI DI BAWAH */
    .form-actions {
        display: flex;
        justify-content: flex-end;
        gap: 12px;
        border-top: 1px solid #f3f4f6;
        padding-top: 20px;
    }
    .btn {
        padding: 12px 24px;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.2s;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    .btn-cancel {
        background: #f3f4f6;
        color: #4b5563;
        border: 1px solid #e5e7eb;
    }
    .btn-cancel:hover {
        background: #e5e7eb;
    }
    .btn-submit {
        background: #8b0000;
        color: white;
        border: none;
        box-shadow: 0 4px 10px rgba(139, 0, 0, 0.15);
    }
    .btn-submit:hover {
        background: #6b0000;
        transform: translateY(-1px);
    }
</style>

<div class="page-header">
    <h1>Form Permintaan Darah</h1>
    <p>Silakan isi data pasien dan detail kebutuhan komponen darah untuk diajukan ke pihak PMI.</p>
</div>

<div class="form-card">
    <form action="#" method="POST">
        
        <div class="form-grid">
            <div class="form-group">
                <label for="nama_pasien">Nama Lengkap Pasien</label>
                <input type="text" id="nama_pasien" name="nama_pasien" class="form-control" placeholder="Masukkan nama pasien" required>
            </div>

            <div class="form-group">
                <label for="no_rm">Nomor Rekam Medis (No. RM)</label>
                <input type="text" id="no_rm" name="no_rm" class="form-control" placeholder="Contoh: RM-001234" required>
            </div>

            <div class="form-group">
                <label for="gol_darah">Golongan Darah</label>
                <select id="gol_darah" name="gol_darah" class="form-control" required>
                    <option value="">Pilih Golongan Darah</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>
            </div>

            <div class="form-group">
                <label for="rhesus">Rhesus</label>
                <select id="rhesus" name="rhesus" class="form-control" required>
                    <option value="+">+</option>
                    <option value="-">-</option>
                </select>
            </div>

            <div class="form-group">
                <label for="komponen">Komponen Darah</label>
                <select id="komponen" name="komponen" class="form-control" required>
                    <option value="">Pilih Komponen</option>
                    <option value="WB">Whole Blood (Darah Lengkap)</option>
                    <option value="PRC">Packed Red Cells</option>
                    <option value="TC">Thrombocyte Concentrate</option>
                    <option value="FFP">Fresh Frozen Plasma</option>
                </select>
            </div>

            <div class="form-group">
                <label for="jumlah_kantong">Jumlah Kebutuhan (Kantong)</label>
                <input type="number" id="jumlah_kantong" name="jumlah_kantong" class="form-control" min="1" placeholder="Contoh: 2" required>
            </div>

            <div class="form-group">
                <label for="urgensi">Tingkat Urgensi</label>
                <select id="urgensi" name="urgensi" class="form-control" required>
                    <option value="Normal">Normal / Terencana</option>
                    <option value="Darurat">Darurat (Cepat)</option>
                    <option value="Sangat Darurat">Sangat Darurat (A+B / Langsung)</option>
                </select>
            </div>

            <div class="form-group">
                <label for="tanggal_butuh">Batas Waktu Dibutuhkan</label>
                <input type="datetime-local" id="tanggal_butuh" name="tanggal_butuh" class="form-control" required>
            </div>

            <div class="form-group form-group-full">
                <label for="keterangan">Keterangan Klinis / Diagnosis Medis</label>
                <textarea id="keterangan" name="keterangan" class="form-control" placeholder="Tulis alasan kebutuhan transfusi darah (misal: Pasien Operasi Sesar, Thalassemia, dll)"></textarea>
            </div>
        </div>

        <div class="form-actions">
            <a href="#" class="btn btn-cancel">Batal</a>
            <button type="submit" class="btn btn-submit">
                <i class="fa-solid fa-paper-plane"></i> Kirim ke PMI
            </button>
        </div>

    </form>
</div>

<?= $this->include('layout/footer') ?> ```
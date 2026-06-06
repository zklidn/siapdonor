<style>
    .modal-overlay {
        position: fixed; top: 0; left: 0; width: 100%; height: 100%;
        background: rgba(0, 0, 0, 0.4); backdrop-filter: blur(3px);
        display: flex; justify-content: center; align-items: center;
        z-index: 9999; opacity: 0; visibility: hidden; transition: 0.3s ease;
    }
    .modal-overlay.show { opacity: 1; visibility: visible; }
    
    .modal-box {
        background: white; padding: 30px; border-radius: 16px;
        width: 100%; max-width: 550px;
        transform: translateY(-20px) scale(0.95); transition: 0.3s ease;
        box-shadow: 0 10px 40px rgba(0,0,0,0.1);
    }
    .modal-overlay.show .modal-box { transform: translateY(0) scale(1); }
    
    .form-label { display: block; font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px; }
    .form-input { width: 100%; padding: 12px 15px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; background: #f9fafb; outline: none; transition: 0.2s; color: #111827; }
    .form-input:focus { border-color: #8b0000; box-shadow: 0 0 0 3px rgba(139,0,0,0.1); background: white; }
    
    select.form-input { appearance: none; background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%236b7280' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e"); background-repeat: no-repeat; background-position: right 15px center; background-size: 16px; cursor: pointer; }
</style>

<div id="modalTambah" class="modal-overlay">
    <div class="modal-box">
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
            <h3 style="font-size: 18px; font-weight: 700; color: #111827;">Tambah Data Donor</h3>
            <i class="fa-solid fa-xmark" style="color: #9ca3af; font-size: 20px; cursor: pointer; padding: 5px;" onclick="closeModalTambah()"></i>
        </div>

        <form action="/donor/tambah" method="POST">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 10px;">
                
                <div style="grid-column: span 2;">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-input" placeholder="Masukkan nama lengkap donor" required>
                </div>

                <div>
                    <label class="form-label">Kota</label>
                    <input type="text" name="kota" class="form-input" placeholder="Contoh: Makassar" required>
                </div>

                <div>
                    <label class="form-label">Nomor Kontak</label>
                    <input type="text" name="kontak" class="form-input" placeholder="Contoh: 081234567890" required>
                </div>

                <div>
                    <label class="form-label">Gol. Darah</label>
                    <select name="gol_darah" class="form-input" required>
                        <option value="" disabled selected hidden>Pilih Gol. Darah</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                </div>

                <div>
                    <label class="form-label">Rhesus</label>
                    <select name="rhesus" class="form-input" required>
                        <option value="" disabled selected hidden>Pilih Rhesus</option>
                        <option value="+">Positif (+)</option>
                        <option value="-">Negatif (-)</option>
                    </select>
                </div>
            </div>

            <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 30px;">
                <button type="button" onclick="closeModalTambah()" style="background: white; color: #4b5563; border: 1px solid #e5e7eb; padding: 10px 20px; border-radius: 8px; font-weight: 600; cursor: pointer; transition: 0.2s;">Batal</button>
                <button type="submit" style="background: #8b0000; color: white; border: none; padding: 10px 20px; border-radius: 8px; font-weight: 600; cursor: pointer; transition: 0.2s;">Simpan Data</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openModalTambah() { document.getElementById('modalTambah').classList.add('show'); }
    function closeModalTambah() { document.getElementById('modalTambah').classList.remove('show'); }
</script>
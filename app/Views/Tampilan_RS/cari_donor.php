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

    /* KOTAK FILTER PENCARIAN */
    .filter-card {
        background: #ffffff;
        padding: 24px;
        border-radius: 16px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.02);
        border: 1px solid #e5e7eb;
        margin-bottom: 30px;
    }
    .filter-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr) auto;
        gap: 16px;
        align-items: flex-end;
    }
    .filter-group {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }
    .filter-group label {
        font-size: 13px;
        font-weight: 600;
        color: #4b5563;
    }
    .form-select, .form-input {
        width: 100%;
        padding: 12px 14px;
        border: 1.5px solid #e5e7eb;
        border-radius: 10px;
        font-size: 14px;
        color: #1f2937;
        background-color: #fff;
        outline: none;
        transition: border-color 0.2s;
    }
    .form-select:focus, .form-input:focus {
        border-color: #8b0000;
    }

    .btn-search {
        background: #8b0000;
        color: white;
        padding: 12px 24px;
        border: none;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: 0.2s;
        height: 47px;
    }
    .btn-search:hover {
        background: #6b0000;
    }

    /* KOTAK HASIL PENCARIAN */
    .results-card {
        background: #ffffff;
        padding: 24px;
        border-radius: 16px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.02);
        border: 1px solid #e5e7eb;
    }
    .results-title {
        font-size: 16px;
        font-weight: 700;
        color: #111827;
        margin-bottom: 20px;
    }

    /* Tabel Hasil */
    .results-table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
    }
    .results-table th {
        font-size: 13px;
        font-weight: 600;
        color: #4b5563;
        padding: 14px 16px;
        background: #f9fafb;
        border-bottom: 1px solid #e5e7eb;
    }
    .results-table td {
        padding: 14px 16px;
        font-size: 14px;
        color: #374151;
        border-bottom: 1px solid #f3f4f6;
        vertical-align: middle;
    }

    /* Badge Golongan Darah Bulat Merah Khas Desainmu */
    .blood-badge {
        background: #fee2e2;
        color: #8b0000;
        font-weight: 700;
        padding: 4px 10px;
        border-radius: 6px;
        font-size: 13px;
        border: 1px solid #fca5a5;
    }

    /* Badge Status Ter sedia */
    .status-badge {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        background: #d1fae5;
        color: #059669;
        display: inline-block;
    }

    /* Tombol Kontak (Telepon & WA) */
    .action-buttons {
        display: flex;
        gap: 8px;
    }
    .btn-contact {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        font-size: 14px;
        transition: 0.2s;
    }
    .btn-phone { background: #fee2e2; color: #8b0000; }
    .btn-phone:hover { background: #fca5a5; }
    .btn-wa { background: #d1fae5; color: #059669; }
    .btn-wa:hover { background: #a7f3d0; }

    /* Pagination */
    .pagination-container {
        display: flex;
        justify-content: flex-end;
        margin-top: 20px;
    }
    .pagination {
        display: flex;
        gap: 5px;
        list-style: none;
    }
    .page-link {
        padding: 8px 14px;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        color: #4b5563;
        text-decoration: none;
        font-size: 13px;
        font-weight
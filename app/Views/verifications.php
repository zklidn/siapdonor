<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiapDonor - Verifikasi Berhasil</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; }
        body { background-color: #f9fafb; display: flex; justify-content: center; align-items: center; min-height: 100vh; padding: 20px; }
        .auth-card { background-color: #ffffff; width: 100%; max-width: 420px; padding: 50px 32px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05); text-align: center; }
        .success-icon { color: #22c55e; font-size: 60px; margin-bottom: 20px; }
        .title { font-size: 22px; font-weight: 700; color: #111827; margin-bottom: 10px; }
        .message { font-size: 14px; color: #4b5563; margin-bottom: 30px; line-height: 1.5; }
        .loader { border: 3px solid #f3f3f3; border-top: 3px solid #8b0000; border-radius: 50%; width: 24px; height: 24px; animation: spin 1s linear infinite; margin: 0 auto 10px auto; }
        @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
        .redirect-text { font-size: 12px; color: #9ca3af; }
    </style>
</head>
<body>
    <div class="auth-card">
        <i class="fa-solid fa-circle-check success-icon"></i>
        <h2 class="title">Verifikasi Berhasil!</h2>
        <p class="message">Akun Anda telah berhasil diverifikasi.<br>Anda akan diarahkan ke dashboard.</p>
        <div class="loader"></div>
        <div class="redirect-text">Mengalihkan...</div>
    </div>
    <script>
        setTimeout(function () {
            window.location.href = "<?= base_url('/admin') ?>";
        }, 2000); 
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SIMAM - Sistem Informasi Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Animasi CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #0066cc, #003366);
            color: #fff;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .card {
            background: #fff;
            color: #333;
            border-radius: 20px;
            padding: 2.5rem 2rem;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 0.5rem 1.2rem rgba(0,0,0,0.2);
            animation: fadeInUp 1s ease forwards;
            opacity: 0;
            transform: translateY(30px);
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .btn-lg {
            padding: 0.75rem 1.25rem;
            font-size: 1.1rem;
        }

        footer {
            font-size: 0.85rem;
            color: #6c757d;
            margin-top: 2rem;
        }
    </style>
</head>
<body>

    <div class="card text-center">
        <h3 class="mb-3 fw-bold text-primary">Selamat Datang di SIMAM</h3>
        <p class="mb-4 text-muted">Sistem Informasi Manajemen Mahasiswa</p>

        <div class="d-grid gap-3 mb-4">
            <a href="login_mahasiswa.php" class="btn btn-primary btn-lg"><i class="bi bi-person-fill me-2"></i> Login Mahasiswa</a>
            <a href="login_admin.php" class="btn btn-danger btn-lg"><i class="bi bi-person-gear me-2"></i> Login Admin</a>
        </div>

        <footer>
            &copy; <?= date('Y') ?> SIMAM - FTI Kampus
        </footer>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

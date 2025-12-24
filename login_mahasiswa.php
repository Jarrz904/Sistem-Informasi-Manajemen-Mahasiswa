<?php
session_start();
include 'config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST['npm'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE npm='$npm' AND password='$password'");
    $cek = mysqli_num_rows($query);

    if ($cek > 0) {
        $_SESSION['npm'] = $npm;
        header("Location: mahasiswa/dashboard.php");
        exit;
    } else {
        $message = "Login gagal! NPM atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Mahasiswa - SIMAM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #2193b0, #6dd5ed);
            height: 100vh;
            overflow: hidden;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .login-card {
            width: 100%;
            max-width: 400px;
            margin: auto;
            border-radius: 20px;
            animation: slideIn 0.8s ease;
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .card-header {
            background-color: #ffffff;
            border-bottom: none;
            text-align: center;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-primary {
            border-radius: 10px;
        }

        .alert {
            font-size: 0.9rem;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center">
    <div class="card shadow login-card p-4 bg-white">
        <div class="card-header">
            <h4 class="fw-bold text-primary">Login Mahasiswa</h4>
            <p class="text-muted small">Sistem Informasi Mahasiswa (SIMAM)</p>
        </div>
        <div class="card-body">
            <?php if (isset($message)): ?>
                <div class="alert alert-danger"><?= $message ?></div>
            <?php endif; ?>
            <form method="POST">
                <div class="mb-3">
                    <label for="npm" class="form-label">NPM</label>
                    <input type="text" name="npm" id="npm" class="form-control" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <button class="btn btn-primary w-100">Login</button>
                <div class="text-center mt-3">
                    <a href="index.php" class="text-decoration-none text-secondary">← Kembali ke Beranda</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

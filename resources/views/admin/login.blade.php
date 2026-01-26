<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Travel Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            /* Nền gradient kết hợp hình ảnh du lịch mờ */
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                        url('https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?q=80&w=2021&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
        }
        .login-card {
            border: none;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        }
        .form-control {
            border-radius: 10px;
            padding: 12px 15px;
            border: 1px solid #ddd;
        }
        .form-control:focus {
            box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.25);
            border-color: #0d6efd;
        }
        .btn-login {
            border-radius: 10px;
            padding: 12px;
            font-weight: 600;
            background: #2563eb;
            border: none;
            transition: all 0.3s ease;
        }
        .btn-login:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
        }
        .brand-logo {
            color: #2563eb;
            font-weight: 800;
            letter-spacing: -1px;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

<div class="card login-card p-4" style="width: 400px;">
    <div class="card-body">
        <div class="text-center mb-4">
            <h2 class="brand-logo mb-1">TRAVEL.ADMIN</h2>
            <p class="text-muted small">Vui lòng đăng nhập để quản lý tour</p>
        </div>

        <form method="POST" action="/admin/login">
            @csrf
            
            <div class="mb-3">
                <label class="form-label small fw-bold">Email</label>
                <input type="email" name="email" class="form-control" placeholder="admin@travel.com" required>
            </div>

            <div class="mb-4">
                <label class="form-label small fw-bold">Mật khẩu</label>
                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
            </div>

            <div class="d-flex justify-content-between mb-4 mt-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember">
                    <label class="form-check-label small text-muted" for="remember">Ghi nhớ</label>
                </div>
                <a href="#" class="small text-decoration-none">Quên mật khẩu?</a>
            </div>

            <button type="submit" class="btn btn-primary btn-login w-100">Đăng nhập ngay</button>

            @error('email')
                <div class="text-danger mt-3 small text-center">{{ $message }}</div>
            @enderror
        </form>
    </div>
</div>

</body>
</html>
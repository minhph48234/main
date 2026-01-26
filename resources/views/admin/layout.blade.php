<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Quản trị hệ thống - TravelGo')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { font-family: 'Lexend', sans-serif; background-color: #f4f7fa; color: #334155; }
        .admin-wrapper { min-height: 100vh; padding-top: 40px; padding-bottom: 40px; }
        
        /* Sidebar Styling */
        .sidebar-card { border: none; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .nav-link-admin { 
            display: flex; align-items: center; padding: 12px 18px; 
            color: #64748b; text-decoration: none; border-radius: 12px;
            transition: all 0.3s ease; margin-bottom: 8px; font-weight: 500;
        }
        .nav-link-admin i { width: 25px; font-size: 1.1rem; }
        .nav-link-admin:hover, .nav-link-admin.active { 
            background: #2563eb; color: #fff !important; transform: translateX(5px);
        }

        /* Main Content Styling */
        .main-content-card { 
            border: none; border-radius: 24px; background: #fff;
            box-shadow: 0 10px 40px rgba(0,0,0,0.03); padding: 35px;
        }
        .section-title { color: #2563eb; text-transform: uppercase; letter-spacing: 1px; font-weight: 700; font-size: 0.85rem; }
    </style>
</head>
<body>

@include('clients.blocks.header')

<div class="container-fluid admin-wrapper">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-3">
                <div class="sidebar-container rounded p-4 bg-white shadow-sm sticky-top" style="top: 100px;">
                    @include('admin.sidebar')
                </div>
            </div>

            <main class="col-lg-9">
                <div class="p-4 main-content-card bg-white rounded-4 shadow-sm">
                    {{-- Quan trọng: Phải có ID này để AJAX nhận diện vùng cần thay đổi nội dung --}}
                    <div id="ajax-content-wrapper">
                        <div class="mb-4">
                            <h1 class="h3 fw-bold">@yield('content_title')</h1>
                            <hr>
                        </div>
                        
                        <div id="dynamic-content">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

@include('clients.blocks.footer')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Tugas PWL - Rizka' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #e8f0ec;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-image: radial-gradient(circle at top left, #f3f8f5 0%, transparent 40%),
                              radial-gradient(circle at bottom right, #dbe9e1 0%, transparent 40%);
        }
        .text-nature { color: #436d50; }
        .bg-nature { background-color: #436d50; color: white; }
        .btn-nature { background-color: #436d50; color: white; border-radius: 8px; font-weight: 500; }
        .btn-nature:hover { background-color: #365941; color: white; }
        .btn-outline-nature { border: 1px solid #436d50; color: #436d50; border-radius: 8px; font-weight: 500; background: white; }
        .btn-outline-nature:hover { background-color: #f0f5f2; color: #436d50; }
        
        .card-custom { border: none; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.03); }
        .form-control, .form-select { border-radius: 8px; border: 1px solid #dee2e6; padding: 10px 15px; }
        .form-control:focus, .form-select:focus { border-color: #436d50; box-shadow: 0 0 0 0.2rem rgba(67, 109, 80, 0.25); }
        
        .info-panel { background-color: #f1f6f3; border-radius: 12px; }
        .tips-box { background-color: #e7efe9; border-radius: 8px; padding: 12px; }
    </style>
</head>
<body>

    <div class="container py-4 d-flex flex-column" style="min-height: 100vh;">
        <x-navbar />

        <main class="flex-grow-1 my-4">
            @yield('content')
        </main>

        <x-footer />
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
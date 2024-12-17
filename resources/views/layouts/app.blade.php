<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi PLN Tuntungan')</title>
    <!-- Tambahkan link ke file CSS atau framework seperti Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Warna Navbar */
        .bg-custom {
            background-color: #007bff !important; /* Ganti dengan warna yang diinginkan */
        }

        /* Memastikan Navbar tetap di atas dan tidak tertutup konten */
        body {
            padding-top: 70px; /* Memberikan ruang untuk navbar yang fixed */
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000; /* Agar navbar tetap di atas */
        }

        /* Warna Footer */
        footer {
            position: relative;
            z-index: 0; /* Memastikan footer tidak terhalang navbar */
        }
    </style>
</head>
<body>
    <!-- Header / Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PLN Tuntungan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('golongan*') ? 'active' : '' }}" href="{{ route('golongan.index') }}">Daftar Golongan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('pelanggan*') ? 'active' : '' }}" href="{{ route('pelanggan.index') }}">Daftar Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('users*') ? 'active' : '' }}" href="{{ route('users.index') }}">Daftar Users</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-custom text-white text-center py-3 mt-4">
        <p>&copy; {{ date('Y') }} PLN Tuntungan. All Rights Reserved.</p>
    </footer>

    <!-- Tambahkan script seperti Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

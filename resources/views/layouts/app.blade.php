<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FutZone Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Sidebar -->
    <div class="flex">
        <div class="w-64 bg-white h-screen shadow">
            <div class="text-2xl font-bold p-6 border-b">FutZone</div>
            <ul class="p-4 space-y-2">
                <li><a href="{{ url('/dashboard') }}" class="block p-2 hover:bg-green-200 rounded">🏠 Dashboard</a></li>
                <li><a href="{{ url('/customer') }}" class="block p-2 hover:bg-green-200 rounded">👥 Data Customer</a></li>
                <li><a href="{{ url('/lapangan') }}" class="block p-2 hover:bg-green-200 rounded">🏟️ Data Lapangan</a></li>
                <li><a href="{{ url('/transaksi') }}" class="block p-2 hover:bg-green-200 rounded">📅 Transaksi / Book</a></li>
                <li><a href="{{ url('/laporan') }}" class="block p-2 hover:bg-green-200 rounded">📄 Laporan</a></li>
                <li><a href="{{ url('/ubah-password') }}" class="block p-2 hover:bg-green-200 rounded">🔑 Ubah Password</a></li>
                <li><a href="{{ url('/logout') }}" class="block p-2 hover:bg-green-200 rounded text-red-600">🚪 Logout</a></li>
            </ul>

            <div class="absolute bottom-4 w-full text-center text-xs px-4 text-gray-500">
                praktis, mudah, bisa booking dimanapun futzone.
            </div>
        </div>

        <!-- Content -->
        <div class="flex-1">
            <!-- Navbar -->
            <div class="bg-white shadow p-4 flex justify-between items-center">
                <span></span>
                <div class="text-sm">ADMIN FOTZONE</div>
            </div>

            <!-- Main Content -->
            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>

</body>
</html>

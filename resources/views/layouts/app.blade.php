<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    @vite('resources/css/app.css')
</head>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<body class="bg-gray-100">

<div class="flex h-screen">

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Main -->
    <div class="flex-1 flex flex-col ml-64">

        <!-- Navbar -->
        @include('layouts.navbar')

        <!-- Content -->
        <div class="p-6 flex-1 overflow-y-auto">
            @yield('content')
        </div>

        <!-- Footer -->
        @include('layouts.footer')

    </div>

</div>

</body>
</html>
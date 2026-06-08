<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Sistem Monitoring Mini Market</title>

    @vite('resources/css/app.css')

</head>

<body class="min-h-screen bg-gradient-to-br from-slate-100 via-white to-blue-100 flex items-center justify-center">

    <div class="w-full max-w-md px-6">

        {{-- CARD LOGIN --}}
        <div class="bg-white rounded-2xl shadow-2xl p-8">

            {{-- HEADER --}}
            <div class="text-center mb-8">

                <div class="w-20 h-20 mx-auto mb-4 bg-blue-600 rounded-2xl flex items-center justify-center">

                    <span class="text-3xl text-white font-bold">
                        J
                    </span>

                </div>

                <h1 class="text-3xl font-bold text-gray-800">

                    Mini Market

                </h1>

                <p class="text-gray-500 mt-2">

                    Sistem Monitoring Transaksi dan Stok Cabang

                </p>

            </div>



            {{-- ERROR --}}
            @error('email')

                <div class="mb-4 bg-red-100 border border-red-200 text-red-600 p-3 rounded-lg text-sm">

                    {{ $message }}

                </div>

            @enderror



            {{-- FORM LOGIN --}}
            <form action="/login" method="POST">

                @csrf

                <div class="mb-4">

                    <label class="block text-sm font-medium text-gray-700 mb-2">

                        Email

                    </label>

                    <input type="email"
                           name="email"
                           placeholder="Masukkan email"
                           required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">

                </div>



                <div class="mb-6">

                    <label class="block text-sm font-medium text-gray-700 mb-2">

                        Password

                    </label>

                    <input type="password"
                           name="password"
                           placeholder="Masukkan password"
                           required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">

                </div>



                <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-xl transition">

                    Login

                </button>

            </form>



            {{-- ROLE --}}
            <div class="mt-8 pt-4 border-t">

                <p class="text-sm text-center text-gray-500">

                    Hak Akses Sistem

                </p>

                <div class="flex flex-wrap justify-center gap-2 mt-3">

                    <span class="px-3 py-1 bg-gray-100 rounded-full text-xs">
                        Admin
                    </span>

                    <span class="px-3 py-1 bg-gray-100 rounded-full text-xs">
                        Manager
                    </span>

                    <span class="px-3 py-1 bg-gray-100 rounded-full text-xs">
                        Supervisor
                    </span>

                    <span class="px-3 py-1 bg-gray-100 rounded-full text-xs">
                        Kasir
                    </span>

                    <span class="px-3 py-1 bg-gray-100 rounded-full text-xs">
                        Gudang
                    </span>

                </div>

            </div>

        </div>



        {{-- FOOTER --}}
        <div class="text-center mt-6 text-sm text-gray-500">

            © {{ date('Y') }}
            Sistem Monitoring Mini Market Pak Jayusman

        </div>

    </div>

</body>

</html>
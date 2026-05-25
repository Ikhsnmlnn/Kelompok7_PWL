<!DOCTYPE html>
<html>

<head>

    <title>Login</title>

    @vite('resources/css/app.css')

</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">

    <form action="/login"
          method="POST"
          class="bg-white p-8 rounded-xl shadow w-96">

        @csrf

        <h1 class="text-2xl font-bold mb-6 text-center">
            MiniMarket Login
        </h1>



        {{-- EMAIL --}}
        <div class="mb-4">

            <label class="block mb-1">
                Email
            </label>

            <input type="email"
                   name="email"
                   class="w-full border p-2 rounded">

        </div>



        {{-- PASSWORD --}}
        <div class="mb-6">

            <label class="block mb-1">
                Password
            </label>

            <input type="password"
                   name="password"
                   class="w-full border p-2 rounded">

        </div>



        {{-- ERROR --}}
        @error('email')

            <div class="mb-4 text-red-500 text-sm">
                {{ $message }}
            </div>

        @enderror



        {{-- BUTTON --}}
        <button class="w-full bg-blue-500 text-white py-2 rounded">

            Login

        </button>

    </form>

</body>

</html>
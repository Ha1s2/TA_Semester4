<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login - Obesity Detection</title>

<script src="https://cdn.tailwindcss.com"></script>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
body{
font-family:'Inter',sans-serif;
}
</style>

</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-emerald-100 via-green-200 to-emerald-300">

<div class="absolute w-96 h-96 bg-green-400/30 rounded-full blur-3xl top-10 left-10"></div>
<div class="absolute w-96 h-96 bg-emerald-500/30 rounded-full blur-3xl bottom-10 right-10"></div>

<div class="relative bg-white shadow-2xl rounded-2xl w-full max-w-md p-10">

<div class="text-center mb-8">

<h1 class="text-3xl font-bold text-gray-800">
Obesity Detection
</h1>

<p class="text-gray-500 mt-2 text-sm">
Silakan login untuk melanjutkan
</p>

</div>

@if(session('error'))

<div class="bg-red-100 text-red-600 text-sm p-3 rounded-lg mb-5 text-center">
{{ session('error') }}
</div>

@endif

<form method="POST" action="{{ route('login.post') }}">

@csrf

<div class="mb-5">

<label class="text-sm text-gray-600">
Email
</label>

<input
type="email"
name="email"
required
placeholder="nama@email.com"
class="w-full mt-1 p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500"
/>

</div>

<div class="mb-6">

<label class="text-sm text-gray-600">
Password
</label>

<div class="relative">

<input
type="password"
name="password"
id="password"
required
placeholder="Masukkan password"
class="w-full mt-1 p-3 pr-10 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500"
/>

<button
type="button"
onclick="togglePassword()"
class="absolute right-3 top-4 text-gray-400 hover:text-gray-700">

👁

</button>

</div>

</div>

<button
type="submit"
class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold p-3 rounded-lg transition shadow-lg">

Login

</button>

</form>

<div class="text-center mt-6 text-sm">

<p class="text-gray-600">
Belum punya akun?

<a href="{{ route('register') }}" class="text-green-600 font-semibold hover:underline">
Daftar
</a>

</p>

</div>

</div>

<script>

function togglePassword(){
let password = document.getElementById("password");
password.type = password.type === "password" ? "text" : "password";
}

</script>

</body>
</html>

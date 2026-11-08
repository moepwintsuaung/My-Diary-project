<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - My Diary</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-purple-100 to-pink-100 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white/80 backdrop-blur-md p-8 rounded-3xl shadow-xl w-full max-w-md border-2 border-purple-200">
        
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-purple-700">✨ Welcome Back! ✨</h2>
            <p class="text-gray-500 text-sm mt-2">Login to your cute diary space</p>
        </div>

        <form action="/login" method="POST" class="space-space-y-5">
            @csrf
            <!-- Login Error Message ပြရန် -->
    @if ($errors->any())
        <div style="background-color: #fee2e2; color: #b91c1c; padding: 10px; border-radius: 8px; margin-bottom: 15px; font-size: 14px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

            <!-- Name Field -->
            <div class="mb-4">
                <label class="block text-purple-900 font-semibold mb-2">Name</label>
                <input type="text" name="name" required 
                    class="w-full px-4 py-3 rounded-xl border border-purple-200 focus:outline-none focus:ring-2 focus:ring-pink-400 bg-white/50 text-gray-700">
            </div>

            <!-- Email Field -->
            <div class="mb-4">
                <label class="block text-purple-900 font-semibold mb-2">Email</label>
                <input type="email" name="email" required 
                    class="w-full px-4 py-3 rounded-xl border border-purple-200 focus:outline-none focus:ring-2 focus:ring-pink-400 bg-white/50 text-gray-700">
            </div>

            <!-- Password Field -->
            <div class="mb-6">
                <label class="block text-purple-900 font-semibold mb-2">Password</label>
                <input type="password" name="password" required 
                    class="w-full px-4 py-3 rounded-xl border border-purple-200 focus:outline-none focus:ring-2 focus:ring-pink-400 bg-white/50 text-gray-700">
            </div>

            <!-- Submit Button -->
            <button type="submit" 
                class="w-full bg-gradient-to-r from-pink-400 to-purple-500 text-white font-semibold py-3 rounded-xl shadow-lg hover:opacity-95 transition duration-200 cursor-pointer">
                🐰 Login
            </button>
        </form>

    </div>

</body>
</html>
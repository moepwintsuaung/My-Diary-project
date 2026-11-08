<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - My Diary</title>
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
            <h2 class="text-3xl font-bold text-purple-700">✨ Create Account ✨</h2>
            <p class="text-gray-500 text-sm mt-2">Join your cute diary space</p>
        </div>

        <form action="/register" method="POST" class="space-y-4">
            @csrf

            <!-- Name Field -->
            <div>
                <label class="block text-purple-900 font-semibold mb-2">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" required 
                    class="w-full px-4 py-3 rounded-xl border border-purple-200 focus:outline-none focus:ring-2 focus:ring-pink-400 bg-white/50 text-gray-700">
            </div>

            <!-- Email Field -->
            <div>
                <label class="block text-purple-900 font-semibold mb-2">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required 
                    class="w-full px-4 py-3 rounded-xl border border-purple-200 focus:outline-none focus:ring-2 focus:ring-pink-400 bg-white/50 text-gray-700">
            </div>

            <!-- Password Field -->
            <div>
                <label class="block text-purple-900 font-semibold mb-2">Password</label>
                <input type="password" name="password" required 
                    class="w-full px-4 py-3 rounded-xl border border-purple-200 focus:outline-none focus:ring-2 focus:ring-pink-400 bg-white/50 text-gray-700">
            </div>

            <!-- Confirm Password Field -->
            <div class="mb-6">
                <label class="block text-purple-900 font-semibold mb-2">Confirm Password</label>
                <input type="password" name="password_confirmation" required 
                    class="w-full px-4 py-3 rounded-xl border border-purple-200 focus:outline-none focus:ring-2 focus:ring-pink-400 bg-white/50 text-gray-700">
            </div>

            <!-- Submit Button -->
            <button type="submit" 
                class="w-full bg-gradient-to-r from-pink-400 to-purple-500 text-white font-semibold py-3 rounded-xl shadow-lg hover:opacity-95 transition duration-200 cursor-pointer">
                🐰 Register
            </button>
        </form>

    </div>

</body>
</html>
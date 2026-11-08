<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users - My Diary</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-purple-100 to-pink-100 min-h-screen p-8">

    <div class="max-w-2xl mx-auto bg-white/80 backdrop-blur-md p-8 rounded-3xl shadow-xl border-2 border-purple-200">
        
        <div class="text-center mb-6">
            <h2 class="text-3xl font-bold text-purple-700">🐰 Registered Users List 🌸</h2>
            <p class="text-gray-500 text-sm mt-1">Here are all the cute users in your app</p>
        </div>

        <ul class="space-y-3">
            @foreach($users as $user)
                <li class="bg-white/60 p-4 rounded-2xl border border-pink-200 shadow-sm flex items-center justify-between text-gray-700">
                    <span class="font-semibold text-purple-900">✨ {{ $user->name }}</span>
                    <span class="text-sm text-gray-500">{{ $user->email }}</span>
                </li>
            @endforeach
        </ul>

    </div>

</body>
</html>
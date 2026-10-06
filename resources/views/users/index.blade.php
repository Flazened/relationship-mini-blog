<!DOCTYPE html>
<html>
<head>
    <title>Blog Mini</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">Daftar User</h1>

        <div class="grid gap-4">
            @foreach($users as $user)
                <a href="/users/{{ $user->id }}" 
                   class="bg-white p-4 rounded shadow hover:shadow-lg transition">
                    <div class="font-bold text-lg">{{ $user->name }}</div>
                    <div class="text-gray-600 text-sm">{{ $user->email }}</div>
                    <div class="text-blue-600 text-sm mt-1">
                        {{ $user->posts->count() }} postingan
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</body>
</html>
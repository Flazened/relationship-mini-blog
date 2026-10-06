<!DOCTYPE html>
<html>
<head>
    <title>{{ $user->name }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto">
        <a href="/" class="text-blue-600 mb-4 inline-block">← Kembali</a>

        <h1 class="text-3xl font-bold mb-2">{{ $user->name }}</h1>
        <p class="text-gray-600 mb-6">{{ $user->email }}</p>

        <h2 class="text-xl font-semibold mb-3">Postingan</h2>

        @foreach($user->posts as $post)
            <div class="bg-white p-4 rounded shadow mb-4">
                <h3 class="font-bold text-lg">{{ $post->title }}</h3>
                <p class="text-gray-700 mt-2">{{ $post->content }}</p>

                <div class="mt-4 border-t pt-3">
                    <h4 class="font-semibold text-sm text-gray-600 mb-2">
                        Komentar ({{ $post->comments->count() }}):
                    </h4>
                    @foreach($post->comments as $comment)
                        <div class="bg-gray-50 p-2 rounded mb-2 text-sm">
                            <span class="font-semibold">{{ $comment->commentar_name }}:</span>
                            {{ $comment->message }}
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logging Out...</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gradient-to-br from-purple-100 to-indigo-100">
    <div class="bg-white shadow-lg rounded-lg p-8 text-center max-w-md">
        <h2 class="text-2xl font-semibold text-indigo-700 mb-4">You have been logged out</h2>
        <p class="text-gray-600 mb-6">Redirecting you to the home page...</p>
        <a href="{{ route('home') }}" class="bg-indigo-600 text-white px-6 py-2 rounded-md hover:bg-indigo-700 transition">
            Go Home Now
        </a>
    </div>

    <script>
        setTimeout(() => {
            window.location.href = "{{ route('home') }}";
        }, 3000);
    </script>
</body>
</html>

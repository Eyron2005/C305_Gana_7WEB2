<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen">
    <div class="max-w-6xl mx-auto py-10">
        <h1 class="text-3xl font-bold mb-6">Admin Dashboard</h1>

        <a href="{{ route('admin.portfolio.index') }}"
           class="inline-block bg-indigo-500 hover:bg-indigo-600 px-4 py-2 rounded-lg text-sm font-medium">
            Manage Portfolio
        </a>
    </div>
</body>
</html>

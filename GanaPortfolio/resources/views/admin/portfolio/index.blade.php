<!DOCTYPE html>
<html>
<head>
    <title>Manage Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen">
<div class="max-w-6xl mx-auto py-10">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Portfolio Items</h1>

        <a href="{{ route('admin.portfolio.create') }}"
           class="bg-indigo-500 hover:bg-indigo-600 px-4 py-2 rounded-lg text-sm font-medium">
            + Add Project
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 text-sm text-emerald-400">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full text-sm border border-slate-700">
        <thead class="bg-slate-800">
        <tr>
            <th class="px-3 py-2 border-b border-slate-700 text-left">#</th>
            <th class="px-3 py-2 border-b border-slate-700 text-left">Title</th>
            <th class="px-3 py-2 border-b border-slate-700 text-left">Subtitle</th>
            <th class="px-3 py-2 border-b border-slate-700 text-left">Order</th>
            <th class="px-3 py-2 border-b border-slate-700">Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($items as $item)
            <tr class="border-b border-slate-800">
                <td class="px-3 py-2">{{ $item->id }}</td>
                <td class="px-3 py-2">{{ $item->title }}</td>
                <td class="px-3 py-2">{{ $item->subtitle }}</td>
                <td class="px-3 py-2">{{ $item->sort_order }}</td>
                <td class="px-3 py-2 text-center">
                    <a href="{{ route('admin.portfolio.edit', $item) }}" class="text-indigo-400 text-xs mr-2">Edit</a>

                    <form action="{{ route('admin.portfolio.destroy', $item) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-rose-400 text-xs"
                                onclick="return confirm('Delete this item?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="px-3 py-4 text-center text-slate-400">
                    No portfolio items yet.
                </td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Add Portfolio Item</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen">
<div class="max-w-xl mx-auto py-10">
    <h1 class="text-2xl font-bold mb-6">Add Portfolio Item</h1>

    <form method="POST" action="{{ route('admin.portfolio.store') }}" class="space-y-4">
        @csrf

        <div>
            <label class="block text-sm mb-1">Title</label>
            <input type="text" name="title" class="w-full bg-slate-800 border border-slate-700 rounded-lg px-3 py-2 text-sm"
                   value="{{ old('title') }}" required>
            @error('title') <p class="text-xs text-rose-400 mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm mb-1">Subtitle</label>
            <input type="text" name="subtitle" class="w-full bg-slate-800 border border-slate-700 rounded-lg px-3 py-2 text-sm"
                   value="{{ old('subtitle') }}">
        </div>

        <div>
            <label class="block text-sm mb-1">Description</label>
            <textarea name="description" rows="4"
                      class="w-full bg-slate-800 border border-slate-700 rounded-lg px-3 py-2 text-sm">{{ old('description') }}</textarea>
        </div>

        <div>
            <label class="block text-sm mb-1">Image URL</label>
            <input type="text" name="image_url" class="w-full bg-slate-800 border border-slate-700 rounded-lg px-3 py-2 text-sm"
                   value="{{ old('image_url') }}">
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm mb-1">GitHub URL</label>
                <input type="text" name="github_url" class="w-full bg-slate-800 border border-slate-700 rounded-lg px-3 py-2 text-sm"
                       value="{{ old('github_url') }}">
            </div>
            <div>
                <label class="block text-sm mb-1">Live URL</label>
                <input type="text" name="live_url" class="w-full bg-slate-800 border border-slate-700 rounded-lg px-3 py-2 text-sm"
                       value="{{ old('live_url') }}">
            </div>
        </div>

        <div>
            <label class="block text-sm mb-1">Sort Order</label>
            <input type="number" name="sort_order" class="w-full bg-slate-800 border border-slate-700 rounded-lg px-3 py-2 text-sm"
                   value="{{ old('sort_order', 0) }}">
        </div>

        <button type="submit"
                class="bg-indigo-500 hover:bg-indigo-600 px-4 py-2 rounded-lg text-sm font-medium">
            Save
        </button>
    </form>
</div>
</body>
</html>

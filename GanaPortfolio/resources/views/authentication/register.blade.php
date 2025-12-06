<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | My Portfolio</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .gradient-bg {
            background: radial-gradient(circle at top left, #4f46e5, transparent 50%),
                        radial-gradient(circle at bottom right, #ec4899, transparent 50%),
                        #020617;
        }
    </style>
</head>
<body class="min-h-screen gradient-bg flex items-center justify-center px-4">

    <div class="w-full max-w-md">
        <div class="bg-slate-900/80 backdrop-blur rounded-2xl shadow-2xl border border-slate-700 px-8 py-10">
            
            <div class="mb-8 text-center">
                <div class="mx-auto mb-4 h-12 w-12 rounded-2xl bg-indigo-500/20 flex items-center justify-center">
                    <span class="text-indigo-400 text-2xl font-bold">G</span>
                </div>
                <h1 class="text-2xl font-semibold text-white">Create an account</h1>
                <p class="text-sm text-slate-400 mt-1">Join us and start your journey.</p>
            </div>

            @if ($errors->any())
                <div class="mb-4 text-sm text-rose-400">
                    <ul class="list-disc ml-4">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-slate-200 mb-1">
                        Full Name
                    </label>
                    <input
                        id="name"
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        class="w-full rounded-xl bg-slate-800 border border-slate-700
                               focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/60
                               text-slate-100 placeholder-slate-500 px-4 py-2.5 text-sm transition"
                        placeholder="John Doe"
                    >
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-slate-200 mb-1">
                        Email
                    </label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        class="w-full rounded-xl bg-slate-800 border border-slate-700
                               focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/60
                               text-slate-100 placeholder-slate-500 px-4 py-2.5 text-sm transition"
                        placeholder="you@example.com"
                    >
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-slate-200 mb-1">
                        Password
                    </label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        required
                        class="w-full rounded-xl bg-slate-800 border border-slate-700
                               focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/60
                               text-slate-100 placeholder-slate-500 px-4 py-2.5 text-sm transition"
                        placeholder="••••••••"
                    >
                </div>

                <!-- Confirm Password -->
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-slate-200 mb-1">
                        Confirm Password
                    </label>
                    <input
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                        required
                        class="w-full rounded-xl bg-slate-800 border border-slate-700
                               focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/60
                               text-slate-100 placeholder-slate-500 px-4 py-2.5 text-sm transition"
                        placeholder="••••••••"
                    >
                </div>

                <!-- Submit -->
                <button
                    type="submit"
                    class="w-full inline-flex items-center justify-center rounded-xl bg-indigo-500
                           hover:bg-indigo-600 focus:ring-2 focus:ring-indigo-400/70
                           focus:ring-offset-2 focus:ring-offset-slate-900
                           text-white font-medium text-sm px-4 py-2.5 transition"
                >
                    Create account
                </button>
            </form>

            <p class="mt-6 text-xs text-center text-slate-400">
                Already have an account?
                <a href="{{ route('login') }}" class="text-indigo-400 hover:text-indigo-300">
                    Sign in
                </a>
            </p>
        </div>

        <p class="mt-4 text-[11px] text-center text-slate-500">
            © {{ date('Y') }} Your Name • All rights reserved
        </p>
    </div>

</body>
</html>

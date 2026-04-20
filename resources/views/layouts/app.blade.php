<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.js"
        integrity="sha512-6m6AtgVSg7JzStQBuIpqoVuGPVSAK5Sp/ti6ySu6AjRDa1pX8mIl1TwP9QmKXU+4Mhq/73SzOk6mbNvyj9MPzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-slate-100">
    <div x-data="{ sidebarOpen: false }" class="min-h-screen">
        <!-- Mobile Overlay -->
        <div x-show="sidebarOpen" x-transition.opacity class="fixed inset-0 z-40 bg-slate-900/50 lg:hidden"
            @click="sidebarOpen = false"></div>

        <!-- Sidebar -->
        <aside
            class="fixed inset-y-0 left-0 z-50 w-72 transform overflow-y-auto border-r border-slate-200 bg-white shadow-xl transition-all duration-300 ease-in-out lg:translate-x-0"
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'">
            <div class="flex h-20 items-center justify-between border-b border-slate-200 px-6">
                <a href="/" class="flex items-center gap-3">
                    <div
                        class="flex h-11 w-11 items-center justify-center rounded-2xl bg-gradient-to-br from-indigo-600 to-blue-500 text-lg font-bold text-white shadow-md">
                        A
                    </div>
                    <div>
                        <h2 class="text-lg font-bold text-slate-800">{{ config('app.name', 'Laravel') }}</h2>
                        <p class="text-xs text-slate-500">Admin Dashboard</p>
                    </div>
                </a>

                <button @click="sidebarOpen = false"
                    class="rounded-lg p-2 text-slate-500 transition hover:bg-slate-100 hover:text-slate-700 lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="px-4 py-6">
                <p class="mb-3 px-3 text-xs font-semibold uppercase tracking-[0.2em] text-slate-400">Main Menu</p>

                <nav class="space-y-2">
                    <a href="#"
                        class="group flex items-center gap-3 rounded-2xl bg-gradient-to-r from-indigo-600 to-blue-500 px-4 py-3 text-sm font-medium text-white shadow-md transition hover:scale-[1.01]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-90" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 10.5 12 3l9 7.5M5.25 9.75V21h13.5V9.75" />
                        </svg>
                        <span>Dashboard</span>
                    </a>

                    <a href="{{ route('admin.hero.index') }}"
                        class="group flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-slate-900">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-slate-400 group-hover:text-slate-700" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-8.25a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 6v12A2.25 2.25 0 0 0 6.75 20.25h5.25" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h6m-3-3v6" />
                        </svg>
                        <span>Hero</span>
                    </a>

                    <a href="#"
                        class="group flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-slate-900">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-slate-400 group-hover:text-slate-700" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <span>Courses</span>
                    </a>

                    <a href="#"
                        class="group flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-slate-900">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-slate-400 group-hover:text-slate-700" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span>Reports</span>
                    </a>

                    <a href="#"
                        class="group flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-slate-900">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-slate-400 group-hover:text-slate-700" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 6h9.75M10.5 12h9.75M10.5 18h9.75M3.75 6h.008v.008H3.75V6Zm0 6h.008v.008H3.75V12Zm0 6h.008v.008H3.75V18Z" />
                        </svg>
                        <span>Settings</span>
                    </a>
                </nav>
            </div>

            <div class="mt-auto border-t border-slate-200 p-4">
                <div class="rounded-2xl bg-slate-50 p-4">
                    <p class="text-sm font-semibold text-slate-700">Logged in as</p>
                    <p class="mt-1 text-sm text-slate-500">{{ auth()->user()->name ?? 'Admin User' }}</p>
                </div>
            </div>
        </aside>

        <!-- Main Area -->
        <div class="lg:pl-72">
            <!-- Header -->
            <header class="sticky top-0 z-30 border-b border-white/20 bg-white/80 backdrop-blur-xl shadow-sm">
                <div class="flex h-20 items-center justify-between px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center gap-3">
                        <button @click="sidebarOpen = true"
                            class="rounded-xl border border-slate-200 bg-white p-2.5 text-slate-600 shadow-sm transition hover:bg-slate-50 hover:text-slate-900 lg:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>

                        <div>
                            <h1 class="text-xl font-bold text-slate-800 sm:text-2xl">Dashboard</h1>
                            <p class="text-sm text-slate-500">Welcome back, manage everything smoothly.</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <button
                            class="hidden rounded-xl border border-slate-200 bg-white p-2.5 text-slate-500 shadow-sm transition hover:bg-slate-50 hover:text-slate-700 sm:block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75v-.7V9a6 6 0 1 0-12 0v.05-.05.7a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.566 1.08 5.454 1.31m5.715 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                            </svg>
                        </button>

                        <div
                            class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-white px-3 py-2 shadow-sm">
                            <div
                                class="flex h-11 w-11 items-center justify-center rounded-full bg-gradient-to-br from-indigo-600 to-blue-500 text-sm font-bold text-white">
                                {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                            </div>
                            <div class="hidden text-left sm:block">
                                <p class="text-sm font-semibold text-slate-800">{{ auth()->user()->name ?? 'Admin' }}
                                </p>
                                <p class="text-xs text-slate-500">{{ auth()->user()->email ?? 'admin@example.com' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Content -->
            <main class="p-4 sm:p-6 lg:p-8">
                <div class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6 lg:p-8">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
</body>

</html>

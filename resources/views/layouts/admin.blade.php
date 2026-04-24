<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Smart Library Admin')</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .panel {
            background: rgba(255, 255, 255, 0.78);
            border: 1px solid rgba(226, 232, 240, 0.9);
            box-shadow: 0 16px 45px rgba(15, 23, 42, 0.08);
        }

        .sidebar-link.active {
            background: rgba(255, 255, 255, 0.16);
            color: #ffffff;
        }
    </style>
</head>

<body class="min-h-screen bg-[#EAF1F8] text-slate-800">

    <div class="pointer-events-none fixed inset-0 -z-10 overflow-hidden">
        <div class="absolute -left-32 -top-32 h-80 w-80 rounded-full bg-indigo-300/30 blur-3xl"></div>
        <div class="absolute right-0 top-20 h-72 w-72 rounded-full bg-sky-200/40 blur-3xl"></div>
        <div class="absolute bottom-0 right-20 h-80 w-80 rounded-full bg-violet-300/30 blur-3xl"></div>
    </div>

    <main class="min-h-screen p-4 lg:p-6">
        <section class="mx-auto flex min-h-[calc(100vh-3rem)] max-w-[1500px] overflow-hidden rounded-[26px] bg-white/45 shadow-[0_24px_80px_rgba(15,23,42,0.12)] ring-1 ring-white/70 backdrop-blur-xl">

            {{-- Sidebar --}}
            <aside class="hidden w-[104px] shrink-0 flex-col items-center bg-gradient-to-b from-[#111827] via-[#26336F] to-[#5166E9] px-3 py-5 text-white lg:flex">
                <div class="mb-8 flex h-14 w-14 items-center justify-center rounded-2xl bg-white/10 ring-1 ring-white/15">
                    <i data-lucide="library-big" class="h-8 w-8"></i>
                </div>

                <nav class="flex w-full flex-1 flex-col items-center gap-2">
                    <a href="/admin/dashboard" class="sidebar-link active flex w-full flex-col items-center rounded-2xl px-2 py-3 text-[10px] font-bold uppercase tracking-wide text-white/75 transition hover:bg-white/15 hover:text-white">
                        <i data-lucide="layout-dashboard" class="mb-1 h-5 w-5"></i>
                        <span>Dashboard</span>
                    </a>

                    <a href="#" class="sidebar-link flex w-full flex-col items-center rounded-2xl px-2 py-3 text-[10px] font-bold uppercase tracking-wide text-white/70 transition hover:bg-white/15 hover:text-white">
                        <i data-lucide="users" class="mb-1 h-5 w-5"></i>
                        <span>Murid</span>
                    </a>

                    <a href="#" class="sidebar-link flex w-full flex-col items-center rounded-2xl px-2 py-3 text-[10px] font-bold uppercase tracking-wide text-white/70 transition hover:bg-white/15 hover:text-white">
                        <i data-lucide="book-open" class="mb-1 h-5 w-5"></i>
                        <span>Buku</span>
                    </a>

                    <a href="#" class="sidebar-link flex w-full flex-col items-center rounded-2xl px-2 py-3 text-[10px] font-bold uppercase tracking-wide text-white/70 transition hover:bg-white/15 hover:text-white">
                        <i data-lucide="scan-line" class="mb-1 h-5 w-5"></i>
                        <span>Pinjam</span>
                    </a>

                    <a href="#" class="sidebar-link flex w-full flex-col items-center rounded-2xl px-2 py-3 text-[10px] font-bold uppercase tracking-wide text-white/70 transition hover:bg-white/15 hover:text-white">
                        <i data-lucide="undo-2" class="mb-1 h-5 w-5"></i>
                        <span>Kembali</span>
                    </a>

                    <a href="#" class="sidebar-link flex w-full flex-col items-center rounded-2xl px-2 py-3 text-[10px] font-bold uppercase tracking-wide text-white/70 transition hover:bg-white/15 hover:text-white">
                        <i data-lucide="history" class="mb-1 h-5 w-5"></i>
                        <span>Riwayat</span>
                    </a>

                    <a href="#" class="sidebar-link flex w-full flex-col items-center rounded-2xl px-2 py-3 text-[10px] font-bold uppercase tracking-wide text-white/70 transition hover:bg-white/15 hover:text-white">
                        <i data-lucide="cpu" class="mb-1 h-5 w-5"></i>
                        <span>Alat</span>
                    </a>
                </nav>

                <a href="#" class="flex h-12 w-12 items-center justify-center rounded-2xl text-white/70 transition hover:bg-white/15 hover:text-white">
                    <i data-lucide="settings" class="h-5 w-5"></i>
                </a>
            </aside>

            {{-- Content Area --}}
            <div class="flex min-w-0 flex-1 flex-col">

                {{-- Topbar --}}
                <header class="flex min-h-[78px] items-center justify-between border-b border-slate-200/70 bg-white/55 px-5 backdrop-blur-xl md:px-8">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.22em] text-slate-400">Smart Library</p>
                        <h1 class="mt-1 text-xl font-extrabold text-slate-900 md:text-2xl">
                            @yield('page_title', 'Dashboard Admin')
                        </h1>
                    </div>

                    <div class="flex items-center gap-3">
                        <button class="hidden h-11 w-11 items-center justify-center rounded-2xl border border-slate-200 bg-white/80 text-slate-600 transition hover:bg-white md:flex">
                            <i data-lucide="bell" class="h-5 w-5"></i>
                        </button>

                        <button class="flex h-11 w-11 items-center justify-center rounded-2xl border border-slate-200 bg-white/80 text-slate-600 transition hover:bg-white">
                            <i data-lucide="user-round" class="h-5 w-5"></i>
                        </button>
                    </div>
                </header>

                <section class="flex-1 overflow-y-auto p-5 md:p-8">
                    @yield('content')
                </section>

            </div>
        </section>
    </main>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
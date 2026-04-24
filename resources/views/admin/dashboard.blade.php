@extends('layouts.admin')

@section('title', 'Dashboard Admin - Smart Library')
@section('page_title', 'Dashboard Admin')

@section('content')

{{-- Header Area --}}
<div class="mb-7 flex flex-col gap-4 xl:flex-row xl:items-end xl:justify-between">
    <div>
        <h2 class="text-3xl font-extrabold text-slate-900 md:text-4xl">
            Ringkasan Perpustakaan
        </h2>
        <p class="mt-2 max-w-2xl text-sm leading-6 text-slate-500">
            Pantau data buku, murid, transaksi peminjaman, pengembalian, dan status alat perpustakaan pintar.
        </p>
    </div>

    <div class="panel flex w-full items-center gap-3 rounded-2xl px-4 py-3 xl:max-w-md">
        <i data-lucide="search" class="h-5 w-5 text-slate-400"></i>
        <input
            type="text"
            placeholder="Cari murid, buku, atau transaksi..."
            class="w-full bg-transparent text-sm text-slate-700 outline-none placeholder:text-slate-400"
        >
    </div>
</div>

{{-- Statistic Cards --}}
<div class="grid gap-5 md:grid-cols-2 xl:grid-cols-4">
    <div class="panel rounded-[22px] p-5">
        <div class="flex items-center justify-between">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-indigo-100 text-indigo-600">
                <i data-lucide="book-open" class="h-6 w-6"></i>
            </div>
            <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-bold text-slate-500">Koleksi</span>
        </div>
        <p class="mt-5 text-sm font-medium text-slate-500">Total Buku</p>
        <h3 class="mt-2 text-4xl font-extrabold text-slate-900">248</h3>
        <p class="mt-2 text-xs text-slate-400">Termasuk buku tersedia dan dipinjam</p>
    </div>

    <div class="panel rounded-[22px] p-5">
        <div class="flex items-center justify-between">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-orange-100 text-orange-500">
                <i data-lucide="users" class="h-6 w-6"></i>
            </div>
            <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-bold text-emerald-600">Aktif</span>
        </div>
        <p class="mt-5 text-sm font-medium text-slate-500">Murid Terdaftar</p>
        <h3 class="mt-2 text-4xl font-extrabold text-slate-900">126</h3>
        <p class="mt-2 text-xs text-slate-400">Data murid dengan kartu RFID</p>
    </div>

    <div class="panel rounded-[22px] p-5">
        <div class="flex items-center justify-between">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-sky-100 text-sky-500">
                <i data-lucide="bookmark-check" class="h-6 w-6"></i>
            </div>
            <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-bold text-blue-600">Aktif</span>
        </div>
        <p class="mt-5 text-sm font-medium text-slate-500">Buku Dipinjam</p>
        <h3 class="mt-2 text-4xl font-extrabold text-slate-900">37</h3>
        <p class="mt-2 text-xs text-slate-400">Belum dikembalikan murid</p>
    </div>

    <div class="panel rounded-[22px] p-5">
        <div class="flex items-center justify-between">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-rose-100 text-rose-500">
                <i data-lucide="activity" class="h-6 w-6"></i>
            </div>
            <span class="rounded-full bg-violet-100 px-3 py-1 text-xs font-bold text-violet-600">Hari ini</span>
        </div>
        <p class="mt-5 text-sm font-medium text-slate-500">Transaksi Hari Ini</p>
        <h3 class="mt-2 text-4xl font-extrabold text-slate-900">12</h3>
        <p class="mt-2 text-xs text-slate-400">Peminjaman dan pengembalian</p>
    </div>
</div>

{{-- Main Grid --}}
<div class="mt-7 grid gap-6 xl:grid-cols-12">

    {{-- Left Content --}}
    <div class="space-y-6 xl:col-span-8">

        {{-- Table --}}
        <div class="panel rounded-[24px] p-5 md:p-6">
            <div class="mb-5 flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                <div>
                    <h3 class="text-xl font-extrabold text-slate-900">Transaksi Terbaru</h3>
                    <p class="mt-1 text-sm text-slate-500">Daftar aktivitas peminjaman dan pengembalian terakhir.</p>
                </div>

                <button class="inline-flex items-center justify-center gap-2 rounded-2xl bg-[#5B5FEF] px-5 py-3 text-sm font-bold text-white shadow-lg shadow-indigo-500/20 transition hover:bg-[#4D51D9]">
                    <i data-lucide="plus" class="h-4 w-4"></i>
                    Tambah Transaksi
                </button>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full min-w-[780px] border-collapse">
                    <thead>
                        <tr class="border-b border-slate-200 text-left text-xs font-bold uppercase tracking-wide text-slate-400">
                            <th class="px-3 py-3">Murid</th>
                            <th class="px-3 py-3">Buku</th>
                            <th class="px-3 py-3">Jenis</th>
                            <th class="px-3 py-3">Status</th>
                            <th class="px-3 py-3">Waktu</th>
                            <th class="px-3 py-3 text-right">Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-slate-100 text-sm">
                        <tr class="hover:bg-slate-50/70">
                            <td class="px-3 py-4">
                                <div class="font-bold text-slate-900">Andi Pratama</div>
                                <div class="text-xs text-slate-400">XI RPL 1</div>
                            </td>
                            <td class="px-3 py-4 font-medium text-slate-700">Laskar Pelangi</td>
                            <td class="px-3 py-4">
                                <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-bold text-blue-600">Peminjaman</span>
                            </td>
                            <td class="px-3 py-4">
                                <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-bold text-emerald-600">Berhasil</span>
                            </td>
                            <td class="px-3 py-4 text-slate-500">08:10</td>
                            <td class="px-3 py-4 text-right">
                                <button class="rounded-xl bg-slate-100 px-3 py-2 text-xs font-bold text-slate-600 hover:bg-slate-200">Detail</button>
                            </td>
                        </tr>

                        <tr class="hover:bg-slate-50/70">
                            <td class="px-3 py-4">
                                <div class="font-bold text-slate-900">Siti Rahma</div>
                                <div class="text-xs text-slate-400">X AKL 2</div>
                            </td>
                            <td class="px-3 py-4 font-medium text-slate-700">Bumi Manusia</td>
                            <td class="px-3 py-4">
                                <span class="rounded-full bg-violet-100 px-3 py-1 text-xs font-bold text-violet-600">Pengembalian</span>
                            </td>
                            <td class="px-3 py-4">
                                <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-bold text-emerald-600">Berhasil</span>
                            </td>
                            <td class="px-3 py-4 text-slate-500">09:20</td>
                            <td class="px-3 py-4 text-right">
                                <button class="rounded-xl bg-slate-100 px-3 py-2 text-xs font-bold text-slate-600 hover:bg-slate-200">Detail</button>
                            </td>
                        </tr>

                        <tr class="hover:bg-slate-50/70">
                            <td class="px-3 py-4">
                                <div class="font-bold text-slate-900">Raka Putra</div>
                                <div class="text-xs text-slate-400">XI TKJ 1</div>
                            </td>
                            <td class="px-3 py-4 font-medium text-slate-700">Laut Bercerita</td>
                            <td class="px-3 py-4">
                                <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-bold text-blue-600">Peminjaman</span>
                            </td>
                            <td class="px-3 py-4">
                                <span class="rounded-full bg-red-100 px-3 py-1 text-xs font-bold text-red-600">Gagal</span>
                            </td>
                            <td class="px-3 py-4 text-slate-500">10:05</td>
                            <td class="px-3 py-4 text-right">
                                <button class="rounded-xl bg-slate-100 px-3 py-2 text-xs font-bold text-slate-600 hover:bg-slate-200">Detail</button>
                            </td>
                        </tr>

                        <tr class="hover:bg-slate-50/70">
                            <td class="px-3 py-4">
                                <div class="font-bold text-slate-900">Nabila Putri</div>
                                <div class="text-xs text-slate-400">XII RPL 2</div>
                            </td>
                            <td class="px-3 py-4 font-medium text-slate-700">Dasar-Dasar Pemrograman</td>
                            <td class="px-3 py-4">
                                <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-bold text-blue-600">Peminjaman</span>
                            </td>
                            <td class="px-3 py-4">
                                <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-bold text-emerald-600">Berhasil</span>
                            </td>
                            <td class="px-3 py-4 text-slate-500">10:35</td>
                            <td class="px-3 py-4 text-right">
                                <button class="rounded-xl bg-slate-100 px-3 py-2 text-xs font-bold text-slate-600 hover:bg-slate-200">Detail</button>
                            </td>
                        </tr>

                        <tr class="hover:bg-slate-50/70">
                            <td class="px-3 py-4">
                                <div class="font-bold text-slate-900">Dimas Arya</div>
                                <div class="text-xs text-slate-400">X TKJ 2</div>
                            </td>
                            <td class="px-3 py-4 font-medium text-slate-700">Matematika Kelas X</td>
                            <td class="px-3 py-4">
                                <span class="rounded-full bg-violet-100 px-3 py-1 text-xs font-bold text-violet-600">Pengembalian</span>
                            </td>
                            <td class="px-3 py-4">
                                <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-bold text-emerald-600">Berhasil</span>
                            </td>
                            <td class="px-3 py-4 text-slate-500">11:05</td>
                            <td class="px-3 py-4 text-right">
                                <button class="rounded-xl bg-slate-100 px-3 py-2 text-xs font-bold text-slate-600 hover:bg-slate-200">Detail</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Bottom Summary --}}
        <div class="grid gap-5 md:grid-cols-3">
            <div class="panel rounded-[22px] p-5">
                <p class="text-sm font-semibold text-slate-500">Buku Tersedia</p>
                <h4 class="mt-2 text-3xl font-extrabold text-slate-900">211</h4>
                <p class="mt-1 text-xs text-slate-400">Siap dipinjam</p>
            </div>

            <div class="panel rounded-[22px] p-5">
                <p class="text-sm font-semibold text-slate-500">Terlambat</p>
                <h4 class="mt-2 text-3xl font-extrabold text-red-500">4</h4>
                <p class="mt-1 text-xs text-slate-400">Perlu ditindaklanjuti</p>
            </div>

            <div class="panel rounded-[22px] p-5">
                <p class="text-sm font-semibold text-slate-500">Pengembalian</p>
                <h4 class="mt-2 text-3xl font-extrabold text-slate-900">7</h4>
                <p class="mt-1 text-xs text-slate-400">Selesai hari ini</p>
            </div>
        </div>
    </div>

    {{-- Right Panel --}}
    <div class="space-y-6 xl:col-span-4">

        {{-- Device Status --}}
        <div class="panel rounded-[24px] p-6">
            <div class="mb-5 flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-extrabold text-slate-900">Status Alat</h3>
                    <p class="mt-1 text-sm text-slate-500">Perangkat pendukung transaksi</p>
                </div>
                <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-emerald-100 text-emerald-600">
                    <i data-lucide="wifi" class="h-5 w-5"></i>
                </div>
            </div>

            <div class="space-y-3">
                <div class="flex items-center justify-between rounded-2xl bg-slate-50 p-4">
                    <div class="flex items-center gap-3">
                        <i data-lucide="badge-check" class="h-5 w-5 text-indigo-600"></i>
                        <div>
                            <p class="font-bold text-slate-700">RFID Reader</p>
                            <p class="text-xs text-slate-400">Scan kartu siswa</p>
                        </div>
                    </div>
                    <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-bold text-emerald-600">Aktif</span>
                </div>

                <div class="flex items-center justify-between rounded-2xl bg-slate-50 p-4">
                    <div class="flex items-center gap-3">
                        <i data-lucide="scan-barcode" class="h-5 w-5 text-indigo-600"></i>
                        <div>
                            <p class="font-bold text-slate-700">QR Scanner</p>
                            <p class="text-xs text-slate-400">Barcode buku/transaksi</p>
                        </div>
                    </div>
                    <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-bold text-emerald-600">Aktif</span>
                </div>

                <div class="flex items-center justify-between rounded-2xl bg-slate-50 p-4">
                    <div class="flex items-center gap-3">
                        <i data-lucide="camera" class="h-5 w-5 text-indigo-600"></i>
                        <div>
                            <p class="font-bold text-slate-700">Webcam</p>
                            <p class="text-xs text-slate-400">Foto/verifikasi murid</p>
                        </div>
                    </div>
                    <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-bold text-emerald-600">Aktif</span>
                </div>

                <div class="flex items-center justify-between rounded-2xl bg-slate-50 p-4">
                    <div class="flex items-center gap-3">
                        <i data-lucide="cpu" class="h-5 w-5 text-indigo-600"></i>
                        <div>
                            <p class="font-bold text-slate-700">Arduino</p>
                            <p class="text-xs text-slate-400">LED dan buzzer</p>
                        </div>
                    </div>
                    <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-bold text-emerald-600">Aktif</span>
                </div>
            </div>
        </div>

        {{-- Activity Log --}}
        <div class="panel rounded-[24px] p-6">
            <h3 class="text-xl font-extrabold text-slate-900">Log Aktivitas Alat</h3>
            <p class="mt-1 text-sm text-slate-500">Riwayat respon perangkat hari ini.</p>

            <div class="mt-5 space-y-5">
                <div class="flex gap-3">
                    <div class="mt-1 h-3 w-3 shrink-0 rounded-full bg-emerald-500"></div>
                    <div>
                        <p class="text-sm font-bold text-slate-800">Data siswa terbaca</p>
                        <p class="text-xs leading-5 text-slate-400">RFID berhasil membaca kartu milik Andi Pratama.</p>
                    </div>
                </div>

                <div class="flex gap-3">
                    <div class="mt-1 h-3 w-3 shrink-0 rounded-full bg-blue-500"></div>
                    <div>
                        <p class="text-sm font-bold text-slate-800">Data buku terbaca</p>
                        <p class="text-xs leading-5 text-slate-400">Barcode buku Laskar Pelangi berhasil discan.</p>
                    </div>
                </div>

                <div class="flex gap-3">
                    <div class="mt-1 h-3 w-3 shrink-0 rounded-full bg-violet-500"></div>
                    <div>
                        <p class="text-sm font-bold text-slate-800">Transaksi berhasil</p>
                        <p class="text-xs leading-5 text-slate-400">Arduino menyalakan LED hijau dan buzzer pendek.</p>
                    </div>
                </div>

                <div class="flex gap-3">
                    <div class="mt-1 h-3 w-3 shrink-0 rounded-full bg-red-500"></div>
                    <div>
                        <p class="text-sm font-bold text-slate-800">Transaksi gagal</p>
                        <p class="text-xs leading-5 text-slate-400">Buku Laut Bercerita sedang tidak tersedia.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    lucide.createIcons();
</script>

@endsection
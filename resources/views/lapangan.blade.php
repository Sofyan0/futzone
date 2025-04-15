@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Data Lapangan</h1>

    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="min-w-full divide-y divide-gray-200 text-sm">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="px-4 py-3 text-left">No</th>
                    <th class="px-4 py-3 text-left">Lapangan</th>
                    <th class="px-4 py-3 text-left">Deskripsi</th>
                    <th class="px-4 py-3 text-left">Harga</th>
                    <th class="px-4 py-3 text-left">Foto</th>
                    <th class="px-4 py-3 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                {{-- Dummy data sementara --}}
                @for ($i = 1; $i <= 5; $i++)
                <tr>
                    <td class="px-4 py-2">{{ $i }}</td>
                    <td class="px-4 py-2">Lapangan {{ $i }}</td>
                    <td class="px-4 py-2">Deskripsi singkat lapangan {{ $i }}</td>
                    <td class="px-4 py-2">Rp {{ number_format(150000 + $i * 10000, 0, ',', '.') }}</td>
                    <td class="px-4 py-2">
                        <img src="https://via.placeholder.com/80x50" alt="Foto" class="rounded shadow">
                    </td>
                    <td class="px-4 py-2 space-x-1">
                        <button class="bg-green-500 hover:bg-green-600 text-white text-xs px-3 py-1 rounded">edit</button>
                        <button class="bg-blue-500 hover:bg-blue-600 text-white text-xs px-3 py-1 rounded">Lihat</button>
                        <button class="bg-red-500 hover:bg-red-600 text-white text-xs px-3 py-1 rounded">delete</button>
                    </td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Data Lapangan</h1>

    <!-- Button Group -->
    <div class="mb-4">
        <button class="bg-blue-500 hover:bg-blue-600 text-white text-xs px-4 py-2 rounded mr-2">Customer Reguler</button>
        <button class="bg-green-500 hover:bg-green-600 text-white text-xs px-4 py-2 rounded mr-2">Customer Membership</button>
        <button class="bg-yellow-500 hover:bg-yellow-600 text-white text-xs px-4 py-2 rounded">Customer Event</button>
    </div>

    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="min-w-full divide-y divide-gray-200 text-sm">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="px-4 py-3 text-left">No</th>
                    <th class="px-4 py-3 text-left">Nama</th>
                    <th class="px-4 py-3 text-left">Tanggal</th>
                    <th class="px-4 py-3 text-left">Lapangan</th>
                    <th class="px-4 py-3 text-left">Durasi</th>
                    <th class="px-4 py-3 text-left">Jam</th>
                    <th class="px-4 py-3 text-left">Harga</th>
                    <th class="px-4 py-3 text-left">Bukti Pendaftaran</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                {{-- Example Data --}}
                @for ($i = 1; $i <= 5; $i++)
                <tr>
                    <td class="px-4 py-2">{{ $i }}</td>
                    <td class="px-4 py-2">Lapangan {{ $i }}</td>
                    <td class="px-4 py-2">{{ now()->addDays($i)->format('d-m-Y') }}</td>
                    <td class="px-4 py-2">Lapangan Futsal {{ $i }}</td>
                    <td class="px-4 py-2">{{ rand(60, 120) }} menit</td>
                    <td class="px-4 py-2">{{ rand(8, 22) }}:{{ str_pad(rand(0, 59), 2, '0', STR_PAD_LEFT) }}</td>
                    <td class="px-4 py-2">Rp {{ number_format(150000 + $i * 50000, 0, ',', '.') }}</td>
                    <td class="px-4 py-2">
                        <a href="{{ url('path_to_file') }}" class="text-blue-500 hover:underline">Lihat Bukti</a>
                    </td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>
@endsection

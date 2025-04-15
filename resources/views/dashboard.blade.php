{{-- resources/views/dashboard.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Data Customer -->
        <div class="bg-green-500 text-white rounded-lg shadow p-6">
            <div class="text-4xl font-bold">15</div>
            <div class="text-lg mt-2">Data Customer</div>
            <a href="#" class="text-sm underline mt-4 block">more info >></a>
        </div>

        <!-- Data Lapangan -->
        <div class="bg-blue-500 text-white rounded-lg shadow p-6">
            <div class="text-4xl font-bold">15</div>
            <div class="text-lg mt-2">Data Lapangan</div>
            <a href="#" class="text-sm underline mt-4 block">more info >></a>
        </div>

        <!-- Data Transaksi / Booking -->
        <div class="bg-yellow-400 text-white rounded-lg shadow p-6">
            <div class="text-4xl font-bold">15</div>
            <div class="text-lg mt-2">Data Transaksi / Booking</div>
            <a href="#" class="text-sm underline mt-4 block">more info >></a>
        </div>
    </div>
</div>
@endsection

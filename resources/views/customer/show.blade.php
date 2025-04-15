@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Detail Customer</h1>
    <div>
        <p>Nama: {{ $customer->name }}</p>
        <p>No.Hp: {{ $customer->phone }}</p>
        <p>Email: {{ $customer->email }}</p>
    </div>
    <a href="{{ route('customer.edit', $customer->id) }}" class="bg-green-400 text-white px-4 py-2 rounded mt-4">Edit</a>
    <a href="{{ route('customer.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded mt-4">Back</a>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Edit Customer</h1>
    <form action="{{ route('customer.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium">Nama</label>
            <input type="text" id="name" name="name" value="{{ $customer->name }}" class="border px-4 py-2 w-full">
        </div>
        <div class="mb-4">
            <label for="phone" class="block text-sm font-medium">No.Hp</label>
            <input type="text" id="phone" name="phone" value="{{ $customer->phone }}" class="border px-4 py-2 w-full">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium">Email</label>
            <input type="email" id="email" name="email" value="{{ $customer->email }}" class="border px-4 py-2 w-full">
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection

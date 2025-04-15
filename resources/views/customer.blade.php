@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Data Customer</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full border text-center text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Nama</th>
                    <th class="border px-4 py-2">No.Hp</th>
                    <th class="border px-4 py-2">E-mail</th>
                    <th class="border px-4 py-2">Password</th>
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= 10; $i++)
                    <tr class="odd:bg-white even:bg-gray-50">
                        <td class="border px-4 py-2">{{ $i }}</td>
                        <td class="border px-4 py-2">Customer {{ $i }}</td>
                        <td class="border px-4 py-2">08{{ rand(100000000, 999999999) }}</td>
                        <td class="border px-4 py-2">customer{{ $i }}@email.com</td>
                        <td class="border px-4 py-2">password{{ $i }}</td>
                        <td class="border px-4 py-2 space-x-1">
                            <a href="{{ route('customer.edit', $i) }}" class="bg-green-400 text-white px-2 py-1 rounded hover:bg-green-500">edit</a>
                            <a href="{{ route('customer.show', $i) }}" class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">Lihat</a>
                            <form action="{{ route('customer.destroy', $i) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">delete</button>
                            </form>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>
@endsection

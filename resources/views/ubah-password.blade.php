@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-white">
    <div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-md text-center">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Ganti password baru!</h2>
        
        <form action="#" method="POST" class="space-y-5">
            <!-- Masukkan password baru -->
            <div class="text-left">
                <label class="block text-sm font-semibold text-gray-700 mb-1">Masukkan password baru</label>
                <input 
                    type="password" 
                    placeholder="Masukkan password.." 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <!-- Konfirmasi password baru -->
            <div class="text-left">
                <label class="block text-sm font-semibold text-gray-700 mb-1">Konfirmasi Password baru</label>
                <input 
                    type="password" 
                    placeholder="Masukkan konfirmasi password.." 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <!-- Tombol Submit -->
            <button 
                type="submit" 
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-md transition duration-200">
                Submit
            </button>
        </form>
    </div>
</div>
@endsection

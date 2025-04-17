<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;

class LapanganController extends Controller
{
    public function index()
    {
        $lapangans = Lapangan::all(); // Ambil semua data dari tabel 'lapangans'
        return view('lapangan', compact('lapangan')); // Kirim ke view
    }
}

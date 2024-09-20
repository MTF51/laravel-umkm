<?php
namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    /**
     * Menampilkan daftar UMKM.
     */
    public function index()
    {
        // Mengambil semua UMKM beserta gambar-gambarnya
        $umkms = Umkm::with('images')->get();

        // Menampilkan view untuk daftar UMKM
        return view('umkm.index', compact('umkms'));
    }

    /**
     * Menampilkan detail UMKM berdasarkan ID.
     */
    public function show($id)
    {
        // Mencari UMKM berdasarkan ID beserta gambar-gambarnya
        $umkm = Umkm::with('images')->findOrFail($id);

        // Menampilkan view untuk detail UMKM
        return view('umkm.show', compact('umkm'));
    }
}

<?php
namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil semua data UMKM dari database
        $umkms = Umkm::with('images')->get(); // Pastikan relasi images di-load

        // Mengirim data ke view
        return view('home', compact('umkms'));
    }
}

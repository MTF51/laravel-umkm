<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use App\Models\UmkmImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $umkms = Umkm::with('images')->get();
        return view('admin.index', compact('umkms'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'social_media' => 'nullable|url',
            'operational_hours' => 'nullable|string|max:255',
        ]);

        $umkm = Umkm::create($request->only(['name', 'description', 'address', 'phone', 'social_media', 'operational_hours']));

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('images', 'public');
                UmkmImage::create([
                    'umkm_id' => $umkm->id,
                    'image_path' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.index')->with('success', 'UMKM berhasil ditambahkan');
    }

    public function edit($id)
    {
        $umkm = Umkm::with('images')->findOrFail($id);
        return view('admin.edit', compact('umkm'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'social_media' => 'nullable|url',
            'operational_hours' => 'nullable|string|max:255',
        ]);

        $umkm = Umkm::findOrFail($id);
        $umkm->update($request->only(['name', 'description', 'address', 'phone', 'social_media', 'operational_hours']));

        if ($request->hasFile('images')) {
            foreach ($umkm->images as $image) {
                if (Storage::disk('public')->exists($image->image_path)) {
                    Storage::disk('public')->delete($image->image_path);
                }
                $image->delete();
            }

            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('images', 'public');
                UmkmImage::create([
                    'umkm_id' => $umkm->id,
                    'image_path' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.index')->with('success', 'UMKM berhasil diupdate');
    }

    public function destroy($id)
    {
        $umkm = Umkm::findOrFail($id);

        foreach ($umkm->images as $image) {
            if (Storage::disk('public')->exists($image->image_path)) {
                Storage::disk('public')->delete($image->image_path);
            }
            $image->delete();
        }

        $umkm->delete();

        return redirect()->route('admin.index')->with('success', 'UMKM berhasil dihapus');
    }
}

<?php
// app/Http/Controllers/Admin/PackageController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('admin.packages.index', compact('packages'));
    }

    public function create()
    {
        return view('admin.packages.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_paket' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|string',
            'foto_paket' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('foto_paket')) {
            $path = $request->file('foto_paket')->store('packages', 'public');
            $validatedData['foto_paket'] = $path;
        }

        Package::create($validatedData);
        return redirect()->route('admin.packages.index')->with('success', 'Paket berhasil ditambahkan.');
    }

    public function edit(Package $package)
    {
        return view('admin.packages.edit', compact('package'));
    }

    public function update(Request $request, Package $package)
    {
        $validatedData = $request->validate([
            'nama_paket' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|string',
            'foto_paket' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        if ($request->hasFile('foto_paket')) {
            // Hapus gambar lama jika ada
            if ($package->foto_paket) {
                Storage::disk('public')->delete($package->foto_paket);
            }
            // Simpan gambar baru
            $path = $request->file('foto_paket')->store('packages', 'public');
            $validatedData['foto_paket'] = $path;
        }
        
        $package->update($validatedData);
        return redirect()->route('admin.packages.index')->with('success', 'Paket berhasil diperbarui.');
    }

    public function destroy(Package $package)
    {
        if ($package->orders()->count() > 0) {
            return back()->with('error', 'Tidak dapat menghapus paket karena sedang digunakan dalam pesanan.');
        }

        // Hapus gambar dari storage
        if ($package->foto_paket) {
            Storage::disk('public')->delete($package->foto_paket);
        }

        $package->delete();
        return redirect()->route('admin.packages.index')->with('success', 'Paket berhasil dihapus.');
    }
}
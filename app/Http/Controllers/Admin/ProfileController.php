<?php

// app/Http/Controllers/Admin/ProfileController.php
// Controller untuk mengelola konten halaman 'Tentang Kami'.
// Dalam contoh ini, kita akan menggunakan file config, bukan database.
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    /**
     * Menampilkan form untuk mengedit profil.
     */
    public function edit()
    {
        $siteProfile = config('siteprofile.data');
        return view('admin.profile.edit', compact('siteProfile'));
    }

    /**
     * Memperbarui data profil di file config.
     */
    public function update(Request $request)
    {
        $request->validate([
            'misi' => 'required|string',
            'inovasi' => 'required|string',
            'integritas' => 'required|string',
            'profesionalisme' => 'required|string',
        ]);

        $path = config_path('siteprofile.php');
        $content = "<?php\n\nreturn [\n    'data' => [\n        'misi' => '" . addslashes($request->misi) . "',\n        'values' => [\n            'inovasi' => ['title' => 'Inovasi', 'text' => '" . addslashes($request->inovasi) . "'],\n            'integritas' => ['title' => 'Integritas', 'text' => '" . addslashes($request->integritas) . "'],\n            'profesionalisme' => ['title' => 'Profesionalisme', 'text' => '" . addslashes($request->profesionalisme) . "'],\n        ]\n    ]\n];\n";

        File::put($path, $content);

        return redirect()->route('admin.profile.edit')->with('success', 'Profil website berhasil diperbarui.');
    }
}

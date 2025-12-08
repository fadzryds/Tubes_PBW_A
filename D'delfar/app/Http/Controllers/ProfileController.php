<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Tampilkan halaman profile
     */
    public function show()
    {
        $user = Auth::user(); // pastikan sudah login via route middleware
        return view('auth.profile', compact('user'));
    }

    /**
     * Update profile user
     */
    public function update(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();

        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'foto' => 'nullable|image|max:2048',
            'nomor_karyawan' => 'nullable|string|max:50',
        ]);

        // Upload foto jika ada
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($user->foto) {
                Storage::delete($user->foto);
            }
            $path = $request->file('foto')->store('profile', 'public');
            $user->foto = $path;
        }

        // Update data
        $user->name = $request->name;
        $user->email = $request->email;
        if ($user->role !== 'user') {
            $user->nomor_karyawan = $request->nomor_karyawan;
        }

        // Simpan perubahan
        $user->save();

        // Redirect dengan session success untuk modern alert
        return redirect()->route('profile')->with('success', 'Profile berhasil diperbarui!');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Biro;
use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();
        $biro = Biro::select('biro')->distinct()->pluck('biro')->toArray();

        return view('pengguna.pengguna', compact('data', 'biro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $biro = Biro::select('biro')->distinct()->pluck('biro')->toArray();
        return view('pengguna.tambahPengguna', compact('biro'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users', // Username harus unik di dalam tabel users
            'password' => 'required|string',
            'biro' => 'required|string',
        ]);

        $data = new User();
        $data->name = $request->name;
        $data->username = $request->username;
        $data->biro = $request->biro;
        $data->password = Hash::make($request->password);
        $data->save();

        return redirect()->route('pengguna.index')->with('success', 'User berhasil disimpan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = User::find($id);
        $biro = Biro::select('biro')->distinct()->pluck('biro')->toArray();
        return view('pengguna.editPengguna', compact('data', 'biro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Temukan pengguna berdasarkan ID
        $user = User::findOrFail($id);

        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,'.$id,
            'password' => 'nullable|string',
            'biro' => 'required|string'
        ]);

        // Update data pengguna
        $user->name = $request->input('name');
        $user->biro = $request->input('biro');
        $user->username = $request->input('username');

        // Periksa apakah ada input password baru
        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
        }

        // Simpan perubahan ke database
        $user->save();

        // Redirect ke halaman indeks pengguna dengan pesan sukses
        return redirect()->route('pengguna.index')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Temukan pengguna berdasarkan ID
        $user = User::findOrFail($id);

        // Hapus pengguna dari database
        $user->delete();

        // Redirect ke halaman indeks pengguna dengan pesan sukses
        return redirect()->route('pengguna.index')->with('success', 'User deleted successfully');
    }

}

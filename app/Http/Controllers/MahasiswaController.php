<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Ambil 10 data per halaman
        $mahasiswa = Mahasiswa::paginate();

        // Kirim data ke view
        return view('data_mahasiswa', compact('mahasiswa'));
    }

     // Menampilkan form tambah mahasiswa
     public function create()
     {
         return view('create');
     }
 
     // Menyimpan data mahasiswa baru
     public function store(Request $request)
     {
         // Validasi data
         $request->validate([
             'nama' => 'required|string|max:100',
             'nim' => 'required|string|max:20|unique:mahasiswa',
             'program_studi' => 'required|string|max:50',
             'tanggal_lahir' => 'required|date',
             'alamat' => 'nullable|string|max:255',
         ]);
 
         // Simpan data mahasiswa
         Mahasiswa::create($request->all());
 
         return redirect()->route('data-mahasiswa')->with('success', 'Mahasiswa berhasil ditambahkan');
     }
 
     // Menampilkan form edit mahasiswa
     public function edit(Mahasiswa $mahasiswa)
     {
         return view('edit', compact('mahasiswa'));
     }
 
     // Mengupdate data mahasiswa
     public function update(Request $request, Mahasiswa $mahasiswa)
     {
         // Validasi data
         $request->validate([
             'nama' => 'required|string|max:100',
             'nim' => 'required|string|max:20|unique:mahasiswa,nim,' . $mahasiswa->id,
             'program_studi' => 'required|string|max:50',
             'tanggal_lahir' => 'required|date',
             'alamat' => 'nullable|string|max:255',
         ]);
 
         // Update data mahasiswa
         $mahasiswa->update($request->all());
 
         return redirect()->route('data-mahasiswa')->with('success', 'Mahasiswa berhasil diperbarui');
     }
 
     // Menghapus data mahasiswa
     public function destroy(Mahasiswa $mahasiswa)
     {
         $mahasiswa->delete();
         return redirect()->route('data-mahasiswa')->with('success', 'Mahasiswa berhasil dihapus');
     }
}

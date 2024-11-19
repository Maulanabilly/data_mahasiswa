@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')
    <h2>Tambah Mahasiswa</h2>

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>

        <label for="nim">NIM:</label>
        <input type="text" name="nim" required><br>

        <label for="program_studi">Program Studi:</label>
        <input type="text" name="program_studi" required><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" required><br>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat"></textarea><br>

        <button type="submit">Simpan</button>
    </form>
@endsection

@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')
    <h2>Edit Mahasiswa</h2>

    <form action="{{ route('mahasiswa.update', $mahasiswa) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="{{ $mahasiswa->nama }}" required><br>

        <label for="nim">NIM:</label>
        <input type="text" name="nim" value="{{ $mahasiswa->nim }}" required><br>

        <label for="program_studi">Program Studi:</label>
        <input type="text" name="program_studi" value="{{ $mahasiswa->program_studi }}" required><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" value="{{ $mahasiswa->tanggal_lahir }}" required><br>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat">{{ $mahasiswa->alamat }}</textarea><br>

        <button type="submit">Update</button>
    </form>
@endsection

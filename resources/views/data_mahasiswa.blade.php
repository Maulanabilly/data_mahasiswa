@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')
    <h2>Data Mahasiswa</h2>

    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <a href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a>
    <div class="my-5">
    <table id="tabel-mahasiswa" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Program Studi</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->program_studi }}</td>
                    <td>{{ $item->tanggal_lahir }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.edit', $item) }}">Edit</a>
                        <form action="{{ route('mahasiswa.destroy', $item) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection

@push('css')
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
@endpush

@push('js')
    <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tabel-mahasiswa').DataTable(
            {
                responsive: true,
            }
        );
    });
</script>
@endpush
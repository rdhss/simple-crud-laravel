@extends('layout')

@section('content')
    <h1>Data Klien</h1>

    <a href="{{ route('kliens.create') }}">+ Tambah Klien</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Kode Klien</th>
                <th>Nama Klien</th>
                <th>Alamat</th>
                <th>PIC</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kliens as $klien)
            <tr>
                <td>{{ $klien->kode_klien }}</td>
                <td>{{ $klien->nama_klien }}</td>
                <td>{{ $klien->alamat }}</td>
                <td>{{ $klien->pic }}</td>
                <td>{{ $klien->email }}</td>
                <td>{{ $klien->no_hp }}</td>
                <td>
                    <a href="{{ route('kliens.edit', $klien->id) }}">Edit</a>
                    <form action="{{ route('kliens.destroy', $klien->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

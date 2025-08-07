@extends('layout')

@section('content')
    <h1>Tambah Klien</h1>

    <form action="{{ route('kliens.store') }}" method="POST">
        @csrf
        <input type="text" name="kode_klien" placeholder="Kode Klien"><br>
        <input type="text" name="nama_klien" placeholder="Nama Klien"><br>
        <input type="text" name="alamat" placeholder="Alamat"><br>
        <input type="text" name="pic" placeholder="PIC"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="text" name="no_hp" placeholder="No HP"><br>
        <button type="submit">Simpan</button>
    </form>
@endsection

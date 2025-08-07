@extends('layout')

@section('content')
    <h1>Edit Klien</h1>

    <form action="{{ route('kliens.update', $klien->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="nama_klien" value="{{ $klien->nama_klien }}" placeholder="Nama Klien"><br>
        <input type="text" name="alamat" value="{{ $klien->alamat }}" placeholder="Alamat"><br>
        <input type="text" name="pic" value="{{ $klien->pic }}" placeholder="PIC"><br>
        <input type="email" name="email" value="{{ $klien->email }}" placeholder="Email"><br>
        <input type="text" name="no_hp" value="{{ $klien->no_hp }}" placeholder="No HP"><br>
        <button type="submit">Update</button>
    </form>
@endsection

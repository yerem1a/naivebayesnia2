@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Klasifikasi Penyakit</h1>

    <form action="{{ route('klasifikasi.classify') }}" method="POST">
        @csrf <!-- Token CSRF untuk keamanan -->

        <!-- Pilih gejala yang dialami -->
        <div class="form-group">
            <label>Pilih Gejala:</label>
            <br>
            @foreach($gejalaList as $gejala)
                <label>
                    <input type="checkbox" name="gejala[]" value="G{{ $gejala->id }}">
                    {{ $gejala->gejala }}
                </label>
                <br>
            @endforeach
        </div>

        <!-- Tombol Submit -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Klasifikasikan</button>
        </div>
    </form>

    <!-- Hasil Klasifikasi -->
    @if(isset($hasilKlasifikasi))
        <h2>Hasil Klasifikasi:</h2>
        {{-- <p>Penyakit yang mungkin Anda alami adalah: {{ $hasilKlasifikasi->nama }}</p> --}}
        <p>Penyakit yang mungkin Anda alami adalah: {{ $hasilKlasifikasi['nama'] }}</p>

    @endif
</div>
@endsection

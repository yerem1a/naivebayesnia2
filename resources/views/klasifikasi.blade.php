@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Sistem Pakar Penyakit Kulit</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Pilih Gejala:</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <form action="{{ route('klasifikasi.classify') }}" method="POST">
        @csrf
        <!-- Token CSRF untuk keamanan -->
        <div class="form-group">
          @foreach($gejalaList as $gejala)
          <label class="font-weight-normal">
            <input type="checkbox" class="text-normal" name="gejala[]" value="G{{ $gejala->id }}">
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
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
@endsection

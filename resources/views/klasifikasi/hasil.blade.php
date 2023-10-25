@extends('layouts.app')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Hasil Sistem Pakar Penyakit Kulit</h1>
      </div>
    </div>
  </div>
</section>

<section class="content">
  <div class="card">
    <div class="card-body">
      @if(isset($hasilKlasifikasi))
        <h4 class="mb-5 mt-3">Hasil Sistem Pakar Anda adalah: <strong>{{ $hasilKlasifikasi }}</strong></h4>
      @endif
      
      @if(isset($persentaseTerkenaPenyakit))
        <h4 class="mb-3 mt-3">Persentase Terkena Penyakit: <strong>{{ $persentaseTerkenaPenyakit }}%</strong></h4>
        <div class="progress" style="height: 30px;">
          <div class="progress-bar" role="progressbar" style="width: {{ $persentaseTerkenaPenyakit }}%;" aria-valuenow="{{ $persentaseTerkenaPenyakit }}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      @endif

      <a href="/" class="btn btn-secondary mt-3">Kembali</a>
    </div>
  </div>
</section>
@endsection

@extends('layouts.app')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Hasil Klasifikasi Penyakit Kulit</h1>
      </div>
    </div>
  </div>
</section>

<section class="content">
  <div class="card">
    <div class="card-body">
      <h4 class="mb-5 mt-3">Hasil klasifikasi Anda adalah: <strong>{{ $hasilKlasifikasi }}</strong></h4>
      <a href="/" class="btn btn-secondary">Kembali</a>
    </div>
  </div>
</section>
@endsection

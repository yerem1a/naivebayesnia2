@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-3">
                <div class="card">
                    <div class="card-header">Riwayat Gejala</div>

                    <div class="card-body">
                        @if($riwayat_gejala->isEmpty())
                            <p>Tidak ada riwayat gejala.</p>
                        @else
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Gejala</th>
                                        <th>Hasil Klasifikasi</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($riwayat_gejala as $riwayat)
                                        <tr>
                                            <td>{{ implode(', ', json_decode($riwayat->gejala)) }}</td>
                                            <td>{{ $riwayat->hasil }}</td>
                                            <td>{{ $riwayat->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                        <div class="form-group">
                          {{-- <button type="submit" class="btn btn-primary">Diagnosa</button> --}}
                          <a href="{{ route('klasifikasi') }}" class="btn btn-primary">Diagnosa</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

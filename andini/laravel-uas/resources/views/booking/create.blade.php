@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Tambah Data Booking</h3>
        <form action="{{ url('/booking') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Id Perawatan</label>
                <input type="text" class="form-control" name="booking_id_perawatan" value="{{ $row->booking_id_perawatan }}"></>
            </div>
            <div class="mb-3">
                <label>Tanggal Booking</label>
                <input type="text" class="form-control" name="booking_tgl" value="{{ $row->booking_tgl }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection

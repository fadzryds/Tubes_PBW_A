@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/description.css') }}">
<link rel="stylesheet" href="{{ asset('css/booking.css') }}">
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">

<header class="navbar">
        <div class="logo">D'Delfar</div>
    
        <nav class="nav-menu">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('sparepart') }}">Sparepart</a>
            <a href="{{ url('service') }}">Service</a>
            <a href="{{ url('/') }}">About</a>
        </nav>
    
        <div class="auth-buttons">
            <a href="#" class="btn-register">Register</a>
            <a href="#" class="btn-login">Log in</a>
        </div>
</header>

<div class="detail-container">

    <a href="{{ url('/service') }}" class="back-btn">←</a>

    <div>
        <h2>Booking Service</h2>
        <p>Silakan lengkapi formulir di bawah ini untuk melakukan booking service motor Anda. Tim kami akan menghubungi Anda untuk konfirmasi jadwal dan detail lainnya.</p>
    </div>

    <div class="card">
        <div class="booking-c">
            <div class="card-body">
        <h5 class="card-title">D'Delfar Booking</h5>
        <form>
            <div class="mb-3">
                <label for="nomorKendaraan" class="form-label">Nomor Kendaraan</label>
                <br>
                <input type="text" class="form-control" id="nomorKendaraan" placeholder="Masukkan nomor kendaraan">
            </div>
            <div class="mb-3">
                <label for="tipeKendaraan" class="form-label">Tipe Kendaraan</label>
                <br>
                <input type="text" class="form-control" id="tipeKendaraan" placeholder="Masukkan tipe kendaraan">
            </div>
            <div class="mb-3">
                <label for="tanggalBooking" class="form-label">Tanggal Booking</label>
                <br>
                <input type="date" class="form-control" id="tanggalBooking">
            </div>
            <div class="Button d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Booking</button>
            </div>
        </form>
    </div>
        </div>
    </div>

    <div class="card-history">
        <h5 class="card-title">D'Delfar Booking</h5>
        <form>
            <div class="mb-3">
                <label for="nomorKendaraan" class="form-label">Nomor Kendaraan</label>
                <br>
                <input type="text" class="form-control" id="nomorKendaraan" placeholder="Masukkan nomor kendaraan">
            </div>
            <div class="mb-3">
                <label for="tipeKendaraan" class="form-label">Tipe Kendaraan</label>
                <br>
                <input type="text" class="form-control" id="tipeKendaraan" placeholder="Masukkan tipe kendaraan">
            </div>
            <div class="mb-3">
                <label for="tanggalBooking" class="form-label">Tanggal Booking</label>
                <br>
                <input type="date" class="form-control" id="tanggalBooking">
            </div>
            <div class="Button d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Booking</button>
            </div>
        </form>
    </div>
</div>


</div>

@endsection

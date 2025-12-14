@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/description.css') }}">
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

    <a href="{{ url('/sparepart') }}" class="back-btn">←</a>

    <div class="detail-card">

        <div class="detail-left">
            <img src="{{ asset('images/'.$sparepart['image']) }}" class="detail-img">
        </div>

        <div class="detail-right">
            <h2>{{ $sparepart['name'] }}</h2>
            <p class="price">Rp. {{ number_format($sparepart['price'], 0, ',', '.') }}</p>

            <div class="qty-box">
                <button class="qty-btn">-</button>
                <span>1</span>
                <button class="qty-btn">+</button>
            </div>

            <button class="cart-btn">🛒 Keranjang</button>
        </div>

    </div>

    <div class="description-box">
        <h3>Deskripsi</h3>
        <p>{{ $sparepart['description'] }}</p>
    </div>

    <h2 class="other-title">Sparepart Lainnya</h2>

    <div class="other-grid">

        @foreach($otherSpareparts as $item)
        <div class="other-card">
            <img src="{{ asset('images/'.$item['image']) }}">
            <h4>{{ $item['name'] }}</h4>
            <p class="price-small">Rp. {{ number_format($item['price'], 0, ',', '.') }}</p>

            <a href="{{ route('sparepart.show', $item['id']) }}" class="btn-other">
                Booking
            </a>
        </div>
        @endforeach

    </div>

</div>

@endsection

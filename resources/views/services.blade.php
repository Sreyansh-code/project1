@extends('layout')

@php
    $pageTitle = 'Services';
    $pageHeading = 'Services Page';
    $brandName = 'Our Services';
@endphp

@section('content')
    <section class="site-card">
        <header class="topbar">
            <div class="brand">{{ $brandName }}</div>
            <nav class="topnav">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a class="active" href="{{ route('services') }}">Services</a>
                <a href="{{ route('blog') }}">Blog</a>
                <a href="{{ route('contact') }}">Contact</a>
            </nav>
        </header>

        <section class="content-area centered-copy">
            <h2>Our Services</h2>
            <p>We build modern Laravel websites, admin panels, and business applications.</p>
        </section>
    </section>
@endsection

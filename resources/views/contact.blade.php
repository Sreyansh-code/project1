@extends('layout')

@php
    $pageTitle = 'Contact';
    $pageHeading = 'Contact Page';
    $brandName = 'Contact Us';
@endphp

@section('content')
    <section class="site-card">
        <header class="topbar">
            <div class="brand">{{ $brandName }}</div>
            <nav class="topnav">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('services') }}">Services</a>
                <a href="{{ route('blog') }}">Blog</a>
                <a class="active" href="{{ route('contact') }}">Contact</a>
            </nav>
        </header>

        <section class="content-area centered-copy">
            <h2>Contact</h2>
            <p>Email us at hello@mylaravelapp.test or visit our office for a quick discussion.</p>
        </section>
    </section>
@endsection

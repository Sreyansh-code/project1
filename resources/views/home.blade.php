@extends('layout')

@php
    $pageTitle = 'Home Page';
    $pageHeading = 'Home Page';
    $brandName = 'My Laravel App';
@endphp

@section('content')
    <section class="site-card">
        <header class="topbar">
            <div class="brand">{{ $brandName }}</div>
            <nav class="topnav">
                <a class="active" href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('services') }}">Services</a>
                <a href="{{ route('blog') }}">Blog</a>
                <a href="{{ route('contact') }}">Contact</a>
            </nav>
        </header>

        <section class="hero">
            <h2>Welcome to My Laravel App!</h2>
            <p>Build Amazing Web Applications with Laravel.</p>
            <a class="primary-button" href="{{ route('about') }}">Get Started</a>
        </section>

        <section class="feature-grid">
            <article class="feature-card">
                <h3>Feature 1</h3>
                <p>Brief description here.</p>
            </article>
            <article class="feature-card">
                <h3>Feature 2</h3>
                <p>Brief description here.</p>
            </article>
            <article class="feature-card">
                <h3>Feature 3</h3>
                <p>Brief description here.</p>
            </article>
        </section>
    </section>
@endsection

@extends('layout')

@php
    $pageTitle = 'About Page';
    $pageHeading = 'About Page';
    $brandName = 'About Us';
@endphp

@section('content')
    <section class="site-card">
        <header class="topbar">
            <div class="brand">{{ $brandName }}</div>
            <nav class="topnav">
                <a href="{{ route('home') }}">Home</a>
                <a class="active" href="{{ route('about') }}">About</a>
                <a href="{{ route('services') }}">Services</a>
                <a href="{{ route('blog') }}">Blog</a>
                <a href="{{ route('contact') }}">Contact</a>
            </nav>
        </header>

        <section class="content-area content-area--about">
            <h2 class="section-heading section-heading--lined">Learn More About Our Company</h2>

            <div class="about-grid">
                <section class="panel">
                    <h3>Our Mission</h3>
                    <p>To provide the best services.</p>
                </section>

                <section class="panel">
                    <h3>Our Team</h3>
                    <div class="team-grid">
                        <article class="team-member">
                            <div class="avatar avatar-john"></div>
                            <h4>John</h4>
                            <p>CEO</p>
                        </article>
                        <article class="team-member">
                            <div class="avatar avatar-sarah"></div>
                            <h4>Sarah</h4>
                            <p>Designer</p>
                        </article>
                        <article class="team-member">
                            <div class="avatar avatar-mike"></div>
                            <h4>Mike</h4>
                            <p>Developer</p>
                        </article>
                    </div>
                </section>
            </div>
        </section>
    </section>
@endsection

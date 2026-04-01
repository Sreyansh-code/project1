@extends('layout')

@php
    $pageTitle = 'Blog Page';
    $pageHeading = 'Blog Page';
    $brandName = 'Our Blog';
@endphp

@section('content')
    <section class="site-card">
        <header class="topbar">
            <div class="brand">{{ $brandName }}</div>
            <nav class="topnav">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('services') }}">Services</a>
                <a class="active" href="{{ route('blog') }}">Blog</a>
                <a href="{{ route('contact') }}">Contact</a>
            </nav>
        </header>

        <section class="content-area">
            <div class="blog-grid">
                <div class="posts-list">
                    <article class="post-card">
                        <h3>Post Title 1</h3>
                        <p>Excerpt of the first blog post.</p>
                        <a class="small-button" href="#">Read More</a>
                    </article>
                    <article class="post-card">
                        <h3>Post Title 2</h3>
                        <p>Excerpt of the second blog post.</p>
                        <a class="small-button" href="#">Read More</a>
                    </article>
                    <article class="post-card post-card--last">
                        <h3>Post Title 3</h3>
                        <p>Excerpt of the third blog post.</p>
                        <a class="small-button" href="#">Read More</a>
                    </article>
                </div>

                <aside class="sidebar">
                    <section class="sidebar-section">
                        <h3>Categories</h3>
                        <ul>
                            <li>Laravel</li>
                            <li>PHP</li>
                            <li>Tips</li>
                        </ul>
                    </section>

                    <section class="sidebar-section">
                        <h3>Recent Posts</h3>
                        <ul>
                            <li>Post 1</li>
                            <li>Post 2</li>
                            <li>Post 3</li>
                        </ul>
                    </section>
                </aside>
            </div>
        </section>
    </section>
@endsection

@extends('layout')

@php
    $pageTitle = 'Dashboard Page';
    $pageHeading = 'Dashboard Page';
@endphp

@section('content')
    <section class="site-card dashboard-card">
        <header class="topbar topbar--dashboard">
            <div class="brand">Admin Dashboard</div>
            <div class="dashboard-icons">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </header>

        <div class="dashboard-layout">
            <aside class="dashboard-sidebar">
                <a class="dashboard-link active" href="{{ route('dashboard') }}">Dashboard</a>
                <a class="dashboard-link" href="#">Users</a>
                <a class="dashboard-link" href="#">Posts</a>
                <a class="dashboard-link" href="#">Settings</a>
                <a class="dashboard-link" href="#">Logout</a>
            </aside>

            <section class="dashboard-main">
                <div class="stats-grid">
                    <article class="stat-card">
                        <h3>Total Users</h3>
                        <strong>120</strong>
                    </article>
                    <article class="stat-card">
                        <h3>Total Posts</h3>
                        <strong>45</strong>
                    </article>
                    <article class="stat-card">
                        <h3>New Comments</h3>
                        <strong>12</strong>
                    </article>
                </div>

                <div class="dashboard-panels">
                    <section class="panel">
                        <h3>Recent Users</h3>
                        <ul class="simple-list">
                            <li>Amit</li>
                            <li>Neha</li>
                            <li>Ravi</li>
                        </ul>
                    </section>

                    <section class="panel">
                        <h3>Latest Posts</h3>
                        <div class="post-status-list">
                            <div class="post-status-row">
                                <span>Laravel Tips</span>
                                <span class="status-text">Publish</span>
                                <span class="status-badge">Edit</span>
                            </div>
                            <div class="post-status-row">
                                <span>New Features</span>
                                <span class="status-text">Draft</span>
                                <span class="status-badge">Edit</span>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </div>
    </section>
@endsection

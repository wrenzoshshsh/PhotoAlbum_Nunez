@extends('layouts.app')

@section('content')
<div class="home-main">
    <h2 class="cover-heading">Welcome to Nunez Album</h2>
    <p class="cover-subtitle">
        A sweet digital scrapbook with Animals, Country, Foods, Flowers, and Formula 1.
    </p>

    <div class="cover-links">
        <a href="{{ route('page1') }}" class="cover-btn">Page 1 — 🐾 Animals</a>
        <a href="{{ route('page2') }}" class="cover-btn">Page 2 — 🏞️ Country</a>
        <a href="{{ route('page3') }}" class="cover-btn">Page 3 — 🍰 Foods</a>
        <a href="{{ route('page4') }}" class="cover-btn">Page 4 — 🌸 Flowers</a>
        <a href="{{ route('page5') }}" class="cover-btn">Page 5 — Formula 1</a>
    </div>
</div>
@endsection
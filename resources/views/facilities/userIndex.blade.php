@extends('layouts.app')

@section('content')
<div class="football-container">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        .football-container {
            background-color: #B8E2BB;
            min-height: 100%;
            padding: 2rem;
            font-family: 'Inter', sans-serif;
        }

        .field-header {
            padding: 1rem;
            margin-bottom: 2rem;
            text-align: left;
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .field-header h1 {
            color: #245024;
            font-size: 2rem;
            text-transform: uppercase;
            margin: 0;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .facilities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            padding: 1rem;
        }

        .facility-card {
            background: #2E7D32;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
            transition: transform 0.2s;
            display: flex;
            flex-direction: column;
        }

        .facility-card:hover {
            transform: translateY(-5px);
        }

        .facility-image {
            width: 100%;
            height: 200px;
            overflow: hidden;
            position: relative;
        }

        .facility-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .facility-name {
            font-size: 1.25rem;
            color: white;
            margin: 1rem;
            font-weight: 600;
            text-decoration: none;
        }

        .facility-name:hover {
            color: #E0E0E0;
        }

        a {
            text-decoration: none;
        }

        .facility-info {
            margin: 0.5rem 1rem;
            color: #E0E0E0;
            font-size: 0.9rem;
            font-weight: 400;
        }
    </style>

    <div class="field-header">
        <div class="header-container">
            <h1>Sports Facilities</h1>
        </div>
    </div>

    <div class="facilities-grid">
        @foreach ($facilities as $facility)
        <a href="{{route("review.ownerComment")}}"><div class="facility-card">
             <!-- Facility Image -->
             <div class="facility-image">
                @if (!empty($photos) && is_array($photos) && isset($photos[0]))
                    <img src="{{ asset('storage/' . $photos[0]) }}" alt="{{ $facility->name }}">
                @else
                    <img src="{{ asset('images/placeholder.png') }}" alt="No Image Available">
                @endif
            </div>
            <div class="facility-name">{{ $facility->name }}</div>
            <div class="facility-info">📍 {{ $facility->location }}</div>
            <div class="facility-info">🏆 {{ $facility->available_sports }}</div>
            <div class="facility-info">💰 ${{ number_format($facility->pricing, 2) }}/hr</div>
        </div></a>
        @endforeach
    </div>
</div>
@endsection

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
            background: #1b501e;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .field-header h1 {
            color: white;
            font-size: 2.5rem;
            text-transform: uppercase;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin: 0;
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
            padding-bottom: 1rem;
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

        .facility-details-box {
            background: white;
            margin: 0 1rem;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .facility-info {
            color: #2E7D32;
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .facility-info:last-child {
            margin-bottom: 0;
        }

        a {
            text-decoration: none;
        }
    </style>

    <div class="field-header">
        <div class="header-container">
            <h1>Sports Facilities</h1>
        </div>
    </div>

    <div class="facilities-grid">
        @foreach ($facilities as $facility)
        <a href="{{ route('review.customerComment', ['id' => $facility->id]) }}">
            <div class="facility-card">
                <!-- Facility Image -->
                <div class="facility-image">
                    @if (!empty($photos) && is_array($photos) && isset($photos[0]))
                        <img src="{{ asset('storage/' . $photos[0]) }}" alt="{{ $facility->name }}">
                    @else
                        <img src="{{ asset('images/placeholder.png') }}" alt="No Image Available">
                    @endif
                </div>
                <div class="facility-name">{{ $facility->name }}</div>
                <div class="facility-details-box">
                    <div class="facility-info">📍 {{ $facility->location }}</div>
                    <div class="facility-info">🏆 {{ $facility->available_sports }}</div>
                    <div class="facility-info">💰 ${{ number_format($facility->pricing, 2) }}/hr</div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection

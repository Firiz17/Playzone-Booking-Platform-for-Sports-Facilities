@extends('layouts.app')

@section('content')
<div class="football-container">
    <style>
        .football-container {
            background: linear-gradient(#2E7D32, #1B5E20);
            min-height: 100%;
            padding: 2rem;
        }

        .field-header {
            background: #388E3C;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
            border: 2px solid #4CAF50;
        }

        .facility-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 8px;
            background: #4CAF50;
            border-radius: 8px 8px 0 0;
        }

        .facility-name {
            font-size: 1.5rem;
            color: #2E7D32;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        .facility-info {
            margin-bottom: 0.5rem;
            color: #555;
        }



    <div class="facilities-grid">
        @foreach ($facilities as $facility)
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
            <div class="facility-info">📍 {{ $facility->location }}</div>
            <div class="facility-info">🏆 {{ $facility->available_sports }}</div>
            <div class="facility-info">💰 ${{ number_format($facility->pricing, 2) }}/hr</div>

        </div>
        @endforeach
    </div>
</div>
@endsection

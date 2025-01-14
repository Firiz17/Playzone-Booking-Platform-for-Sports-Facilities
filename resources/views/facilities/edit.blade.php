@extends('layouts.app')

@section('content')
<div class="football-container">
    <style>
        .football-container {
            background: linear-gradient(0deg, #2E7D32 0%, #388E3C 100%);
            min-height: 100vh;
            padding: 2rem;
            position: relative;
        }

        /* Field markings */
        .football-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            height: 100%;
            width: 4px;
            background-color: rgba(255, 255, 255, 0.4);
            transform: translateX(-50%);
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 2rem;
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .form-header {
            color: #1B5E20;
            text-align: center;
            font-size: 2rem;
            margin-bottom: 2rem;
            font-weight: bold;
            text-transform: uppercase;
            border-bottom: 3px solid #1B5E20;
            padding-bottom: 1rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-label {
            display: block;
            color: #1B5E20;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #4CAF50;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: #1B5E20;
            box-shadow: 0 0 0 3px rgba(27, 94, 32, 0.2);
        }

        .submit-btn {
            background-color: #1B5E20;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #2E7D32;
        }

        .back-btn {
            background: #FFC107;
            color: #000;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 1.5rem;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .back-btn:hover {
            background: #FFB300;
        }

        .current-photos {
            margin-top: 1.5rem;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 1.5rem;
            padding: 1rem;
            background: rgba(46, 125, 50, 0.1);
            border-radius: 8px;
        }

        .photo-preview {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
            border: 3px solid #4CAF50;
            transition: transform 0.3s ease;
        }

        .photo-preview:hover {
            transform: scale(1.05);
        }

        /* Field yard lines */
        .yard-lines {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
        }

        .yard-line {
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: rgba(255, 255, 255, 0.3);
        }


    </style>

    <div class="yard-lines">
        @for ($i = 1; $i <= 10; $i++)
            <div class="yard-line"></div>
        @endfor
    </div>

    <div class="form-container">
        <h1 class="form-header">Edit Facility</h1>

        <form action="{{ route('facilities.update', $facility->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label class="form-label" for="name">Facility Name:</label>
                <input class="form-input" type="text" id="name" name="name" value="{{ $facility->name }}" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="location">Location:</label>
                <input class="form-input" type="text" id="location" name="location" value="{{ $facility->location }}" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="available_sports">Available Sports:</label>
                <input class="form-input" type="text" id="available_sports" name="available_sports" value="{{ $facility->available_sports }}" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="pricing">Pricing:</label>
                <input class="form-input" type="number" step="0.01" id="pricing" name="pricing" value="{{ $facility->pricing }}" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="photos">Add New Photos:</label>
                <input class="form-input" type="file" id="photos" name="photos[]" multiple>
            </div>

            <button type="submit" class="submit-btn">Update Facility</button>
        </form>
    </div>
</div>
@endsection

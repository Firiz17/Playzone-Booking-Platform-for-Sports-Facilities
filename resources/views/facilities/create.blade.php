@extends('layouts.app')

@section('content')
<div class="football-container">
    <style>
        .form-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-header {
            text-align: center;
            color: #2E7D32;
            font-size: 2rem;
            margin-bottom: 2rem;
            text-transform: uppercase;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            color: #2E7D32;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #4CAF50;
            border-radius: 6px;
            font-size: 1rem;
            color: black;
        }

        .form-input:focus {
            outline: none;
            border-color: #2E7D32;
            box-shadow: 0 0 0 3px rgba(76, 175, 80, 0.2);
        }

        .submit-btn {
            background: #4CAF50;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 6px;
            font-size: 1.1rem;
            cursor: pointer;
            width: 100%;
            text-transform: uppercase;
            font-weight: bold;
            transition: background-color 0.2s;
        }

        .submit-btn:hover {
            background: #2E7D32;
        }
    </style>

    <div class="form-container">
        <h1 class="form-header">Add New Facility</h1>

        <form action="{{ route('facilities.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="form-label" for="name">Facility Name:</label>
                <input class="form-input" type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="location">Location:</label>
                <input class="form-input" type="text" id="location" name="location" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="available_sports">Available Sports:</label>
                <input class="form-input" type="text" id="available_sports" name="available_sports" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="pricing">Pricing:</label>
                <input class="form-input" type="number" step="0.01" id="pricing" name="pricing" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="photos">Photos:</label>
                <input class="form-input" type="file" id="photos" name="photos[]" multiple>
            </div>

            <button type="submit" class="submit-btn">Add Facility</button>
        </form>
    </div>
</div>
@endsection

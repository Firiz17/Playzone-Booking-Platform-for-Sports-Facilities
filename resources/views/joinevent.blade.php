@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Join Event</h1>
        <form action="{{ route('joinevent.store') }}" method="POST">
            @csrf
            <input type="hidden" name="event_id" value="{{ $event['id'] }}">
            
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
            
            <label for="team">Team Name</label>
            <input type="text" id="team" name="team" placeholder="Enter your team name (optional)">

            <button type="submit">SUBMIT</button>
        </form>
        
        @if (session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
        @endif
    </div>

    <style>
        .container {
            flex: 1;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(227, 255, 210, 0.85);
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(8px);
            max-width: 600px;
        }

        h1 {
            text-align: center;
            color: rgb(255, 255, 255);
            font-family: 'Playfair Display', serif;
            font-size: 30px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            font-weight: 600;
            color: #2E7D32;
            font-size: 16px;
        }

        input, select, button {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        input:focus, select:focus {
            outline: none;
            border: 1px solid #2E7D32;
            box-shadow: 0 0 5px rgba(46, 125, 50, 0.7);
        }

        button {
            background-color: #2E7D32;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            padding: 12px;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #1B5E20;
        }

        .success-message {
            color: #2E7D32;
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
            font-weight: 600;
        }
    </style>
@endsection

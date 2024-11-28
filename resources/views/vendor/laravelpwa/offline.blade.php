@extends('layouts.app')

@section('content')
    <div class="offline-page">
        <div style="text-align: center; padding: 50px; font-family: Arial, sans-serif;">
            <img src="{{ asset('/images/icons/icon-72x72.png') }}" alt="Offline"
                style="max-width: 300px; margin-bottom: 20px;">
            <h1 style="color: #FF5733; font-size: 2.5rem; margin-bottom: 10px;">Oops! You are offline.</h1>
            <p style="font-size: 1.2rem; color: #555; margin-bottom: 20px;">
                It seems like you are not connected to the internet. Please check your network connection.
            </p>
            <button onclick="window.location.reload()"
                style="background-color: #007BFF; color: white; padding: 10px 20px; font-size: 1rem; border: none; border-radius: 5px; cursor: pointer;">
                Retry
            </button>
            <p style="margin-top: 30px; font-size: 1rem; color: #888;">
                If the issue persists, try reconnecting to your Wi-Fi or checking your modem.
            </p>
            <div style="margin-top: 40px;">
                <a href="/" style="text-decoration: none; color: #007BFF; font-size: 1.1rem;">Go back to Home</a>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.main')

@section('title', 'Contact')

@section('content')
    <h1>Contact Us</h1>
    <p>If you have any questions, feel free to reach out to us using the form below.</p>
    <form action="#" method="post" style="display: flex; flex-direction: column; gap: 10px; max-width: 400px;">
        @csrf <!-- Protección contra ataques CSRF -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Your Name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Your Email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" placeholder="Your Message" required></textarea>

        <button type="submit" style="padding: 10px; background-color: #007BFF; color: white; border: none; border-radius: 5px;">Send</button>
    </form>
@endsection

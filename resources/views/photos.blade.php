@extends('layouts.main')

@section('title', 'Photos')

@section('content')
    <h1>Photo Gallery</h1>
    <p>Welcome to the photo section. Here you can find a collection of beautiful images.</p>
    <div style="display: flex; gap: 10px; flex-wrap: wrap;">
        <img src="https://via.placeholder.com/150" alt="Photo 1" style="border: 1px solid #ccc; padding: 5px;">
        <img src="https://via.placeholder.com/150" alt="Photo 2" style="border: 1px solid #ccc; padding: 5px;">
        <img src="https://via.placeholder.com/150" alt="Photo 3" style="border: 1px solid #ccc; padding: 5px;">
    </div>
@endsection

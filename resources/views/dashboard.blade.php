@extends('layouts.app')

@section('title', 'Dashboard - Movie Trailer')

@section('contents')
  <div class="row">
    <div class="col-md-6">
      <h2>Social Media Links</h2>
      <ul>
        <li><a href="https://www.facebook.com">Facebook</a></li>
        <li><a href="https://www.Tiktok.com">TikTok</a></li>
        <li><a href="https://www.youtube.com">YouTube</a></li>
        <li><a href="https://www.google.com">Google</a></li>
        <li><a href="https://github.com">GitHub</a></li>
      </ul>
    </div>
    <div class="col-md-6">
      <h2>Movie Trailer</h2>
      
      <!-- Display videos here -->
      <video width="80%" controls>
        <source src="{{ asset('videos/Rus.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <!-- Display videos here -->
      <video width="80%" controls>
        <source src="{{ asset('videos/Chris.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
  </div>
@endsection

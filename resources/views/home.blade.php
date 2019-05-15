@extends('master')

@section('title', 'Ryan Showalter')

@section('content')

<div id="home-content" class="container text-center" style="margin-top: 5vh;">
    <img id="profile-image" class="profile" src="{{ asset('img/profile.png') }}" alt="a picture of
        myself">
    <p class="lead">Hello! Welcome to my website! I'm still working on putting things together 
    here. I'm excited to add a blog to this site, so I can share my experience with making
    this project, as well as others!</p>
</div> 

@endsection

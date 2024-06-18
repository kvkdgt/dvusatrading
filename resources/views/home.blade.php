@extends('theme')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/home.css'); }} ">
<div class="home-container"> 
    <div class="hero-section">
        <img src="{{ URL::asset('assets/imgs/wallpaper.webp'); }}" alt="">
        <div class="manage-opacity"></div>
        <div class="hero-text">
            <div class="hero-text-content">
                <div class="hero-text-heading">DV USA Trading Company</div>
                <div class="hero-text-sub-heading">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>

            </div>
        </div>
    </div>
    <div class="about-us-section">
        <div class="left-about-us">
            <img src="{{ URL::asset('assets/imgs/about.jpg'); }}" alt="">
        </div>
        <div class="right-about-us">
            <div class="section-heading-container">
            <div class="section-heading">
                ABOUT US
            </div>
            <div class="section-heading-line"></div>
            <div class="about-us-content-for-section">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
            <div class="about-us-content-for-section">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('theme')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/home.css'); }} ">
<div class="home-container">

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

    <div class="contact-in-about">
        <div class="text-contact-in-about">
        Reach out to us for personalized assistance and exceptional service. <a href="{{ env('APP_URL') }}contact-us"> Click here</a> to contact us!
        </div>
    </div>
 
</div>

@endsection
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
                At DVUSA Trading, our mission is to lead the scrap trading industry through a relentless pursuit of excellence. We uphold our values of integrity, innovation, and sustainability at every step, ensuring that we not only meet but exceed the expectations of our global partners. By fostering trust and reliability, we have solidified our position as a preferred and respected entity in the marketplace. Our commitment to sustainable practices underscores our responsibility towards the environment and future generations, driving us to continually innovate and improve.
                </div>
                <div class="about-us-content-for-section">
                Our mission at DVUSA Trading is to revolutionize the scrap trading landscape by delivering unparalleled service and reliability. We strive to create value for our clients and stakeholders while adhering to the highest standards of ethical business practices.
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
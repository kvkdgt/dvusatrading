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
                <div class="hero-text-sub-heading">At DVUSA Trading, our mission is to lead the scrap trading industry through a relentless pursuit of excellence. We uphold our values of integrity, innovation, and sustainability at every step, ensuring that we not only meet but exceed the expectations of our global partners. By fostering trust and reliability, we have solidified our position as a preferred and respected entity in the marketplace. Our commitment to sustainable practices underscores our responsibility towards the environment and future generations, driving us to continually innovate and improve.</div>

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
                At DVUSA Trading, our mission is to lead the scrap trading industry through a relentless pursuit of excellence. We uphold our values of integrity, innovation, and sustainability at every step, ensuring that we not only meet but exceed the expectations of our global partners. By fostering trust and reliability, we have solidified our position as a preferred and respected entity in the marketplace. Our commitment to sustainable practices underscores our responsibility towards the environment and future generations, driving us to continually innovate and improve.
                </div>
                <div class="about-us-content-for-section">
                Our mission at DVUSA Trading is to revolutionize the scrap trading landscape by delivering unparalleled service and reliability. We strive to create value for our clients and stakeholders while adhering to the highest standards of ethical business practices.
                </div>
            </div>
        </div>
    </div>
    <?php if(!$categories->isEmpty() && $categories->count() == 4) {?> 
    <div class="product-categories">
        <div class="product-categories-heading">
            <div class="section-heading">
                PRODUCT CATEGORIES
            </div>
            <div class="section-heading-line"></div>
            <div class="product-category-content">
                
            @foreach ($categories as $category)
                <div class="product-category-item">
                    <div class="svg-product">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                            <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0z" />
                        </svg>
                    </div>
                    <div class="product-title">{{ $category->name }}</div>
                    <div class="product-detail">{{ $category->description }}</div>
                </div>
                @endforeach
               

               
            </div>
        </div>
    </div>
    <?php }?>
    <div class="contact-container" id="contact-us">
        <div class="contact-info">
            <h2>Let's talk</h2>
            <p>To request a quote or want to meet up for coffee, contact us directly or fill out the form and we will get back to you promptly.</p>
            <div class="contact-details-svg">
                <!-- <img src="{{ URL::asset('assets/imgs/contact.svg'); }}" alt=""> -->
            </div>

        </div>
        <div class="contact-form">
                <form id="contactForm" method="POST" action="{{ route('enquiry.store') }}">
                    @csrf
                    <input type="text" id="name" name="name" placeholder="Your Name" value="{{ old('name') }}">
                    <span class="error" id="nameError">Please enter your name</span>

                    <input type="email" id="email" name="email" placeholder="Your Email" value="{{ old('email') }}">
                    <span class="error" id="emailError">Please enter a valid email address</span>

                    <input type="text" id="contactNumber" name="contactNumber" placeholder="Your Contact Number" value="{{ old('contactNumber') }}">
                    <span class="error" id="contactError">Please enter a valid contact number</span>

                    <textarea id="message" name="message" placeholder="Your Message">{{ old('message') }}</textarea>
                    <span class="error" id="messageError">Please enter your message</span>

                    <button type="submit">Send Message</button>
                </form>
            </div>
    </div>
</div>
<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        // Clear previous error messages
        document.querySelectorAll('.error').forEach(function(el) {
            el.style.display = 'none';
        });
        document.querySelectorAll('input, textarea').forEach(function(el) {
            el.classList.remove('input-error');
        });


        let valid = true;

        // Validate name
        const name = document.getElementById('name').value;
        if (!name) {
            document.getElementById('nameError').style.display = 'inline';
            document.getElementById('name').classList.add('input-error');
            valid = false;
        }

        // Validate email
        const email = document.getElementById('email').value;
        const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if (!email || !email.match(emailPattern)) {
            document.getElementById('emailError').style.display = 'inline';
            document.getElementById('email').classList.add('input-error');
            valid = false;
        }

        // Validate contact number
        const contactNumber = document.getElementById('contactNumber').value;
        const contactPattern = /^[0-9]+$/;
        if (!contactNumber || !contactNumber.match(contactPattern)) {
            document.getElementById('contactError').style.display = 'inline';
            document.getElementById('contactNumber').classList.add('input-error');
            valid = false;
        }

        // Validate message
        const message = document.getElementById('message').value;
        if (!message) {
            document.getElementById('messageError').style.display = 'inline';
            document.getElementById('message').classList.add('input-error');
            valid = false;
        }

        if (!valid) {
            event.preventDefault();
        }

        function showSuccessMessage() {
            document.getElementById('successMessage').style.display = 'block';
        }

        function closeSuccessMessage() {
            document.getElementById('successMessage').style.display = 'none';
        }
        document.querySelectorAll('input, textarea').forEach(function(el) {
            el.addEventListener('input', function() {
                el.classList.remove('input-error');
                const errorId = el.id + 'Error';
                document.getElementById(errorId).style.display = 'none';
            });
        });
    });

    // Clear error messages on input change
    document.getElementById('name').addEventListener('input', function() {
        document.getElementById('nameError').style.display = 'none';
    });

    document.getElementById('email').addEventListener('input', function() {
        document.getElementById('emailError').style.display = 'none';
    });

    document.getElementById('contactNumber').addEventListener('input', function() {
        document.getElementById('contactError').style.display = 'none';
    });

    document.getElementById('message').addEventListener('input', function() {
        document.getElementById('messageError').style.display = 'none';
    });

    function showSuccessMessage() {
        document.getElementById('successMessage').style.display = 'block';
        setTimeout(function() {
            closeSuccessMessage();
        }, 3000); // Hide after 3 seconds (3000 milliseconds)
    }

    // Function to close the success message
    function closeSuccessMessage() {
        document.getElementById('successMessage').style.display = 'none';
    }

    // Show the success message if it's set in the session
    @if(session('success'))
    showSuccessMessage();
    @endif
</script>
@endsection
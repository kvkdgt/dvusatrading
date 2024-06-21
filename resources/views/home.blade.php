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
    <div class="product-categories">
        <div class="product-categories-heading">
            <div class="section-heading">
                PRODUCT CATEGORIES
            </div>
            <div class="section-heading-line"></div>
            <div class="product-category-content">
                <div class="product-category-item">
                    <div class="svg-product">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                            <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1 1 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4 4 0 0 1-.128-1.287z" />
                            <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z" />
                        </svg>
                    </div>
                    <div class="product-title">Ferrous Metals</div>
                    <div class="product-detail">Cut steel scrap, regular, irregular flats and long steel dumpings, machined scrap.</div>
                </div>

                <div class="product-category-item">
                    <div class="svg-product">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                            <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0z" />
                        </svg>
                    </div>
                    <div class="product-title">Non Ferrous Metals</div>
                    <div class="product-detail">Shredded and machined scrap, radiator scrap, copper tubings and flats, cables, mag wheels.</div>
                </div>

                <div class="product-category-item">
                    <div class="svg-product">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
                        </svg>
                    </div>
                    <div class="product-title">Paper & Plastic</div>
                    <div class="product-detail">Magazine print, News print, Kraft paper, packaging material, printed and non-printed kraft paper.</div>
                </div>

                <div class="product-category-item">
                    <div class="svg-product">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bootstrap-reboot" viewBox="0 0 16 16">
                            <path d="M1.161 8a6.84 6.84 0 1 0 6.842-6.84.58.58 0 1 1 0-1.16 8 8 0 1 1-6.556 3.412l-.663-.577a.58.58 0 0 1 .227-.997l2.52-.69a.58.58 0 0 1 .728.633l-.332 2.592a.58.58 0 0 1-.956.364l-.643-.56A6.8 6.8 0 0 0 1.16 8z" />
                            <path d="M6.641 11.671V8.843h1.57l1.498 2.828h1.314L9.377 8.665c.897-.3 1.427-1.106 1.427-2.1 0-1.37-.943-2.246-2.456-2.246H5.5v7.352zm0-3.75V5.277h1.57c.881 0 1.416.499 1.416 1.32 0 .84-.504 1.324-1.386 1.324z" />
                        </svg>
                    </div>
                    <div class="product-title">Rubber</div>
                    <div class="product-detail">Shredded tyres, rubber powder and granulates, Butyl tubes, buffing powder.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-container" id="contact-us">
        <div class="contact-info">
            <h2>Let's talk</h2>
            <p>To request a quote or want to meet up for coffee, contact us directly or fill out the form and we will get back to you promptly.</p>
            <div class="contact-details-svg">
                <!-- <img src="{{ URL::asset('assets/imgs/contact.svg'); }}" alt=""> -->
            </div>

        </div>
        <div class="contact-form">
            <form id="contactForm" method="POST" action="#">
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
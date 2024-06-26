@extends('theme')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/home.css'); }} ">

<style>
    .body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 50px 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f0f0f0;
    }

    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 15px;
        width: 90%;
        max-width: 1200px;
        margin: auto;
    }

    .gallery-item {
        position: relative;
        overflow: hidden;
    }

    .gallery-item img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.3s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.1);
    }

    /* Modal styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 60px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.9);
    }

    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }

    .modal-content img {
        width: 100%;
        height: auto;
    }

    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #fff;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }
</style>
<div class="hero-section">
        <img src="{{ URL::asset('assets/imgs/Simple Shiny.svg'); }}" alt="">
        <div class="hero-text">
            <div class="hero-text-content">
                <div class="hero-text-heading">Gallery</div>
                <div class="hero-text-sub-heading">Welcome to our Gallery, showcasing the heart of our scrap trading business. Explore images of our extensive range of products, from metal and plastic scraps to electronic waste. Get a glimpse of our state-of-the-art facilities, highlighting our commitment to sustainability and efficient recycling processes. See our dedicated team in action, ensuring top-notch service and quality. This visual journey offers a closer look at how we transform waste into valuable resources, reflecting our passion for environmental stewardship and customer satisfaction. Discover the essence of our business through these compelling images.</div>

            </div>
        </div>
    </div>
<div class="body">
    <div class="gallery">
        <div class="gallery-item"><img src="https://picsum.photos/200?random=1" alt="Random Image 1" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://picsum.photos/200?random=2" alt="Random Image 2" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://picsum.photos/200?random=3" alt="Random Image 3" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://picsum.photos/200" alt="Random Image 4" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://picsum.photos/200" alt="Random Image 5" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://picsum.photos/200" alt="Random Image 6" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://picsum.photos/200?random=1" alt="Random Image 1" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://picsum.photos/200?random=2" alt="Random Image 2" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://picsum.photos/200?random=3" alt="Random Image 3" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://picsum.photos/200" alt="Random Image 4" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://picsum.photos/200" alt="Random Image 5" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://picsum.photos/200" alt="Random Image 6" onclick="openModal(this)"></div>
        <!-- Add more images as needed -->
    </div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <div class="modal-content">
        <img id="modalImage">
    </div>
</div>
<script>
    function openModal(img) {
        var modal = document.getElementById("myModal");
        var modalImg = document.getElementById("modalImage");
        modal.style.display = "block";
        modalImg.src = img.src;
    }

    function closeModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
    }
</script>

@endsection

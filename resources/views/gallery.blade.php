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
        border: 1px solid black;
        border-radius: 10px;
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
        <div class="gallery-item"><img src="https://images.squarespace-cdn.com/content/v1/592afed29de4bbbc0b7f9eba/1496023760164-C9434BLFIL0JXZ4AMO98/image-asset.jpeg" alt="Random Image 1" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://www.shineikinzoku.co.jp/en/images/recycle-img01.png" alt="Random Image 2" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://www.nationalmaterial.com/wp-content/uploads/2020/08/Steel-and-recycling.jpg" alt="Random Image 3" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://www.actionmetalsrecyclers.com/wp-content/uploads/2021/11/advantages-recycling-scrap-metal-768x576.jpg" alt="Random Image 4" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQz4z-TmzEUOj52R-ksa6zYtiEhECvYaLhv5w&s" alt="Random Image 5" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://us.123rf.com/450wm/grgroup/grgroup1403/grgroup140300529/26411792-eco-design-over-dotted-background-vector-illustration.jpg?ver=6" alt="Random Image 6" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://media.istockphoto.com/id/519134010/photo/scrap-metal.jpg?s=612x612&w=0&k=20&c=SCLKe-KCs-Q9gjw7yWDXDMOuOayVOqzWnGSpDv865hc=" alt="Random Image 1" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://hips.hearstapps.com/hmg-prod/images/scrap-metal-recycling-facility-royalty-free-image-1647017520.jpg?crop=0.670xw:1.00xh;0.0962xw,0&resize=640:*" alt="Random Image 2" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://gmk.center/wp-content/uploads/2021/09/shutterstock_1842562936.png" alt="Random Image 3" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Allegheny_Ludlum_Steel_Corp_Scrap_Piles.jpg" alt="Random Image 4" onclick="openModal(this)"></div>
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

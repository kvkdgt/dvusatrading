@extends('theme')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/home.css'); }} ">
<style>

        .body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        h1 {
            color: #333;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            width: 100%;
            max-width: 1200px;
        }
        .product-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }
        .product-card img {
            width: 100%;
            height: auto;
        }
        .product-card .product-info {
            padding: 15px;
        }
        .product-card .product-info h2 {
            margin: 10px 0 5px;
            font-size: 1.5em;
            color: #333;
        }
        .product-card .product-info p {
            margin: 5px 0;
            font-size: 1em;
            color: #777;
        }
        .product-card .product-info p.category {
            font-weight: bold;
            color: #555;
        }
    </style>
<div class="hero-section">
        <img src="{{ URL::asset('assets/imgs/Simple Shiny.svg'); }}" alt="">
        <div class="hero-text">
            <div class="hero-text-content">
                <div class="hero-text-heading">Our Products</div>
                <div class="hero-text-sub-heading">Welcome to our Products section, where quality meets sustainability in every item. Explore our diverse range of scrap materials including metals, plastics, and electronics, meticulously sorted and ready for recycling. Each product reflects our commitment to environmental responsibility and innovation in the scrap trading industry. Whether you're looking for high-grade metals for industrial applications or eco-friendly plastics for manufacturing, our products deliver reliability and performance. Discover how we contribute to a circular economy by offering premium recycled materials that meet your business needs. Browse through our catalog and find the sustainable solution you've been searching for.</div>

            </div>
        </div>
    </div>
<div class="body">
    <div class="product-grid">
        <div class="product-card">
            <img src="https://via.placeholder.com/300" alt="Product Image 1">
            <div class="product-info">
                <h2>Product Name 1</h2>
                <p class="category">Category: Electronics</p>
            </div>
        </div>
        <div class="product-card">
            <img src="https://via.placeholder.com/300" alt="Product Image 2">
            <div class="product-info">
                <h2>Product Name 2</h2>
                <p class="category">Category: Apparel</p>
            </div>
        </div>
        <div class="product-card">
            <img src="https://via.placeholder.com/300" alt="Product Image 3">
            <div class="product-info">
                <h2>Product Name 3</h2>
                <p class="category">Category: Home & Kitchen</p>
            </div>
        </div>
        <div class="product-card">
            <img src="https://via.placeholder.com/300" alt="Product Image 4">
            <div class="product-info">
                <h2>Product Name 4</h2>
                <p class="category">Category: Sports</p>
            </div>
        </div>
        <div class="product-card">
            <img src="https://via.placeholder.com/300" alt="Product Image 4">
            <div class="product-info">
                <h2>Product Name 4</h2>
                <p class="category">Category: Sports</p>
            </div>
        </div>
        <div class="product-card">
            <img src="https://via.placeholder.com/300" alt="Product Image 4">
            <div class="product-info">
                <h2>Product Name 4</h2>
                <p class="category">Category: Sports</p>
            </div>
        </div>
        <div class="product-card">
            <img src="https://via.placeholder.com/300" alt="Product Image 4">
            <div class="product-info">
                <h2>Product Name 4</h2>
                <p class="category">Category: Sports</p>
            </div>
        </div>
        <div class="product-card">
            <img src="https://via.placeholder.com/300" alt="Product Image 4">
            <div class="product-info">
                <h2>Product Name 4</h2>
                <p class="category">Category: Sports</p>
            </div>
        </div>
    </div>
</div>

@endsection
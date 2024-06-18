<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DV USA Trading</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/theme.css'); }} ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<header>
    <div class="logo">
       <span class="logo-title">DV USA TRADING</span>
    </div>
    <div class="menus">
        <a href="#"><div class="menu-item">Home</div></a>
        <a href="#"><div class="menu-item">Products</div></a>
        <a href="#"><div class="menu-item">About</div></a>
        <a href="#"><div class="menu-item">Gallery</div></a>
    </div>
   
    <div class="contact-us-btn">
        <div class="contact-header-btn">CONTACT US</div>
    </div>

    <div class="bars" id="bar-button">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="bar-icon"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
        </svg>
    </div>
</header>
<div class="background-sidebar"></div>
<div class="sidebar" id="sidebar">
    <div class="close-btn" id="closeBtnForSidebar">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M0.75 23.249L23.25 0.749023" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M23.25 23.249L0.75 0.749023" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </div>
    <div class="menus-sidebar">
    <a href="#"><div class="menu-name-sidebar">HOME</div></a>
    <a href="#"><div class="menu-name-sidebar">PRODUCTS</div></a>
    <a href="#"><div class="menu-name-sidebar">ABOUT</div></a>
    <a href="#"><div class="menu-name-sidebar">Gallery</div></a>
    <a href="#"><div class="menu-name-sidebar">CONTACT US</div></a>


    </div>
</div>

<body>
<?php
if (session()->has('success')) {
?>

<script>
    alert('Message sent sucessfully, our team will reach out to you shortly.')
</script>

<br>
<?php
session()->flush();
}
?>
    @yield('content')

    <footer>
    <div class="footer-container">
      <div class="footer-section">
        <img src="{{ URL::asset('imgs/logo-light.png'); }}" alt="Logo" class="logo-footer">

        <p>Contact us today for more information or book your Appointment today.</p>
      </div>
      <div class="footer-section">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Gallery</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h3>Contact Info</h3>
        <p>DV USA Trading Company</p>
        <p>Email: info@dvusatrading.com</p>
        <p>Phone: +91 1234567890</p>
      </div>
    </div>
  </footer>

</body>
<script>
    document.getElementById('bar-button').addEventListener('click', function() {
        var targetBlock = document.getElementById('sidebar');
        targetBlock.style.display = 'block';
    });

    document.getElementById('closeBtnForSidebar').addEventListener('click', function() {
        var targetBlock = document.getElementById('sidebar');
        targetBlock.style.display = 'none';
    });
</script>

</html>
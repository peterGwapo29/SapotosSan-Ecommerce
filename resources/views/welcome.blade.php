<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SapatoSan Store</title>
  <link rel="stylesheet" href="style.css" />

  <link rel="stylesheet" href="{{ asset('css/welcome.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

</head>
<body>

  <!-- HEADER -->
  <header class="header">
    <div class="logo">SAPATOS<span>SAN</span></div>
    <nav class="nav">
      <a href="#">Home</a>
      <a href="#">Men</a>
      <a href="#">Women</a>
      <a href="#">Collection</a>
      <a href="#">Contact Us</a>
    </nav>
    <div class="icons">
      <i class="fa-solid fa-cart-shopping"></i>
    </div>

    <div class="auth-buttons">
      <a href="/login" class="btn btn-outline">Login</a>
      <a href="/register" class="btn btn-primary">Register</a>
    </div>
  </header>

  <!-- HERO SECTION -->
  <section class="hero">
    <div class="hero-text">
      <h4 class="brand">SAPATOSAN</h4>
      <h1>The Ultimate <span>SAPATOSAN</span> Shoe Paradise</h1>
      <p>Feel free to adapt these suggestions to suit your specific context and branding.</p>
      <button class="btn-buy">Buy Now</button>
      <div class="color-options">
        <span class="color c1"></span>
        <span class="color c2"></span>
        <span class="color c3"></span>
        <span class="color c4"></span>
      </div>
    </div>
    <div class="hero-image">
      <img src="{{ asset('../images/product/p1.png') }}" alt="Sneaker" />
    </div>
  </section>

  <!-- FOR MENS -->
  <section class="mens">
    <h2>FOR MENS</h2>
    <div class="product-grid">
      <div class="product-card">
        <img src="{{ asset('../images/product/p1.png') }}" alt="Air Force 1">
        <h4>NIKE AIR</h4>
        <p>SF Air Force 1 Mid Men’s</p>
        <span>Stock: 50</span>
        <h3>$30.00</h3>
        <button><i class="fa-solid fa-cart-shopping"></i></button>
      </div>
      <div class="product-card">
        <img src="{{ asset('../images/product/p1.png') }}" alt="Running Sneaker">
        <h4>NIKE AIR</h4>
        <p>Air Running Sneakers</p>
        <span>Stock: 50</span>
        <h3>$30.00</h3>
        <button><i class="fa-solid fa-cart-shopping"></i></button>
      </div>
      <div class="product-card">
        <img src="{{ asset('../images/product/p1.png') }}" alt="Max Force 1">
        <h4>NIKE AIR</h4>
        <p>Sneakers SF Air Max Force 1</p>
        <span>Stock: 50</span>
        <h3>$30.00</h3>
        <button><i class="fa-solid fa-cart-shopping"></i></button>
      </div>
      <div class="product-card">
        <img src="{{ asset('../images/product/p1.png') }}" alt="Air Jordan">
        <h4>NIKE AIR</h4>
        <p>Air Force Air Jordan Nike</p>
        <span>Stock: 50</span>
        <h3>$30.00</h3>
        <button><i class="fa-solid fa-cart-shopping"></i></button>
      </div>
    </div>
  </section>

  <!-- ABOUT -->
  <section class="about">
    <div class="about-text">
      <h4>ABOUT US</h4>
      <h2>Elevate your look with <span>Shoes</span></h2>
      <p>
        From sneakers to stilettos to your shoe destination. Experience comfort
        and style with our shoes.
      </p>
      <button class="btn-buy">Buy Now</button>
      <button class="btn-learn">Learn More</button>
    </div>
    <div class="about-image">
      <img src="{{ asset('../images/product/p1.png') }}" alt="Nike Shoe" />
    </div>
  </section>

</body>
</html>

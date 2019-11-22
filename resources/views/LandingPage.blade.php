@extends('layouts.master')
 
@section('content')

<div class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button">Cat 1</a>
  <a href="#" class="w3-bar-item w3-button">Cat 2</a>
  <a href="#" class="w3-bar-item w3-button">cat 3</a>
</div>

<div>
  <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
  <label class="lbl-cat">Categories</label>
</div>


<section class="products">
    <div class="product-card">
      <div class="product-image">
        <a href="Productpage">
        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713229/single_4.jpg">
      </a>
      </div>
      <div class="product-info">
        <h5>Acer laptop</h5>
        <h6>$99.99</h6>
      </div>
    </div>
    
    <div class="product-card">
      <div class="product-image">
        <a href="Productpage">
        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713229/single_4.jpg">
      </a>
      </div>
      <div class="product-info">
        <h5>Acer laptop</h5>
        <h6>$99.99</h6>
      </div>
    </div>
    
    <div class="product-card">
      <div class="product-image">
        <a href="Productpage">
        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713229/single_4.jpg">
      </a>
      </div>
      <div class="product-info">
        <h5>Acer laptop</h5>
        <h6>$99.99</h6>
      </div>
    </div>
    
    <div class="product-card">
      <div class="product-image">
        <a href="Productpage">
        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713229/single_4.jpg">
      </a>
      </div>
      <div class="product-info">
        <h5>Acer laptop</h5>
        <h6>$99.99</h6>
      </div>
    </div>
    
    <div class="product-card">
      <div class="product-image">
        <a href="Productpage">
        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713229/single_4.jpg">
      </a>
      </div>
      <div class="product-info">
        <h5>Acer laptop</h5>
        <h6>$99.99</h6>
      </div>
    </div>
    
    <div class="product-card">
      <div class="product-image">
        <a href="Productpage">
        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713229/single_4.jpg">
      </a>
      </div>
      <div class="product-info">
        <h5>Acer laptop</h5>
        <h6>$99.99</h6>
      </div>
    </div>
    
    <div class="product-card">
      <div class="product-image">
        <a href="Productpage">
        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713229/single_4.jpg">
      </a>
      </div>
      <div class="product-info">
        <h5>Acer laptop</h5>
        <h6>$99.99</h6>
      </div>
    </div>
    
    <div class="product-card">
      <div class="product-image">
        <a href="Productpage">
        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713229/single_4.jpg">
      </a>
      </div>
      <div class="product-info">
        <h5>Acer laptop</h5>
        <h6>$99.99</h6>
      </div>
    </div>
    
    <div class="product-card">
      <<div class="product-image">
        <a href="Productpage">
        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713229/single_4.jpg">
      </a>
      </div>
      <div class="product-info">
        <h5>Acer laptop</h5>
        <h6>$99.99</h6>
      </div>
    </div>
    
    <div class="product-card">
      <div class="product-image">
        <a href="Productpage">
        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565713229/single_4.jpg">
      </a>
      </div>
      <div class="product-info">
        <h5>Acer laptop</h5>
        <h6>$99.99</h6>
      </div>
    </div>
    
  </section>
@endsection
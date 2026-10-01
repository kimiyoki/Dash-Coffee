@extends('layouts.app')

@section('title', 'DashCoffee | Your Daily Coffee Moment')

@section('content')
<section class="hero" id="home">
        <div class="container hero-inner">
          <div class="hero-copy">
            <p class="eyebrow">Freshly brewed, always worth it</p>
            <h1>YOUR DAILY COFFEE MOMENT</h1>
            <p class="subtitle">Take a dash, stay a while.</p>
            <a class="btn btn-primary btn-large" href="{{ route('menu') }}">EXPLORE MENU</a>
          </div>
          <div class="hero-card" aria-label="DashCoffee highlight card">
            <div class="mini-tag">Signature pick</div>
            <h3>Cloud Latte</h3>
            <p>Velvety texture, balanced sweetness, and an airy finish.</p>
            <div class="price-row">
              <span>₱49</span>
              <span>Perfect for your afternoon reset</span>
            </div>
          </div>
        </div>
      </section>

<section class="featured section">
        <div class="container">
          <div class="section-heading">
            <p class="section-tag">FEATURED PRODUCTS</p>
            <h2>Top picks from our everyday favorites.</h2>
          </div>
          <div class="featured-grid">
            <article class="product-card">
              <div class="product-badge">Limited time</div>
              <h3>Matcha Frappe</h3>
              <p>₱69</p>
            </article>
            <article class="product-card">
              <div class="product-badge">Popular</div>
              <h3>Salted Caramel Series</h3>
              <p>Latte / Frappe / Cocoa — ₱59 - ₱69</p>
            </article>
            <article class="product-card">
              <div class="product-badge">New</div>
              <h3>Cheesecake w/ Pearls</h3>
              <p>Okinawa, Matcha, Mango, Red Velvet, Taro, Dark Choco — ₱79</p>
            </article>
            <article class="product-card">
              <div class="product-badge">Sweet</div>
              <h3>Chocolate / Caramel Waffle</h3>
              <p>₱69 + syrup +₱10</p>
            </article>
            <article class="product-card">
              <div class="product-badge">Savory</div>
              <h3>Spam Sandwich / Hungarian Overload</h3>
              <p>₱79 - ₱99</p>
            </article>
            <article class="product-card">
              <div class="product-badge">Meal</div>
              <h3>Silog Meals</h3>
              <p>Tapsilog, Bangsilog, Porksilog — ₱79 - ₱99</p>
            </article>
          </div>
  <div class="section-cta">
            <a href="{{ route('menu') }}" class="btn btn-primary">VIEW FULL MENU</a>
          </div>
        </div>
      </section>

<section class="reviews section">
        <div class="container">
          <div class="review-card">
            <blockquote>
              “Budget friendly foods and drinks! Will definitely recommend this to students and wfh workers”
            </blockquote>
            <p class="reviewer">— Dash Coffee Customer</p>
          </div>
        </div>
      </section>
@endsection
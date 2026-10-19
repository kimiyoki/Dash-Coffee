@extends('layouts.app')

@section('title', 'Menu | DashCoffee')

@section('content')
<section class="menu section" id="menu">
        <div class="container">
          <div class="section-heading center">
            <p class="section-tag">OUR MENU</p>
            <h2>Everything you love, crafted for the everyday mood.</h2>
          </div>
          <div class="filter-bar" aria-label="Menu category filters">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="coffee">Iced Coffee</button>
            <button class="filter-btn" data-filter="milk-tea">Milk Tea</button>
            <button class="filter-btn" data-filter="dessert">Dessert</button>
            <button class="filter-btn" data-filter="frappe">Frappes</button>
            <button class="filter-btn" data-filter="hot">Hot Drinks</button>
            <button class="filter-btn" data-filter="fruit">Fruit Drinks</button>
            <button class="filter-btn" data-filter="savory">Savory</button>
            <button class="filter-btn" data-filter="snacks">Snacks</button>
          </div>
          <div class="menu-grid" id="menuGrid">
            <article class="menu-card" data-category="coffee">
              <div class="menu-card-top">
                <span class="menu-card-name">Dash Latte</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Iced Coffee Series</p>
            </article>
            <article class="menu-card" data-category="coffee">
              <div class="menu-card-top">
                <span class="menu-card-name">Cloud Latte</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Iced Coffee Series</p>
            </article>
            <article class="menu-card" data-category="coffee">
              <div class="menu-card-top">
                <span class="menu-card-name">Cloud Seasalt</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Iced Coffee Series</p>
            </article>
            <article class="menu-card" data-category="coffee">
              <div class="menu-card-top">
                <span class="menu-card-name">Spanish Latte</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Iced Coffee Series</p>
            </article>
            <article class="menu-card" data-category="coffee">
              <div class="menu-card-top">
                <span class="menu-card-name">Macchiato</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Iced Coffee Series</p>
            </article>
            <article class="menu-card" data-category="coffee">
              <div class="menu-card-top">
                <span class="menu-card-name">Sweet Americano</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Iced Coffee Series</p>
            </article>
            <article class="menu-card" data-category="coffee">
              <div class="menu-card-top">
                <span class="menu-card-name">Dark Mocha</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Iced Coffee Series</p>
            </article>
            <article class="menu-card" data-category="milk-tea">
              <div class="menu-card-top">
                <span class="menu-card-name">Tokyo Brown Sugar</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Milk Tea w/ Pearls</p>
            </article>
            <article class="menu-card" data-category="milk-tea">
              <div class="menu-card-top">
                <span class="menu-card-name">Sapporo</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Milk Tea w/ Pearls</p>
            </article>
            <article class="menu-card" data-category="milk-tea">
              <div class="menu-card-top">
                <span class="menu-card-name">Hokkaido</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Milk Tea w/ Pearls</p>
            </article>
            <article class="menu-card" data-category="milk-tea">
              <div class="menu-card-top">
                <span class="menu-card-name">Okinawa Roasted</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Milk Tea w/ Pearls</p>
            </article>
            <article class="menu-card" data-category="milk-tea">
              <div class="menu-card-top">
                <span class="menu-card-name">Nagoya Choco</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Milk Tea w/ Pearls</p>
            </article>
            <article class="menu-card" data-category="milk-tea">
              <div class="menu-card-top">
                <span class="menu-card-name">Kyoto Matcha</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Milk Tea w/ Pearls</p>
            </article>
            <article class="menu-card" data-category="dessert">
              <div class="menu-card-top">
                <span class="menu-card-name">Forest Cake</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Dessert w/ Salty Cream</p>
            </article>
            <article class="menu-card" data-category="dessert">
              <div class="menu-card-top">
                <span class="menu-card-name">Matcha Cream</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Dessert w/ Salty Cream</p>
            </article>
            <article class="menu-card" data-category="dessert">
              <div class="menu-card-top">
                <span class="menu-card-name">Choco Muffy</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Dessert w/ Salty Cream</p>
            </article>
            <article class="menu-card" data-category="dessert">
              <div class="menu-card-top">
                <span class="menu-card-name">Mango Cream</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Dessert w/ Salty Cream</p>
            </article>
            <article class="menu-card" data-category="dessert">
              <div class="menu-card-top">
                <span class="menu-card-name">Dark Chocolate</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Dessert w/ Salty Cream</p>
            </article>
            <article class="menu-card" data-category="dessert">
              <div class="menu-card-top">
                <span class="menu-card-name">Velvet Cake</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Dessert w/ Salty Cream</p>
            </article>
            <article class="menu-card" data-category="frappe">
              <div class="menu-card-top">
                <span class="menu-card-name">Dark Forest</span>
                <span class="menu-card-price">₱69</span>
              </div>
              <p class="menu-card-meta">Blended Frappes</p>
            </article>
            <article class="menu-card" data-category="frappe">
              <div class="menu-card-top">
                <span class="menu-card-name">Taro Dream</span>
                <span class="menu-card-price">₱69</span>
              </div>
              <p class="menu-card-meta">Blended Frappes</p>
            </article>
            <article class="menu-card" data-category="frappe">
              <div class="menu-card-top">
                <span class="menu-card-name">Red Chocolate</span>
                <span class="menu-card-price">₱69</span>
              </div>
              <p class="menu-card-meta">Blended Frappes</p>
            </article>
            <article class="menu-card" data-category="frappe">
              <div class="menu-card-top">
                <span class="menu-card-name">Matchy Choco</span>
                <span class="menu-card-price">₱69</span>
              </div>
              <p class="menu-card-meta">Blended Frappes</p>
            </article>
            <article class="menu-card" data-category="frappe">
              <div class="menu-card-top">
                <span class="menu-card-name">Vanilla Bean</span>
                <span class="menu-card-price">₱69</span>
              </div>
              <p class="menu-card-meta">Blended Frappes</p>
            </article>
            <article class="menu-card" data-category="frappe">
              <div class="menu-card-top">
                <span class="menu-card-name">Oreo Cream</span>
                <span class="menu-card-price">₱69</span>
              </div>
              <p class="menu-card-meta">Blended Frappes</p>
            </article>
            <article class="menu-card" data-category="hot">
              <div class="menu-card-top">
                <span class="menu-card-name">Dash Latte</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Hot Drinks</p>
            </article>
            <article class="menu-card" data-category="hot">
              <div class="menu-card-top">
                <span class="menu-card-name">Spanish Latte</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Hot Drinks</p>
            </article>
            <article class="menu-card" data-category="hot">
              <div class="menu-card-top">
                <span class="menu-card-name">Dark Chocolate</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Hot Drinks</p>
            </article>
            <article class="menu-card" data-category="hot">
              <div class="menu-card-top">
                <span class="menu-card-name">Hazelnut</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Hot Drinks</p>
            </article>
            <article class="menu-card" data-category="hot">
              <div class="menu-card-top">
                <span class="menu-card-name">Caramel Macchiato</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Hot Drinks</p>
            </article>
            <article class="menu-card" data-category="hot">
              <div class="menu-card-top">
                <span class="menu-card-name">Matcha Latte</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Hot Drinks</p>
            </article>
            <article class="menu-card" data-category="fruit">
              <div class="menu-card-top">
                <span class="menu-card-name">Strawberry</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Fruiteas & Fruit Sodas</p>
            </article>
            <article class="menu-card" data-category="fruit">
              <div class="menu-card-top">
                <span class="menu-card-name">Green Apple</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Fruiteas & Fruit Sodas</p>
            </article>
            <article class="menu-card" data-category="fruit">
              <div class="menu-card-top">
                <span class="menu-card-name">Mango</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Fruiteas & Fruit Sodas</p>
            </article>
            <article class="menu-card" data-category="fruit">
              <div class="menu-card-top">
                <span class="menu-card-name">Lychee</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Fruiteas & Fruit Sodas</p>
            </article>
            <article class="menu-card" data-category="fruit">
              <div class="menu-card-top">
                <span class="menu-card-name">Berry Treat</span>
                <span class="menu-card-price">₱69</span>
              </div>
              <p class="menu-card-meta">Fruiteas & Fruit Sodas</p>
            </article>
            <article class="menu-card" data-category="savory">
              <div class="menu-card-top">
                <span class="menu-card-name">Hotsilog</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Silog & Savory Menu</p>
            </article>
            <article class="menu-card" data-category="savory">
              <div class="menu-card-top">
                <span class="menu-card-name">Hamsilog</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Silog & Savory Menu</p>
            </article>
            <article class="menu-card" data-category="savory">
              <div class="menu-card-top">
                <span class="menu-card-name">Longsilog</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Silog & Savory Menu</p>
            </article>
            <article class="menu-card" data-category="savory">
              <div class="menu-card-top">
                <span class="menu-card-name">Tapsilog</span>
                <span class="menu-card-price">₱79</span>
              </div>
              <p class="menu-card-meta">Silog & Savory Menu</p>
            </article>
            <article class="menu-card" data-category="savory">
              <div class="menu-card-top">
                <span class="menu-card-name">Tosilog</span>
                <span class="menu-card-price">₱79</span>
              </div>
              <p class="menu-card-meta">Silog & Savory Menu</p>
            </article>
            <article class="menu-card" data-category="savory">
              <div class="menu-card-top">
                <span class="menu-card-name">Chick-silog</span>
                <span class="menu-card-price">₱79</span>
              </div>
              <p class="menu-card-meta">Silog & Savory Menu</p>
            </article>
            <article class="menu-card" data-category="savory">
              <div class="menu-card-top">
                <span class="menu-card-name">Porksilog</span>
                <span class="menu-card-price">₱89</span>
              </div>
              <p class="menu-card-meta">Silog & Savory Menu</p>
            </article>
            <article class="menu-card" data-category="savory">
              <div class="menu-card-top">
                <span class="menu-card-name">Spamsilog</span>
                <span class="menu-card-price">₱89</span>
              </div>
              <p class="menu-card-meta">Silog & Savory Menu</p>
            </article>
            <article class="menu-card" data-category="savory">
              <div class="menu-card-top">
                <span class="menu-card-name">Bangsilog</span>
                <span class="menu-card-price">₱99</span>
              </div>
              <p class="menu-card-meta">Silog & Savory Menu</p>
            </article>
            <article class="menu-card" data-category="savory">
              <div class="menu-card-top">
                <span class="menu-card-name">Hungarian</span>
                <span class="menu-card-price">₱99</span>
              </div>
              <p class="menu-card-meta">Silog & Savory Menu</p>
            </article>
            <article class="menu-card" data-category="savory">
              <div class="menu-card-top">
                <span class="menu-card-name">Nuggets</span>
                <span class="menu-card-price">₱99</span>
              </div>
              <p class="menu-card-meta">Silog & Savory Menu</p>
            </article>
            <article class="menu-card" data-category="snacks">
              <div class="menu-card-top">
                <span class="menu-card-name">Spam Sandwich</span>
                <span class="menu-card-price">₱99</span>
              </div>
              <p class="menu-card-meta">Sandwiches & Snacks</p>
            </article>
            <article class="menu-card" data-category="snacks">
              <div class="menu-card-top">
                <span class="menu-card-name">Ham Sandwich</span>
                <span class="menu-card-price">₱69</span>
              </div>
              <p class="menu-card-meta">Sandwiches & Snacks</p>
            </article>
            <article class="menu-card" data-category="snacks">
              <div class="menu-card-top">
                <span class="menu-card-name">Hungarian Overload</span>
                <span class="menu-card-price">₱79</span>
              </div>
              <p class="menu-card-meta">Sandwiches & Snacks</p>
            </article>
            <article class="menu-card" data-category="snacks">
              <div class="menu-card-top">
                <span class="menu-card-name">Burger</span>
                <span class="menu-card-price">₱30</span>
              </div>
              <p class="menu-card-meta">Sandwiches & Snacks</p>
            </article>
            <article class="menu-card" data-category="snacks">
              <div class="menu-card-top">
                <span class="menu-card-name">Cheese Sticks</span>
                <span class="menu-card-price">₱20</span>
              </div>
              <p class="menu-card-meta">Sandwiches & Snacks</p>
            </article>
            <article class="menu-card" data-category="snacks">
              <div class="menu-card-top">
                <span class="menu-card-name">Fries</span>
                <span class="menu-card-price">₱25</span>
              </div>
              <p class="menu-card-meta">Sandwiches & Snacks</p>
            </article>
            <article class="menu-card" data-category="snacks">
              <div class="menu-card-top">
                <span class="menu-card-name">Siomai / Gyoza</span>
                <span class="menu-card-price">₱10 – ₱55</span>
              </div>
              <p class="menu-card-meta">Sandwiches & Snacks</p>
            </article>
          </div>
        <div class="addon-banner">
            <span class="addon-label">Add-ons Badge:</span>
            <span>Sinkers & Extras available: Coffee Jelly, Pearls, Salty Cream, Crushed Oreos, Coffee Shot — ₱10 - ₱18</span>
          </div>
        </div>
      </section>
@endsection

@push('scripts')
<script src="{{ asset('js/menu.js') }}"></script>
@endpush

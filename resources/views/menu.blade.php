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
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/dash-latte.png') }}" alt="Dash Latte">
                <div class="menu-card-hover-desc">Creamy milk tea with a smooth sweet macchiato topping.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Dash Latte</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Iced Coffee Series</p>
            </article>
            
                                    <article class="menu-card" data-category="coffee">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/cloud-seasalt.png') }}" alt="Cloud Seasalt">
                <div class="menu-card-hover-desc">Creamy coffee with a hint of sea salt.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Cloud Seasalt</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Iced Coffee Series</p>
            </article>
            <article class="menu-card" data-category="coffee">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/spanish-latte.png') }}" alt="Spanish Latte">
                <div class="menu-card-hover-desc">Rich espresso with sweet condensed milk.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Spanish Latte</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Iced Coffee Series</p>
            </article>
            <article class="menu-card" data-category="coffee">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/macchiato.png') }}" alt="Macchiato">
                <div class="menu-card-hover-desc">Espresso with a touch of milk foam.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Macchiato</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Iced Coffee Series</p>
            </article>
            <article class="menu-card" data-category="coffee">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/sweet-americano.png') }}" alt="Sweet Americano">
                <div class="menu-card-hover-desc">Bold espresso with a hint of sweetness.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Sweet Americano</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Iced Coffee Series</p>
            </article>
            <article class="menu-card" data-category="coffee">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/dark-mocha.png') }}" alt="Dark Mocha">
                <div class="menu-card-hover-desc">Rich chocolate blended with dark espresso.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Dark Mocha</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Iced Coffee Series</p>
            </article>
            <article class="menu-card" data-category="milk-tea">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/tokyo-brown-sugar.png') }}" alt="Tokyo Brown Sugar">
                <div class="menu-card-hover-desc">Caramelized brown sugar with creamy milk tea.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Tokyo Brown Sugar</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Milk Tea w/ Pearls</p>
            </article>
            <article class="menu-card" data-category="milk-tea">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/sapporo.png') }}" alt="Sapporo">
                <div class="menu-card-hover-desc">Smooth milk tea with a hint of vanilla.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Sapporo</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Milk Tea w/ Pearls</p>
            </article>
            <article class="menu-card" data-category="milk-tea">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/hokkaido.png') }}" alt="Hokkaido">
                <div class="menu-card-hover-desc">Creamy Hokkaido milk tea with rich flavor.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Hokkaido</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Milk Tea w/ Pearls</p>
            </article>
            <article class="menu-card" data-category="milk-tea">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/okinawa-roasted.png') }}" alt="Okinawa Roasted">
                <div class="menu-card-hover-desc">Roasted Okinawa milk tea with deep flavor.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Okinawa Roasted</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Milk Tea w/ Pearls</p>
            </article>
            <article class="menu-card" data-category="milk-tea">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/nagoya-choco.png') }}" alt="Nagoya Choco">
                <div class="menu-card-hover-desc">Chocolate milk tea with Nagoya-inspired flavor.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Nagoya Choco</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Milk Tea w/ Pearls</p>
            </article>
            <article class="menu-card" data-category="milk-tea">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/kyoto-matcha.png') }}" alt="Kyoto Matcha">
                <div class="menu-card-hover-desc">Premium Kyoto matcha with creamy milk.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Kyoto Matcha</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Milk Tea w/ Pearls</p>
            </article>


                       <article class="menu-card" data-category="dessert">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/forest-cake.png') }}" alt="Forest Cake">
                <div class="menu-card-hover-desc">Chocolate cake with cherry and cream layers.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Forest Cake</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Dessert w/ Salty Cream</p>
            </article>
            <article class="menu-card" data-category="dessert">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/matcha-cream.png') }}" alt="Matcha Cream">
                <div class="menu-card-hover-desc">Smooth matcha dessert with creamy texture.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Matcha Cream</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Dessert w/ Salty Cream</p>
            </article>
            <article class="menu-card" data-category="dessert">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/choco-muffy.png') }}" alt="Choco Muffy">
                <div class="menu-card-hover-desc">Rich chocolate muffy with sweet cream.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Choco Muffy</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Dessert w/ Salty Cream</p>
            </article>
            <article class="menu-card" data-category="dessert">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/mango-cream.png') }}" alt="Mango Cream">
                <div class="menu-card-hover-desc">Sweet mango dessert with creamy topping.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Mango Cream</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Dessert w/ Salty Cream</p>
            </article>
            <article class="menu-card" data-category="dessert">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/dark-chocolate.png') }}" alt="Dark Chocolate">
                <div class="menu-card-hover-desc">Rich dark chocolate dessert with cream.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Dark Chocolate</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Dessert w/ Salty Cream</p>
            </article>
            <article class="menu-card" data-category="dessert">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/velvet-cake.png') }}" alt="Velvet Cake">
                <div class="menu-card-hover-desc">Red velvet cake with creamy frosting.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Velvet Cake</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Dessert w/ Salty Cream</p>
            </article>
            <article class="menu-card" data-category="frappe">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/dark-forest.png') }}" alt="Dark Forest">
                <div class="menu-card-hover-desc">Blended chocolate frappe with dark forest flavor.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Dark Forest</span>
                <span class="menu-card-price">₱69</span>
              </div>
              <p class="menu-card-meta">Blended Frappes</p>
            </article>
            <article class="menu-card" data-category="frappe">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/taro-dream.png') }}" alt="Taro Dream">
                <div class="menu-card-hover-desc">Creamy taro frappe with sweet flavor.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Taro Dream</span>
                <span class="menu-card-price">₱69</span>
              </div>
              <p class="menu-card-meta">Blended Frappes</p>
            </article>
            <article class="menu-card" data-category="frappe">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/red-chocolate.png') }}" alt="Red Chocolate">
                <div class="menu-card-hover-desc">Blended chocolate frappe with red velvet twist.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Red Chocolate</span>
                <span class="menu-card-price">₱69</span>
              </div>
              <p class="menu-card-meta">Blended Frappes</p>
            </article>
            <article class="menu-card" data-category="frappe">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/matchy-choco.png') }}" alt="Matchy Choco">
                <div class="menu-card-hover-desc">Matcha and chocolate blended frappe.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Matchy Choco</span>
                <span class="menu-card-price">₱69</span>
              </div>
              <p class="menu-card-meta">Blended Frappes</p>
            </article>
            <article class="menu-card" data-category="frappe">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/vanilla-bean.png') }}" alt="Vanilla Bean">
                <div class="menu-card-hover-desc">Smooth vanilla bean frappe with creamy texture.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Vanilla Bean</span>
                <span class="menu-card-price">₱69</span>
              </div>
              <p class="menu-card-meta">Blended Frappes</p>
            </article>


                       <article class="menu-card" data-category="frappe">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/oreo-cream.png') }}" alt="Oreo Cream">
                <div class="menu-card-hover-desc">Creamy frappe blended with Oreo cookies.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Oreo Cream</span>
                <span class="menu-card-price">₱69</span>
              </div>
              <p class="menu-card-meta">Blended Frappes</p>
            </article>
            <article class="menu-card" data-category="hot">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/hot-dash-latte.png') }}" alt="Dash Latte">
                <div class="menu-card-hover-desc">Warm and creamy Dash Latte for cozy moments.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Dash Latte</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Hot Drinks</p>
            </article>
            <article class="menu-card" data-category="hot">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/hot-spanish-latte.png') }}" alt="Spanish Latte">
                <div class="menu-card-hover-desc">Hot Spanish latte with sweet condensed milk.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Spanish Latte</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Hot Drinks</p>
            </article>
            <article class="menu-card" data-category="hot">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/hot-dark-chocolate.png') }}" alt="Dark Chocolate">
                <div class="menu-card-hover-desc">Rich hot dark chocolate with creamy texture.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Dark Chocolate</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Hot Drinks</p>
            </article>
            <article class="menu-card" data-category="hot">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/hazelnut.png') }}" alt="Hazelnut">
                <div class="menu-card-hover-desc">Warm hazelnut drink with nutty flavor.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Hazelnut</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Hot Drinks</p>
            </article>
            <article class="menu-card" data-category="hot">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/caramel-macchiato.png') }}" alt="Caramel Macchiato">
                <div class="menu-card-hover-desc">Hot caramel macchiato with sweet caramel drizzle.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Caramel Macchiato</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Hot Drinks</p>
            </article>
            <article class="menu-card" data-category="hot">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/hot-matcha-latte.png') }}" alt="Matcha Latte">
                <div class="menu-card-hover-desc">Warm matcha latte with creamy milk.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Matcha Latte</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Hot Drinks</p>
            </article>
            <article class="menu-card" data-category="fruit">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/strawberry.png') }}" alt="Strawberry">
                <div class="menu-card-hover-desc">Refreshing strawberry fruitea with real fruit flavor.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Strawberry</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Fruiteas & Fruit Sodas</p>
            </article>
            <article class="menu-card" data-category="fruit">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/green-apple.png') }}" alt="Green Apple">
                <div class="menu-card-hover-desc">Crisp green apple fruitea with refreshing taste.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Green Apple</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Fruiteas & Fruit Sodas</p>
            </article>
            <article class="menu-card" data-category="fruit">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/mango.png') }}" alt="Mango">
                <div class="menu-card-hover-desc">Sweet mango fruitea with tropical flavor.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Mango</span>
                <span class="menu-card-price">₱49</span>
              </div>
              <p class="menu-card-meta">Fruiteas & Fruit Sodas</p>
            </article>
            <article class="menu-card" data-category="fruit">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/lychee.png') }}" alt="Lychee">
                <div class="menu-card-hover-desc">Refreshing lychee fruitea with floral notes.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Lychee</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Fruiteas & Fruit Sodas</p>
            </article>


                        <article class="menu-card" data-category="fruit">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/berry-treat.png') }}" alt="Berry Treat">
                <div class="menu-card-hover-desc">Mixed berry fruitea with sweet and tart flavor.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Berry Treat</span>
                <span class="menu-card-price">₱69</span>
              </div>
              <p class="menu-card-meta">Fruiteas & Fruit Sodas</p>
            </article>
            <article class="menu-card" data-category="savory">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/hotsilog.png') }}" alt="Hotsilog">
                <div class="menu-card-hover-desc">Hotdog with garlic rice and egg.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Hotsilog</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Silog & Savory Menu</p>
            </article>
            <article class="menu-card" data-category="savory">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/hamsilog.png') }}" alt="Hamsilog">
                <div class="menu-card-hover-desc">Ham with garlic rice and egg.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Hamsilog</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Silog & Savory Menu</p>
            </article>
            <article class="menu-card" data-category="savory">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/longsilog.png') }}" alt="Longsilog">
                <div class="menu-card-hover-desc">Longganisa with garlic rice and egg.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Longsilog</span>
                <span class="menu-card-price">₱59</span>
              </div>
              <p class="menu-card-meta">Silog & Savory Menu</p>
            </article>
            <article class="menu-card" data-category="savory">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/tapsilog.png') }}" alt="Tapsilog">
                <div class="menu-card-hover-desc">Tapa with garlic rice and egg.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Tapsilog</span>
                <span class="menu-card-price">₱79</span>
              </div>
              <p class="menu-card-meta">Silog & Savory Menu</p>
            </article>
            <article class="menu-card" data-category="savory">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/tosilog.png') }}" alt="Tosilog">
                <div class="menu-card-hover-desc">Tocino with garlic rice and egg.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Tosilog</span>
                <span class="menu-card-price">₱79</span>
              </div>
              <p class="menu-card-meta">Silog & Savory Menu</p>
            </article>
            <article class="menu-card" data-category="savory">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/chick-silog.png') }}" alt="Chick-silog">
                <div class="menu-card-hover-desc">Chicken with garlic rice and egg.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Chick-silog</span>
                <span class="menu-card-price">₱79</span>
              </div>
              <p class="menu-card-meta">Silog & Savory Menu</p>
            </article>
            <article class="menu-card" data-category="savory">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/porksilog.png') }}" alt="Porksilog">
                <div class="menu-card-hover-desc">Pork with garlic rice and egg.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Porksilog</span>
                <span class="menu-card-price">₱89</span>
              </div>
              <p class="menu-card-meta">Silog & Savory Menu</p>
            </article>
            <article class="menu-card" data-category="savory">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/spamsilog.png') }}" alt="Spamsilog">
                <div class="menu-card-hover-desc">Spam with garlic rice and egg.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Spamsilog</span>
                <span class="menu-card-price">₱89</span>
              </div>
              <p class="menu-card-meta">Silog & Savory Menu</p>
            </article>
            <article class="menu-card" data-category="savory">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/bangsilog.png') }}" alt="Bangsilog">
                <div class="menu-card-hover-desc">Bangus with garlic rice and egg.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Bangsilog</span>
                <span class="menu-card-price">₱99</span>
              </div>
              <p class="menu-card-meta">Silog & Savory Menu</p>
            </article>
            <article class="menu-card" data-category="savory">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/hungarian.png') }}" alt="Hungarian">
                <div class="menu-card-hover-desc">Hungarian sausage with garlic rice and egg.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Hungarian</span>
                <span class="menu-card-price">₱99</span>
              </div>
              <p class="menu-card-meta">Silog & Savory Menu</p>
            </article>
            <article class="menu-card" data-category="savory">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/nuggets.png') }}" alt="Nuggets">
                <div class="menu-card-hover-desc">Crispy chicken nuggets with rice and egg.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Nuggets</span>
                <span class="menu-card-price">₱99</span>
              </div>
              <p class="menu-card-meta">Silog & Savory Menu</p>
            </article>


            
                        <article class="menu-card" data-category="snacks">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/spam-sandwich.png') }}" alt="Spam Sandwich">
                <div class="menu-card-hover-desc">Classic spam sandwich with fresh veggies.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Spam Sandwich</span>
                <span class="menu-card-price">₱99</span>
              </div>
              <p class="menu-card-meta">Sandwiches & Snacks</p>
            </article>
            <article class="menu-card" data-category="snacks">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/ham-sandwich.png') }}" alt="Ham Sandwich">
                <div class="menu-card-hover-desc">Fresh ham sandwich with lettuce and mayo.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Ham Sandwich</span>
                <span class="menu-card-price">₱69</span>
              </div>
              <p class="menu-card-meta">Sandwiches & Snacks</p>
            </article>
            <article class="menu-card" data-category="snacks">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/hungarian-overload.png') }}" alt="Hungarian Overload">
                <div class="menu-card-hover-desc">Loaded Hungarian sausage sandwich.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Hungarian Overload</span>
                <span class="menu-card-price">₱79</span>
              </div>
              <p class="menu-card-meta">Sandwiches & Snacks</p>
            </article>
            <article class="menu-card" data-category="snacks">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/burger.png') }}" alt="Burger">
                <div class="menu-card-hover-desc">Classic burger with beef patty and veggies.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Burger</span>
                <span class="menu-card-price">₱30</span>
              </div>
              <p class="menu-card-meta">Sandwiches & Snacks</p>
            </article>
            <article class="menu-card" data-category="snacks">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/cheese-sticks.png') }}" alt="Cheese Sticks">
                <div class="menu-card-hover-desc">Crispy cheese sticks with dipping sauce.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Cheese Sticks</span>
                <span class="menu-card-price">₱20</span>
              </div>
              <p class="menu-card-meta">Sandwiches & Snacks</p>
            </article>
            <article class="menu-card" data-category="snacks">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/fries.png') }}" alt="Fries">
                <div class="menu-card-hover-desc">Golden crispy fries with salt.</div>
              </div>
              <div class="menu-card-top">
                <span class="menu-card-name">Fries</span>
                <span class="menu-card-price">₱25</span>
              </div>
              <p class="menu-card-meta">Sandwiches & Snacks</p>
            </article>
            <article class="menu-card" data-category="snacks">
              <div class="menu-card-hover-image">
                <img src="{{ asset('images/siomai-gyoza.png') }}" alt="Siomai / Gyoza">
                <div class="menu-card-hover-desc">Steamed siomai or pan-fried gyoza.</div>
              </div>
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

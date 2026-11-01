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
                <button class="filter-btn" data-filter="dessert">Dessert w/ Saltycream</button>
                <button class="filter-btn" data-filter="frappe">Blended Frappes</button>
                <button class="filter-btn" data-filter="hot">Hot Drinks</button>
                <button class="filter-btn" data-filter="fruit">Fruiteas</button>
                <button class="filter-btn" data-filter="other">Other Drinks</button>
                <button class="filter-btn" data-filter="savory">Savory</button>
                <button class="filter-btn" data-filter="snacks">Snacks</button>
            </div>
            <div class="menu-grid" id="menuGrid">
                <article class="menu-card" tabindex="0" data-category="coffee">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/iced-coffee/dash-latte.png') }}" alt="Dash Latte">
                        <div class="menu-card-hover-desc">Creamy milk tea with a smooth sweet macchiato topping.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/iced-coffee/dash-latte.png') }}" alt="Dash Latte">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Dash Latte</span>
                        <span class="menu-card-price">₱49</span>
                    </div>
                    <p class="menu-card-meta">Iced Coffee Series</p>
                </article>

                <article class="menu-card" tabindex="0" data-category="coffee">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/iced-coffee/cload-seasalt.png') }}" alt="Cloud Seasalt">
                        <div class="menu-card-hover-desc">Creamy coffee with a hint of sea salt.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/iced-coffee/cload-seasalt.png') }}" alt="Cloud Seasalt">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Cloud Seasalt</span>
                        <span class="menu-card-price">₱49</span>
                    </div>
                    <p class="menu-card-meta">Iced Coffee Series</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="coffee">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/iced-coffee/spanish-latte.png') }}" alt="Spanish Latte">
                        <div class="menu-card-hover-desc">Rich espresso with sweet condensed milk.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/iced-coffee/spanish-latte.png') }}" alt="Spanish Latte">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Spanish Latte</span>
                        <span class="menu-card-price">₱49</span>
                    </div>
                    <p class="menu-card-meta">Iced Coffee Series</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="coffee">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/iced-coffee/macchiato.png') }}" alt="Macchiato">
                        <div class="menu-card-hover-desc">Espresso with a touch of milk foam.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/iced-coffee/macchiato.png') }}" alt="Macchiato">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Macchiato</span>
                        <span class="menu-card-price">₱49</span>
                    </div>
                    <p class="menu-card-meta">Iced Coffee Series</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="coffee">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/iced-coffee/sweet-americano.png') }}" alt="Sweet Americano">
                        <div class="menu-card-hover-desc">Bold espresso with a hint of sweetness.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/iced-coffee/sweet-americano.png') }}" alt="Sweet Americano">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Sweet Americano</span>
                        <span class="menu-card-price">₱49</span>
                    </div>
                    <p class="menu-card-meta">Iced Coffee Series</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="coffee">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/iced-coffee/dark-mocha.png') }}" alt="Dark Mocha">
                        <div class="menu-card-hover-desc">Rich chocolate blended with dark espresso.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/iced-coffee/dark-mocha.png') }}" alt="Dark Mocha">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Dark Mocha</span>
                        <span class="menu-card-price">₱49</span>
                    </div>
                    <p class="menu-card-meta">Iced Coffee Series</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="milk-tea">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/milktea-with-pearls/tokyo.png') }}" alt="Tokyo Brown Sugar">
                        <div class="menu-card-hover-desc">Caramelized brown sugar with creamy milk tea.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/milktea-with-pearls/tokyo.png') }}" alt="Tokyo Brown Sugar">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Tokyo Brown Sugar</span>
                        <span class="menu-card-price">₱49</span>
                    </div>
                    <p class="menu-card-meta">Milk Tea w/ Pearls</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="milk-tea">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/milktea-with-pearls/sapporo.png') }}" alt="Sapporo">
                        <div class="menu-card-hover-desc">Smooth milk tea with a hint of vanilla.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/milktea-with-pearls/sapporo.png') }}" alt="Sapporo">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Sapporo</span>
                        <span class="menu-card-price">₱49</span>
                    </div>
                    <p class="menu-card-meta">Milk Tea w/ Pearls</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="milk-tea">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/milktea-with-pearls/hokkaido.png') }}" alt="Hokkaido">
                        <div class="menu-card-hover-desc">Creamy Hokkaido milk tea with rich flavor.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/milktea-with-pearls/hokkaido.png') }}" alt="Hokkaido">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Hokkaido</span>
                        <span class="menu-card-price">₱49</span>
                    </div>
                    <p class="menu-card-meta">Milk Tea w/ Pearls</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="milk-tea">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/milktea-with-pearls/okinawa.png') }}" alt="Okinawa Roasted">
                        <div class="menu-card-hover-desc">Roasted Okinawa milk tea with deep flavor.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/milktea-with-pearls/okinawa.png') }}" alt="Okinawa Roasted">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Okinawa Roasted</span>
                        <span class="menu-card-price">₱49</span>
                    </div>
                    <p class="menu-card-meta">Milk Tea w/ Pearls</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="milk-tea">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/milktea-with-pearls/nagoya.png') }}" alt="Nagoya Choco">
                        <div class="menu-card-hover-desc">Chocolate milk tea with Nagoya-inspired flavor.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/milktea-with-pearls/nagoya.png') }}" alt="Nagoya Choco">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Nagoya Choco</span>
                        <span class="menu-card-price">₱49</span>
                    </div>
                    <p class="menu-card-meta">Milk Tea w/ Pearls</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="milk-tea">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/milktea-with-pearls/kyoto.png') }}" alt="Kyoto Matcha">
                        <div class="menu-card-hover-desc">Premium Kyoto matcha with creamy milk.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/milktea-with-pearls/kyoto.png') }}" alt="Kyoto Matcha">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Kyoto Matcha</span>
                        <span class="menu-card-price">₱49</span>
                    </div>
                    <p class="menu-card-meta">Milk Tea w/ Pearls</p>
                </article>


                <article class="menu-card" tabindex="0" data-category="dessert">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/dessert-with-saltycream/forest-cake.png') }}" alt="Forest Cake">
                        <div class="menu-card-hover-desc">Chocolate cake with cherry and cream layers.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/dessert-with-saltycream/forest-cake.png') }}" alt="Forest Cake">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Forest Cake</span>
                        <span class="menu-card-price">₱59</span>
                    </div>
                    <p class="menu-card-meta">Dessert w/ Salty Cream</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="dessert">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/dessert-with-saltycream/matcha-cream.png') }}" alt="Matcha Cream">
                        <div class="menu-card-hover-desc">Smooth matcha dessert with creamy texture.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/dessert-with-saltycream/matcha-cream.png') }}" alt="Matcha Cream">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Matcha Cream</span>
                        <span class="menu-card-price">₱59</span>
                    </div>
                    <p class="menu-card-meta">Dessert w/ Salty Cream</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="dessert">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/dessert-with-saltycream/choco-muffy.png') }}" alt="Choco Muffy">
                        <div class="menu-card-hover-desc">Rich chocolate muffy with sweet cream.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/dessert-with-saltycream/choco-muffy.png') }}" alt="Choco Muffy">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Choco Muffy</span>
                        <span class="menu-card-price">₱59</span>
                    </div>
                    <p class="menu-card-meta">Dessert w/ Salty Cream</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="dessert">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/dessert-with-saltycream/mango-cream.png') }}" alt="Mango Cream">
                        <div class="menu-card-hover-desc">Sweet mango dessert with creamy topping.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/dessert-with-saltycream/mango-cream.png') }}" alt="Mango Cream">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Mango Cream</span>
                        <span class="menu-card-price">₱59</span>
                    </div>
                    <p class="menu-card-meta">Dessert w/ Salty Cream</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="dessert">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/dessert-with-saltycream/dark-chocolate.png') }}" alt="Dark Chocolate">
                        <div class="menu-card-hover-desc">Rich dark chocolate dessert with cream.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/dessert-with-saltycream/dark-chocolate.png') }}" alt="Dark Chocolate">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Dark Chocolate</span>
                        <span class="menu-card-price">₱59</span>
                    </div>
                    <p class="menu-card-meta">Dessert w/ Salty Cream</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="dessert">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/dessert-with-saltycream/velvet-cake.png') }}" alt="Velvet Cake">
                        <div class="menu-card-hover-desc">Red velvet cake with creamy frosting.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/dessert-with-saltycream/velvet-cake.png') }}" alt="Velvet Cake">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Velvet Cake</span>
                        <span class="menu-card-price">₱59</span>
                    </div>
                    <p class="menu-card-meta">Dessert w/ Salty Cream</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="frappe">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/blended-frappes/dark-forest.png') }}" alt="Dark Forest">
                        <div class="menu-card-hover-desc">Blended chocolate frappe with dark forest flavor.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/blended-frappes/dark-forest.png') }}" alt="Dark Forest">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Dark Forest</span>
                        <span class="menu-card-price">₱69</span>
                    </div>
                    <p class="menu-card-meta">Blended Frappes</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="frappe">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/blended-frappes/taro-dream.png') }}" alt="Taro Dream">
                        <div class="menu-card-hover-desc">Creamy taro frappe with sweet flavor.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/blended-frappes/taro-dream.png') }}" alt="Taro Dream">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Taro Dream</span>
                        <span class="menu-card-price">₱69</span>
                    </div>
                    <p class="menu-card-meta">Blended Frappes</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="frappe">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/blended-frappes/red-chocolate.png') }}" alt="Red Chocolate">
                        <div class="menu-card-hover-desc">Blended chocolate frappe with red velvet twist.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/blended-frappes/red-chocolate.png') }}" alt="Red Chocolate">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Red Chocolate</span>
                        <span class="menu-card-price">₱69</span>
                    </div>
                    <p class="menu-card-meta">Blended Frappes</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="frappe">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/blended-frappes/matchy-choco.png') }}" alt="Matchy Choco">
                        <div class="menu-card-hover-desc">Matcha and chocolate blended frappe.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/blended-frappes/matchy-choco.png') }}" alt="Matchy Choco">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Matchy Choco</span>
                        <span class="menu-card-price">₱69</span>
                    </div>
                    <p class="menu-card-meta">Blended Frappes</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="frappe">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/blended-frappes/vanilla-bean.png') }}" alt="Vanilla Bean">
                        <div class="menu-card-hover-desc">Smooth vanilla bean frappe with creamy texture.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/blended-frappes/vanilla-bean.png') }}" alt="Vanilla Bean">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Vanilla Bean</span>
                        <span class="menu-card-price">₱69</span>
                    </div>
                    <p class="menu-card-meta">Blended Frappes</p>
                </article>


                <article class="menu-card" tabindex="0" data-category="frappe">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/blended-frappes/oreo-cream.png') }}" alt="Oreo Cream">
                        <div class="menu-card-hover-desc">Creamy frappe blended with Oreo cookies.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/blended-frappes/oreo-cream.png') }}" alt="Oreo Cream">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Oreo Cream</span>
                        <span class="menu-card-price">₱69</span>
                    </div>
                    <p class="menu-card-meta">Blended Frappes</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="hot">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/hotdrinks/dash-latte.png') }}" alt="Dash Latte">
                        <div class="menu-card-hover-desc">Warm and creamy Dash Latte for cozy moments.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/hotdrinks/dash-latte.png') }}" alt="Dash Latte">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Dash Latte</span>
                        <span class="menu-card-price">₱59</span>
                    </div>
                    <p class="menu-card-meta">Hot Drinks</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="hot">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/hotdrinks/spanish-latte.png') }}" alt="Spanish Latte">
                        <div class="menu-card-hover-desc">Hot Spanish latte with sweet condensed milk.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/hotdrinks/spanish-latte.png') }}" alt="Spanish Latte">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Spanish Latte</span>
                        <span class="menu-card-price">₱59</span>
                    </div>
                    <p class="menu-card-meta">Hot Drinks</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="hot">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/hotdrinks/dark-chocolate.png') }}" alt="Dark Chocolate">
                        <div class="menu-card-hover-desc">Rich hot dark chocolate with creamy texture.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/hotdrinks/dark-chocolate.png') }}" alt="Dark Chocolate">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Dark Chocolate</span>
                        <span class="menu-card-price">₱59</span>
                    </div>
                    <p class="menu-card-meta">Hot Drinks</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="hot">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/hotdrinks/hazelnut.png') }}" alt="Hazelnut">
                        <div class="menu-card-hover-desc">Warm hazelnut drink with nutty flavor.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/hotdrinks/hazelnut.png') }}" alt="Hazelnut">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Hazelnut</span>
                        <span class="menu-card-price">₱59</span>
                    </div>
                    <p class="menu-card-meta">Hot Drinks</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="hot">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/hotdrinks/caramel-macchiato.png') }}" alt="Caramel Macchiato">
                        <div class="menu-card-hover-desc">Hot caramel macchiato with sweet caramel drizzle.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/hotdrinks/caramel-macchiato.png') }}" alt="Caramel Macchiato">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Caramel Macchiato</span>
                        <span class="menu-card-price">₱59</span>
                    </div>
                    <p class="menu-card-meta">Hot Drinks</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="hot">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/hotdrinks/matcha-latte.png') }}" alt="Matcha Latte">
                        <div class="menu-card-hover-desc">Warm matcha latte with creamy milk.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/hotdrinks/matcha-latte.png') }}" alt="Matcha Latte">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Matcha Latte</span>
                        <span class="menu-card-price">₱59</span>
                    </div>
                    <p class="menu-card-meta">Hot Drinks</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="fruit">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/fruiteas/strawberry.png') }}" alt="Strawberry">
                        <div class="menu-card-hover-desc">Refreshing strawberry fruitea with real fruit flavor.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/fruiteas/strawberry.png') }}" alt="Strawberry">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Strawberry</span>
                        <span class="menu-card-price">₱49</span>
                    </div>
                    <p class="menu-card-meta">Fruiteas & Fruit Sodas</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="fruit">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/fruiteas/green-apple.png') }}" alt="Green Apple">
                        <div class="menu-card-hover-desc">Crisp green apple fruitea with refreshing taste.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/fruiteas/green-apple.png') }}" alt="Green Apple">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Green Apple</span>
                        <span class="menu-card-price">₱49</span>
                    </div>
                    <p class="menu-card-meta">Fruiteas & Fruit Sodas</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="fruit">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/fruiteas/mango.png') }}" alt="Mango">
                        <div class="menu-card-hover-desc">Sweet mango fruitea with tropical flavor.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/fruiteas/mango.png') }}" alt="Mango">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Mango</span>
                        <span class="menu-card-price">₱49</span>
                    </div>
                    <p class="menu-card-meta">Fruiteas & Fruit Sodas</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="fruit">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/fruiteas/lychee.png') }}" alt="Lychee">
                        <div class="menu-card-hover-desc">Refreshing lychee fruitea with floral notes.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/fruiteas/lychee.png') }}" alt="Lychee">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Lychee</span>
                        <span class="menu-card-price">₱59</span>
                    </div>
                    <p class="menu-card-meta">Fruiteas & Fruit Sodas</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="other">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/other-drinks/matcha-frappe.png') }}" alt="Matcha Frappe">
                        <div class="menu-card-hover-desc">Creamy blended matcha frappe with a smooth finish.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/other-drinks/matcha-frappe.png') }}" alt="Matcha Frappe">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Matcha Frappe</span>
                        <span class="menu-card-price">₱69</span>
                    </div>
                    <p class="menu-card-meta">Other Drinks</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="other">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/other-drinks/matcha-strawberry-latte.png') }}" alt="Matcha Strawberry Latte">
                        <div class="menu-card-hover-desc">Creamy matcha latte layered with sweet strawberry.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/other-drinks/matcha-strawberry-latte.png') }}" alt="Matcha Strawberry Latte">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Matcha Strawberry Latte</span>
                        <span class="menu-card-price">₱69</span>
                    </div>
                    <p class="menu-card-meta">Other Drinks</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="other">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/other-drinks/salted-caramel-frappe.png') }}" alt="Salted Caramel Frappe">
                        <div class="menu-card-hover-desc">Blended caramel frappe with a hint of sea salt.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/other-drinks/salted-caramel-frappe.png') }}" alt="Salted Caramel Frappe">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Salted Caramel Frappe</span>
                        <span class="menu-card-price">₱69</span>
                    </div>
                    <p class="menu-card-meta">Other Drinks</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="other">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/other-drinks/salted-caramel-latte.png') }}" alt="Salted Caramel Latte">
                        <div class="menu-card-hover-desc">Smooth latte with sweet salted caramel.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/other-drinks/salted-caramel-latte.png') }}" alt="Salted Caramel Latte">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Salted Caramel Latte</span>
                        <span class="menu-card-price">₱59</span>
                    </div>
                    <p class="menu-card-meta">Other Drinks</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="other">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/other-drinks/salted-cocoa-chocolate.png') }}" alt="Salted Cocoa Chocolate">
                        <div class="menu-card-hover-desc">Rich cocoa chocolate drink with a salty finish.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/other-drinks/salted-cocoa-chocolate.png') }}" alt="Salted Cocoa Chocolate">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Salted Cocoa Chocolate</span>
                        <span class="menu-card-price">₱59</span>
                    </div>
                    <p class="menu-card-meta">Other Drinks</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="other">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/other-drinks/strawberry-milk.png') }}" alt="Strawberry Milk">
                        <div class="menu-card-hover-desc">Fresh strawberry flavor blended with cold creamy milk.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/other-drinks/strawberry-milk.png') }}" alt="Strawberry Milk">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Strawberry Milk</span>
                        <span class="menu-card-price">₱69</span>
                    </div>
                    <p class="menu-card-meta">Other Drinks</p>
                </article>

                <article class="menu-card" tabindex="0" data-category="savory">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/silog-menu/hotsilog.png') }}" alt="Hotsilog">
                        <div class="menu-card-hover-desc">Hotdog with garlic rice and egg.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/silog-menu/hotsilog.png') }}" alt="Hotsilog">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Hotsilog</span>
                        <span class="menu-card-price">₱59</span>
                    </div>
                    <p class="menu-card-meta">Silog & Savory Menu</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="savory">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/silog-menu/hamsilog.png') }}" alt="Hamsilog">
                        <div class="menu-card-hover-desc">Ham with garlic rice and egg.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/silog-menu/hamsilog.png') }}" alt="Hamsilog">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Hamsilog</span>
                        <span class="menu-card-price">₱59</span>
                    </div>
                    <p class="menu-card-meta">Silog & Savory Menu</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="savory">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/silog-menu/longsilog.png') }}" alt="Longsilog">
                        <div class="menu-card-hover-desc">Longganisa with garlic rice and egg.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/silog-menu/longsilog.png') }}" alt="Longsilog">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Longsilog</span>
                        <span class="menu-card-price">₱59</span>
                    </div>
                    <p class="menu-card-meta">Silog & Savory Menu</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="savory">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/silog-menu/tapsilog.png') }}" alt="Tapsilog">
                        <div class="menu-card-hover-desc">Tapa with garlic rice and egg.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/silog-menu/tapsilog.png') }}" alt="Tapsilog">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Tapsilog</span>
                        <span class="menu-card-price">₱79</span>
                    </div>
                    <p class="menu-card-meta">Silog & Savory Menu</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="savory">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/silog-menu/tosilog.png') }}" alt="Tosilog">
                        <div class="menu-card-hover-desc">Tocino with garlic rice and egg.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/silog-menu/tosilog.png') }}" alt="Tosilog">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Tosilog</span>
                        <span class="menu-card-price">₱79</span>
                    </div>
                    <p class="menu-card-meta">Silog & Savory Menu</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="savory">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/silog-menu/chicksilog.png') }}" alt="Chick-silog">
                        <div class="menu-card-hover-desc">Chicken with garlic rice and egg.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/silog-menu/chicksilog.png') }}" alt="Chick-silog">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Chick-silog</span>
                        <span class="menu-card-price">₱79</span>
                    </div>
                    <p class="menu-card-meta">Silog & Savory Menu</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="savory">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/silog-menu/porksilog.png') }}" alt="Porksilog">
                        <div class="menu-card-hover-desc">Pork with garlic rice and egg.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/silog-menu/porksilog.png') }}" alt="Porksilog">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Porksilog</span>
                        <span class="menu-card-price">₱89</span>
                    </div>
                    <p class="menu-card-meta">Silog & Savory Menu</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="savory">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/silog-menu/spamsilog.png') }}" alt="Spamsilog">
                        <div class="menu-card-hover-desc">Spam with garlic rice and egg.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/silog-menu/spamsilog.png') }}" alt="Spamsilog">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Spamsilog</span>
                        <span class="menu-card-price">₱89</span>
                    </div>
                    <p class="menu-card-meta">Silog & Savory Menu</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="savory">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/silog-menu/bangsilog.png') }}" alt="Bangsilog">
                        <div class="menu-card-hover-desc">Bangus with garlic rice and egg.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/silog-menu/bangsilog.png') }}" alt="Bangsilog">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Bangsilog</span>
                        <span class="menu-card-price">₱99</span>
                    </div>
                    <p class="menu-card-meta">Silog & Savory Menu</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="savory">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/silog-menu/hungarian.png') }}" alt="Hungarian">
                        <div class="menu-card-hover-desc">Hungarian sausage with garlic rice and egg.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/silog-menu/hungarian.png') }}" alt="Hungarian">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Hungarian</span>
                        <span class="menu-card-price">₱99</span>
                    </div>
                    <p class="menu-card-meta">Silog & Savory Menu</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="savory">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/silog-menu/nuggets.png') }}" alt="Nuggets">
                        <div class="menu-card-hover-desc">Crispy chicken nuggets with rice and egg.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/silog-menu/nuggets.png') }}" alt="Nuggets">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Nuggets</span>
                        <span class="menu-card-price">₱99</span>
                    </div>
                    <p class="menu-card-meta">Silog & Savory Menu</p>
                </article>

                <article class="menu-card" tabindex="0" data-category="snacks">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/snacks/spam-sandwich.png') }}" alt="Spam Sandwich">
                        <div class="menu-card-hover-desc">Classic spam sandwich with fresh veggies.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/snacks/spam-sandwich.png') }}" alt="Spam Sandwich">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Spam Sandwich</span>
                        <span class="menu-card-price">₱99</span>
                    </div>
                    <p class="menu-card-meta">Sandwiches</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="snacks">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/snacks/ham-sandwich.png') }}" alt="Ham Sandwich">
                        <div class="menu-card-hover-desc">Fresh ham sandwich with lettuce and mayo.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/snacks/ham-sandwich.png') }}" alt="Ham Sandwich">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Ham Sandwich</span>
                        <span class="menu-card-price">₱69</span>
                    </div>
                    <p class="menu-card-meta">Sandwiches</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="snacks">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/snacks/hungarian-overload.png') }}" alt="Hungarian Overload">
                        <div class="menu-card-hover-desc">Loaded Hungarian sausage sandwich.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/snacks/hungarian-overload.png') }}" alt="Hungarian Overload">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Hungarian Overload</span>
                        <span class="menu-card-price">₱79</span>
                    </div>
                    <p class="menu-card-meta">Sandwiches</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="snacks">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/snacks/burger.png') }}" alt="Burger">
                        <div class="menu-card-hover-desc">Classic burger with beef patty and veggies.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/snacks/burger.png') }}" alt="Burger">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Burger</span>
                        <span class="menu-card-price">₱30</span>
                    </div>
                    <p class="menu-card-meta">Sandwiches</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="snacks">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/snacks/cheese-sticks.png') }}" alt="Cheese Sticks">
                        <div class="menu-card-hover-desc">Crispy cheese sticks with dipping sauce.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/snacks/cheese-sticks.png') }}" alt="Cheese Sticks">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Cheese Sticks</span>
                        <span class="menu-card-price">₱20</span>
                    </div>
                    <p class="menu-card-meta">Snacks</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="snacks">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/snacks/fries.png') }}" alt="Fries">
                        <div class="menu-card-hover-desc">Golden crispy fries with salt.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/snacks/fries.png') }}" alt="Fries">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Fries</span>
                        <span class="menu-card-price">₱25</span>
                    </div>
                    <p class="menu-card-meta">Snacks</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="snacks">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/snacks/siomai.png') }}" alt="Siomai">
                        <div class="menu-card-hover-desc">Steamed or Fried Siomai.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/snacks/siomai.png') }}" alt="Siomai">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Siomai</span>
                        <span class="menu-card-price">₱25</span>
                    </div>
                    <p class="menu-card-meta">Siomai</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="snacks">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/snacks/big-siomai.png') }}" alt="Big Siomai">
                        <div class="menu-card-hover-desc">Jumbo steamed siomai packed with flavor.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/snacks/big-siomai.png') }}" alt="Big Siomai">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Big Siomai</span>
                        <span class="menu-card-price">₱35</span>
                    </div>
                    <p class="menu-card-meta">Siomai</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="snacks">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/snacks/siomai-rice.png') }}" alt="Siomai Rice">
                        <div class="menu-card-hover-desc">Steamed siomai served with hot rice.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/snacks/siomai-rice.png') }}" alt="Siomai Rice">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Siomai Rice</span>
                        <span class="menu-card-price">₱45</span>
                    </div>
                    <p class="menu-card-meta">Siomai</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="snacks">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/snacks/gyoza.png') }}" alt="Gyoza">
                        <div class="menu-card-hover-desc">Pan-fried gyoza with a crisp golden bottom.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/snacks/gyoza.png') }}" alt="Gyoza">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Gyoza</span>
                        <span class="menu-card-price">₱55</span>
                    </div>
                    <p class="menu-card-meta">Siomai</p>
                </article>
                <article class="menu-card" tabindex="0" data-category="snacks">
                    <div class="menu-card-hover-image">
                        <img src="{{ asset('menu-photos/snacks/waffle.png') }}" alt="Waffle">
                        <div class="menu-card-hover-desc">Warm, crisp waffle with a sweet finish.</div>
                    </div>
                    <img class="menu-card-thumb" src="{{ asset('menu-photos/snacks/waffle.png') }}" alt="Waffle">
                    <div class="menu-card-top">
                        <span class="menu-card-name">Waffle</span>
                        <span class="menu-card-price">₱39</span>
                    </div>
                    <p class="menu-card-meta">Snacks</p>
                </article>

            </div>
            <div class="addon-banner">
                <span class="addon-label">Add-ons Badge:</span>
                <span>Sinkers & Extras available: Coffee Jelly, Pearls, Salty Cream, Crushed Oreos, Coffee Shot — ₱10 -
                    ₱18</span>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/menu.js') }}"></script>
    <script>
        // Hover (desktop) or tap (phone/tablet) on a box:
        // that box moves down for its pop-up, and the boxes below it in the same column move down too.
        (function () {
            var cards = Array.prototype.slice.call(document.querySelectorAll('.menu-card'));
            var banner = document.querySelector('.addon-banner');
            var isTouch = function () {
                return window.matchMedia('(hover: none)').matches;
            };

            function isVisible(c) {
                return !c.classList.contains('hidden') && c.offsetParent !== null;
            }

            function clearPush() {
                cards.forEach(function (c) { c.classList.remove('is-shifted'); });
                if (banner) banner.classList.remove('is-shifted');
            }

            // push down every visible box below the active one, in the same column
            function pushBelow(card) {
                clearPush();
                var vis = cards.filter(isVisible);
                var maxTop = Math.max.apply(null, vis.map(function (c) { return c.offsetTop; }));
                var reachesBottom = Math.abs(card.offsetTop - maxTop) < 2;

                vis.forEach(function (c) {
                    if (c === card) return;
                    var sameColumn = Math.abs(c.offsetLeft - card.offsetLeft) < 2;
                    if (sameColumn && c.offsetTop > card.offsetTop) {
                        c.classList.add('is-shifted');
                        if (Math.abs(c.offsetTop - maxTop) < 2) reachesBottom = true;
                    }
                });

                // if the column reaches the last row, move the add-ons banner down as well
                if (banner && reachesBottom) banner.classList.add('is-shifted');
            }

            cards.forEach(function (card) {
                card.addEventListener('mouseenter', function () {
                    if (!isTouch()) pushBelow(card);
                });
                card.addEventListener('mouseleave', function () {
                    if (!isTouch()) clearPush();
                });
                card.addEventListener('click', function () {
                    if (!isTouch()) return;
                    cards.forEach(function (c) {
                        if (c !== card) c.classList.remove('is-open');
                    });
                    card.classList.add('is-open');
                    pushBelow(card);
                });
            });

            // tap anywhere else to close
            document.addEventListener('click', function (e) {
                if (!isTouch() || e.target.closest('.menu-card')) return;
                cards.forEach(function (c) { c.classList.remove('is-open'); });
                clearPush();
            });
        })();
    </script>
@endpush
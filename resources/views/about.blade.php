@extends('layouts.app')

@section('title', 'About | DashCoffee')

@section('content')
<section class="about section" id="about">
        <div class="container about-inner">
          <div class="about-image-wrap">
            <div class="about-visual" aria-label="Coffee shop illustration">
              <div class="cup"></div>
              <div class="bean bean-1"></div>
              <div class="bean bean-2"></div>
            </div>
          </div>
          <div class="about-copy">
            <p class="section-tag">ABOUT US</p>
            <h2>Cozy coffee, bold flavor, and comfort food that feels like home.</h2>
            <p>
              DashCoffee brings together handcrafted drinks, savory meals, and elevated student-friendly bites in a warm, welcoming atmosphere. Whether you're working, studying, or just taking a break, every sip is made to keep your day moving in the best way.
            </p>
            <a href="{{ route('menu') }}" class="btn btn-primary">SEE OUR MENU</a>
          </div>
        </div>
      </section>

@include('partials.values')
@endsection

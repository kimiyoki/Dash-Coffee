@extends('layouts.app')

@section('title', 'Contact | DashCoffee')

@section('content')
<section class="location section" id="locations">
        <div class="container location-grid">
          <div class="location-copy">
            <p class="section-tag">FIND US</p>
            <h2>Drop by for your next coffee break.</h2>
            <ul class="info-list">
              <li>
                <div class="info-icon">
                  <img src="{{ asset('images/map-pin.svg') }}" alt="Location"/>
                </div>
                <span> Block 3 Lot 53F Phase 4B, EASTWOOD RESIDENCES, Rodriguez, 1860 Rizal</span>
              </li>
              <li>
                  <img src="{{ asset('images/clock.svg') }}" alt="Hours"/>
                <span> 1:00pm to 9:00pm</span>
              </li>
            </ul>
            <a class="btn btn-primary" href="https://maps.app.goo.gl/K7sYFxtxxMJADu3k6" target="_blank" rel="noreferrer">VIEW LOCATION IN GOOGLE MAP</a>
          </div>
          <div class="map-card" aria-label="Map preview card">
            <div class="map-pin"><img src="{{ asset('images/map-pinned.svg') }}" alt="Map pin"></div>
            <p>Eastwood Residences</p>
            <span>Rodriguez, Rizal</span>
          </div>
        </div>
      </section>

<section class="contact section" id="contact">
        <div class="container contact-grid">
          <div class="contact-copy">
            <p class="section-tag">CONTACT US</p>
            <h2>We’d love to hear from you.</h2>
            <ul class="contact-list">
              <li>
                <div class="info-icon">
                  <img src="{{ asset('images/yahoo-brands-solid-full.svg') }}" alt="Email"/>
                </div>
                <a href="mailto:eiramvargas@yahoo.com">eiramvargas@yahoo.com</a>
              </li>
              <li>
                <div class="info-icon">
                  <img src="{{ asset('images/phone.svg') }}" alt="Phone"/>
                </div>
                <a href="tel:+639202773807">0920 277 3807</a>
              </li>
              <li>
                <div class="info-icon">
                  <img src="{{ asset('images/facebook-brands-solid-full.svg') }}" alt="Facebook"/>
                </div>
                <a href="#">Dash coffee montalban</a>
              </li>
              <li>
                <div class="info-icon">
                  <img src="{{ asset('images/instagram-brands-solid-full.svg') }}" alt="Instagram"/>
                </div>
                <a href="#">dashcfee_montalban</a>
              </li>
            </ul>
            <a class="btn btn-primary" href="mailto:eiramvargas@yahoo.com">CONTACT US</a>
          </div>
          <div class="contact-card">
            <p class="mini-text">Need a quick reply?</p>
            <h3>Let’s make your next coffee run effortless.</h3>
          </div>
        </div>
      </section>

<section class="feedback section">
        <div class="container feedback-wrap">
          <div class="section-heading">
            <p class="section-tag">FEEDBACK</p>
            <h2>Share your thoughts with us.</h2>
          </div>
          <form class="feedback-form" aria-label="Feedback form">
            <textarea
              id="feedbackText"
              maxlength="500"
              placeholder="Share your thoughts..."
              aria-label="Share your thoughts"
            ></textarea>
            <div class="form-footer">
              <span id="charCount">0 / 500 characters</span>
              <button type="submit" class="btn btn-primary">SUBMIT FEEDBACK</button>
            </div>
          </form>
        </div>
      </section>
@endsection

@push('scripts')
<script src="{{ asset('js/contact.js') }}"></script>
@endpush

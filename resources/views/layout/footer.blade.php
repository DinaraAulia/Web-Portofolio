<!-- info section -->
<section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <!-- Contact Info -->
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
              Contact
            </h4>
            <div class="contact_link_box">
              <a href="#">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Surabaya, Indonesia
                </span>
              </a>
              <a href="tel:+6281234567890">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  +62 812-3456-7890
                </span>
              </a>
              <a href="mailto:dinara@example.com">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  dinara@example.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="https://facebook.com/yourprofile" target="_blank">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="https://twitter.com/yourprofile" target="_blank">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="https://linkedin.com/in/yourprofile" target="_blank">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="https://instagram.com/yourprofile" target="_blank">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>

        <!-- About Info -->
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
                This website is a personal portfolio showcasing the work, projects, and interests of Dinara Aulia Safina.
            </p>
          </div>
        </div>

        <!-- Useful Links -->
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h4>
              Quick Links
            </h4>
            <div class="info_links">
              <a class="active" href="{{ url('/') }}">
                Home
              </a>
              <a href="{{ url('/about') }}">
                About
              </a>
              <a href="{{ url('/portfolio') }}">
                Portfolio
              </a>
              <a href="{{ url('/interest') }}">
                Interests
              </a>
              <a href="{{ url('/contact') }}">
                Contact
              </a>
            </div>
          </div>
        </div>

        <!-- Subscribe -->
        <div class="col-md-6 col-lg-3 info_col">
          <h4>
            Newsletter
          </h4>
          <form action="#" method="post">
            <input type="email" placeholder="Enter your email" required />
            <button type="submit">
              Send
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- end info section -->

  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved | Built with ❤️ by Dinara Aulia Safina
      </p>
    </div>
  </section>
  <!-- end footer section -->

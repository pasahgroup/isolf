@extends('website.layouts.apps')
@section('content')


<style>
.tooltip {
  /* triangle dimension */
  --b: 2em; /* base */
  --h: 1em; /* height */

  --p: 50%; /* triangle position (0%:left 100%:right) */
  --r: 1.2em; /* the radius */
  --c: #4ECDC4;

  border-radius: var(--r) var(--r) min(var(--r),100% - var(--p) - var(--b)/2) min(var(--r),var(--p) - var(--b)/2)/var(--r);
  clip-path: polygon(0 100%,0 0,100% 0,100% 100%,
    min(100%,var(--p) + var(--b)/2) 100%,
    var(--p) calc(100% + var(--h)),
    max(0%  ,var(--p) - var(--b)/2) 100%);
  background: var(--c);
  border-image: conic-gradient(var(--c) 0 0) fill 0/
    var(--r) calc(100% - var(--p) - var(--b)/2) 0 calc(var(--p) - var(--b)/2)/
    0 0 var(--h) 0;
}


body {
  margin: 0;
  min-height: 100vh;
  display: grid;
  gap: 20px;
  place-content: center;
  text-align: center;
  background: #f2f2f2;
}
.tooltip {
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  font-family: sans-serif;
  padding: 1em;
  max-width: 25ch;
}
</style>
  <!-- Add Class carousel-fade just to fade transition -->
  <div class="carousel slide carousel-fade full-heightx stick-top" id="carousel"  style="min-height: 610px;">
    <!-- Wrapper for slides -->






    <input type="range" step=".01" value=".5" min="0" max="1">
    <div class="tooltip">This is a simple Tooltip with a gradient coloration and with border radius </div>




















    <div class="carousel-inner" role="listbox">
      <div class="item zooming with-overlay active" style="background-image: url('http://placehold.it/1680x1050');"></div>
      <div class="item zooming with-overlay" style="background-image: url('http://placehold.it/1680x1050');"></div>
      <div class="item zooming with-overlay" style="background-image: url('http://placehold.it/1680x1050');"></div>
      <div class="item zooming with-overlay" style="background-image: url('http://placehold.it/1680x1050');"></div>
      <div class="item zooming with-overlay" style="background-image: url('http://placehold.it/1680x1050');"></div>
      <div class="item zooming with-overlay" style="background-image: url('http://placehold.it/1680x1050');"></div>
      <div class="item zooming with-overlay" style="background-image: url('http://placehold.it/1680x1050');"></div>

      <div class="carousel-caption full-width center-txt">
        <div class="container">
          <h3 class="main-header">Enjoy Adventure <br> Experience</h3>
          <hr>
          <p class="sub-header">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis modi tenetur obcaecati veniam harum ipsa voluptas, incidunt cum.</p>
          <br>
          <div class="search-bar padding-20">
            <div class="col-sm-10 row">
              <div class="col-sm-4 form-group">
                <label>From</label>
                <input type="text" class="form-control datepicker" readonly>
              </div>
              <div class="col-sm-4 form-group">
                <label>To</label>
                <input type="text" class="form-control datepicker" readonly>
              </div>
              <div class="col-sm-4 form-group">
                <label>Price</label>
                <select class="form-control">
                  <option value="">1000 - 2000</option>
                </select>
              </div>
            </div>
            <div class="col-sm-2">
              <button class="btn btn-search btn-primary hvr-sweep-to-right">Search</button>
            </div>
          </div>
        </div>
      </div>


    </div>

    <!-- Controls -->
    <!-- Available Variation Class for carousel-control => circle, bottom, bottom-left, bottom-right" -->
    <a class="left carousel-control bottom-right" href="#carousel" role="button" data-slide="prev">
      <span class="icon-arr-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control bottom-right" href="#carousel" role="button" data-slide="next">
      <span class="icon-arr-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>


    <!-- Indicators -->
    <!-- Available Variation Class for carousel-indicators => dashed, circle" -->
    <ol class="carousel-indicators dashed">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
      <li data-target="#carousel" data-slide-to="3"></li>
      <li data-target="#carousel" data-slide-to="4"></li>
      <li data-target="#carousel" data-slide-to="5"></li>
      <li data-target="#carousel" data-slide-to="6"></li>
      <li data-target="#carousel" data-slide-to="7"></li>
    </ol>
  </div>


  <div class="section bg-white">
    <div class="container">
      <div class="row  feature-list">

        <div class="col-sm-6 col-md-4">
          <span class="circle-icon line"><span class="icon-hand-scissor"></span></span>
          <div class="desc">
            <h4>Plan Adventure Guaranteed</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit fugit at facere, voluptatem accusamus similique autem.</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <span class="circle-icon line"><span class="icon-road-sign"></span></span>
          <div class="desc">
            <h4>Take Rare Path</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae laborum soluta quos praesentium, magni repellendus.</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <span class="circle-icon line"><span class="icon-map"></span></span>
          <div class="desc">
            <h4>Organise with Professional</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia blanditiis, deleniti necessitatibus doloribus vel.</p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="flex-row bg-base">
    <div class="flex-col-6 cover-bg-img" style="background-image: url('http://placehold.it/1680x1050');"></div>
    <div class="flex-col-6">
      <div class="padding-100">
        <div class="main-title left">
          <h2>Explore World <br> Beyond</h2>
          <p>Consectetur adipisicing elit. Quisquam fugit ducimus, qui molestias.</p>
        </div>
        <div class="row">
          <div class="col-sm-6">Esse iusto quibusdam quae assumenda dignissimos eligendi magni dolor error sunt corporis laborum maiores. At ad, ratione delectus inventore voluptas cum nulla molestias perferendis iste quis laborum veniam reprehenderit ipsam vitae, corrupti.
            Cumque enim, unde eveniet.</div>
          <div class="col-sm-6">Asperiores odit error cupiditate nam aperiam animi laborum aliquid. Doloremque, reiciendis perferendis praesentium necessitatibus quis cupiditate. Laborum dicta, ipsa aliquam fugiat!</div>
        </div>
        <br>
        <a href="" class="btn btn-md btn-primary btn-line">Check All Destinations</a>
      </div>
    </div>
  </div>
  <div class="flex-row bg-base">
    <div class="flex-col-6">
      <div class="counter-div base boxed">
        <div class="clearfix">
          <div class="col-sm-6 light">
            <span class="icon-font icon-tent"></span>
            <span class="counter">32</span>
            <p>Number of People Camped</p>
          </div>
          <div class="col-sm-6 dark">
            <span class="icon-font icon-camera"></span>
            <span class="counter">12437</span>
            <p>Pictures Taken this Year</p>
          </div>
          <div class="col-sm-6 dark">
            <span class="icon-font icon-sun"></span>
            <span class="counter">35</span>
            <p>Average Temprature</p>
          </div>
          <div class="col-sm-6 light">
            <span class="icon-font icon-umbrella"></span>
            <span class="counter">45</span>
            <p>Rainfall Last Year</p>
          </div>
        </div>
      </div>
    </div>
    <div class="flex-col-6 cover-bg-img" style="background-image: url('http://placehold.it/1680x1050');">
      <div class="padding-100">
        <div class="banner">
          <div class="line-box">
            <br>
            <br>
            <h2>Great Places, Great Holiday</h2>
            <a href="" class="btn btn-primary btn-lg hvr-sweep-to-right">Book Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="bg-white">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="main-title left">
            <h2>Our Top Destination</h2>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo</p>
            <p>Eius nostrum accusamus alias. Voluptatibus, sequi, a. Qui nam, nihil, ipsa tempora illo delectus nobis. Illo, veritatis.</p>
          </div>
          <a href="" class="btn btn-lg btn-primary">All Tours</a>
        </div>

        <div class="col-sm-8">
          <div class="item-list">
            <div class="col-sm-5">
              <div class="item-img row" style="background-image: url('http://placehold.it/320x250');">
                <div class="item-overlay">
                  <a href="trip_detail.html"><span class="icon-binocular"></span></a>
                </div>
              </div>
            </div>
            <div class="col-sm-7">
              <div class="item-desc">
                <h5 class="item-title">Fitz Roy Trek</h5>
                <div class="sub-title">
                  Argentina
                </div>
                <div class="item-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi id hic, voluptas rem, animi eniti, cupiditate.</div>

                <div class="left"><span class="icon-calendar"></span> 5 Days/3 Nights</div>
                <div class="right">
                  <a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulty - Easy"><span class="icon-easy"></span></a>
                  <a href="" data-toggle="tooltip" data-placement="bottom" title="Ticket"><span class="icon-plane"></span></a>
                  <a href="" data-toggle="tooltip" data-placement="bottom" title="Style - Camping"><span class="icon-tent"></span></a>
                </div>
              </div>
              <div class="item-book">
                <a href="trip_detail.html" class="btn btn-primary hvr-sweep-to-right">Book Now</a>
                <div class="price">USD 121</div>
              </div>
            </div>
          </div>

          <div class="item-list">
            <div class="col-sm-5">
              <div class="item-img row" style="background-image: url('http://placehold.it/320x250');">
                <div class="item-overlay">
                  <a href="trip_detail.html"><span class="icon-binocular"></span></a>
                </div>
              </div>
            </div>
            <div class="col-sm-7">
              <div class="item-desc">
                <h5 class="item-title">Annapurna Circuit</h5>
                <div class="sub-title">
                  Nepal
                </div>
                <div class="item-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi amet dolor accusamus nihil.</div>

                <div class="left"><span class="icon-calendar"></span> 5 Days/3 Nights</div>
                <div class="right">
                  <a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulty - Hard"><span class="icon-hard"></span></a>
                  <a href="" data-toggle="tooltip" data-placement="bottom" title="Ticket"><span class="icon-plane"></span></a>
                  <a href="" data-toggle="tooltip" data-placement="bottom" title="Style - Camping"><span class="icon-tent"></span></a>
                </div>
              </div>
              <div class="item-book">
                <a href="trip_detail.html" class="btn btn-primary hvr-sweep-to-right">Book Now</a>
                <div class="price">USD 121</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="banner">
    <div class="container">
      <div class="section-title center">
        <h3>Featured Guides</h3>
      </div>
      <div class="row team">
        <div class="col-sm-6 col-md-4">
          <div class="member">
            <div class="image">
              <img src="http://placehold.it/370x260" alt="">
            </div>
            <h4 class="name">Kim L. Burney</h4>
            <h5 class="detail">Guide/Writer</h5>
            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean</p>
            <div class="social">
              <a href="#" class="icon icon-facebook"></a>
              <a href="#" class="icon icon-twitter"></a>
              <a href="#" class="icon icon-google"></a>
              <a href="#" class="icon icon-rss"></a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="member">
            <div class="image">
              <img src="http://placehold.it/370x260" alt="">
            </div>
            <h4 class="name">Shing Ch'in</h4>
            <h5 class="detail">Tour Guide</h5>
            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean</p>
            <div class="social">
              <a href="#" class="icon icon-facebook"></a>
              <a href="#" class="icon icon-twitter"></a>
              <a href="#" class="icon icon-google"></a>
              <a href="#" class="icon icon-rss"></a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="member">
            <div class="image">
              <img src="http://placehold.it/370x260" alt="">
            </div>
            <h4 class="name">Pitez Maltr</h4>
            <h5 class="detail">City Guide</h5>
            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean</p>
            <div class="social">
              <a href="#" class="icon icon-facebook"></a>
              <a href="#" class="icon icon-twitter"></a>
              <a href="#" class="icon icon-google"></a>
              <a href="#" class="icon icon-rss"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="banner supported-by">
    <ul class="supported-list">
      <li>
        <a href="#">
          <img src="assets/img/supported_by/logo_2.png" alt="" data-rjs="2">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="assets/img/supported_by/logo_1.png" alt="" data-rjs="2">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="assets/img/supported_by/logo_3.png" alt="" data-rjs="2">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="assets/img/supported_by/logo_4.png" alt="" data-rjs="2">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="assets/img/supported_by/logo_5.png" alt="" data-rjs="2">
        </a>
      </li>
    </ul>
  </div>

  <section class="bg-white">
    <div class="container">
      <div class="main-title left">
        <h2>Contact us</h2>
        <p>Consectetur adipisicing elit. Quisquam fugit ducimus, qui molestias.</p>
      </div>

      <div class="row">
        <div class="col-sm-7">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37319.30096857599!2d-111.50394094053527!3d44.81298564157587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5351e55555555555%3A0xaca8f930348fe1bb!2sYellowstone+National+Park!5e0!3m2!1sen!2snp!4v1493435077252"
          style="width: 100%; border:0" height="450" allowfullscreen></iframe>
        </div>
        <div class="col-sm-4 col-sm-offset-1">
          <form>
            <div class="form-group">
              <label>Your Name <span class="required">*</span>
              </label>
              <input type="text" class="form-control" placeholder="Full Name">
            </div>
            <div class="form-group">
              <label>Email <span class="required">*</span>
              </label>
              <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label>Message</label>
              <textarea class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-md btn-primary hvr-sweep-to-right">Subscribe</button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 col-md-3">
          <h3>Mold Discover</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, quia, architecto? A, reiciendis eveniet! Esse est eaque adipisci natus rerum laudantium accusamus magni.</p>
        </div>
        <div class="col-sm-5 col-md-2">
          <h3>Quick Link</h3>
          <ul>
            <li>Holiday Package</li>
            <li>Summer Adventure</li>
            <li>Bus and Trasnportation</li>
            <li>Ticket and Hotel Booking</li>
            <li>Trek and Hikings</li>
          </ul>
        </div>
        <div class="col-sm-7 col-md-4">
          <h3>Newsletter Signup</h3>
          <p>Subscribe to our weekly newsletter to get news and update</p>
          <br>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Your Email">
            <div class="input-group-btn">
              <button class="btn btn-primary">Subscribe</button>
            </div>
          </div>
        </div>
        <div class="col-sm-5 col-md-2">
          <h3>Contact Info</h3>
          <ul>
            <li>Mold Discover</li>
            <li>info@moldthemes.com</li>
          </ul>
          <div class="clearfix">
            <div class="social-icon-list">
              <ul>
                <li>
                  <a href="https://twitter.com/moldthemes" class="icon-twitter"></a>
                </li>
                <li>
                  <a href="mailto:info@moldthemes.com" class="icon-mail"></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copy"><span>&copy;</span> Copyright Mold Discover, 2017</div>
  </footer>

  <script src="vendor/jquery/dist/jquery.min.js"></script>
  <script src="vendor/jqueryui/jquery-ui-1.10.3.custom.min.js"></script>
  <script src="vendor/jquery.ui.touch-punch.min.js"></script>
  <script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>

  <script src="vendor/waypoints/lib/jquery.waypoints.min.js"></script>
  <script src="vendor/owlcarousel/owl.carousel.min.js"></script>
  <script src="vendor/retina.min.js"></script>
  <script src="vendor/jquery.imageScroll.min.js"></script>
  <script src="assets/js/min/responsivetable.min.js"></script>
  <script src="assets/js/bootstrap-tabcollapse.js"></script>

  <script src="assets/js/min/countnumbers.min.js"></script>
  <script src="assets/js/main.js"></script>

  <!-- Current Page JS -->
  <script src="assets/js/min/home.min.js"></script>
  <script>
    $(document).ready(function(){
            $('.equal-height > div').deasil_equalHeight();
            $('#carousel').carousel({
              interval: 10000
            })
          });
          $(window).resize(function(){
            $('.equal-height > div').deasil_equalHeight();
          });
  </script>

  <script>
  document.querySelector('input').addEventListener('input', e => {
    e.target.nextElementSibling.style.setProperty("--p", (100*e.target.value)+"%");
 });
  </script>

</body>
@endsection

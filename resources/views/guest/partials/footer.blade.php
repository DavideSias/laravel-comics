<footer>
    <div class="footer-links">
        <div class="container">
          <div class="link-list">
            <div class="comics-shop-list">
              <div class="comics-list">
                <ul>
                  <h3> DC COMICS </h3>
                  @foreach ($menu as $link)
                  <li>
                    <a href="#!">{{ $link['label'] }}</a>
                  </li>
                  @endforeach
                </ul>
              </div>
              <div class="shop-list">
                <ul>
                  <h3>SHOP</h3>
                  @foreach ($linkShop as $link)
                  <li>
                    <a href="#!">{{ $link['label'] }}</a>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
            <div class="dc-list">
              <ul>
                <h3> DC </h3>
                @foreach ($linkDC as $link)
                <li>
                  <a href="#!">{{ $link['label'] }}</a>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="sites-list">
              <ul>
                <h3> SITES </h3>
                @foreach ($linkSites as $link)
                <li>
                  <a href="#!">{{ $link['label'] }}</a>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
          <div class="img-container" />
        </div>
      </div>
      <div class="footer-social">
        <div class="container">
          <button>SIGN-UP NOW!</button>
          <div class="social">
            <div class="follow-us">
              FOLLOW US
            </div>
            <div class="icons">
              <img
                src="{{ asset('img/footer-facebook.png')}}"
                alt="facebook"
              >
              <img
                src="{{ asset('img/footer-twitter.png')}}"
                alt="facebook"
              >
              <img
                src="{{ asset('img/footer-youtube.png')}}"
                alt="facebook"
              >
              <img
                src="{{ asset('img/footer-pinterest.png')}}"
                alt="facebook"
              >
              <img
                src="{{ asset('img/footer-periscope.png')}}"
                alt="facebook"
              >
            </div>
          </div>
        </div>
      </div>
</footer>

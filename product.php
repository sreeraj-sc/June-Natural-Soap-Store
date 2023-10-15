<?php
  include './common/CommonHeader.php';
?>

    <div class="page__title-area">
      <div class="container">
        <div class="page__title-container">
          <ul class="page__titles">
            <li>
              <a href="/">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-home"></use>
                </svg>
              </a>
            </li>
            <li class="page__title">Glycerin Honey</li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <main id="main">
    <div class="container">
      <!-- Products Details -->
      <section class="section product-details__section">
        <div class="product-detail__container">
          <div class="product-detail__left">
            <div class="details__container--left">
              <div class="product__picture" id="product__picture">
                <!-- <div class="rect" id="rect"></div> -->
                <div class="picture__container">
                  <img src="./images/products/soap/product3.jpg" id="pic" />
                </div>
              </div>
              <div class="zoom" id="zoom"></div>
            </div>

            <div class="product-details__btn">
              <a class="add" href="#">
                <span>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-cart-plus"></use>
                  </svg>
                </span>
                ADD TO CART</a>
              <a class="buy" href="#">
                <span>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-credit-card"></use>
                  </svg>
                </span>
                BUY NOW
              </a>
            </div>
          </div>

          <div class="product-detail__right">
            <div class="product-detail__content">
              <h3>Glycerin Honey</h3>
              <div class="price">
                <span class="new__price">750rs</span>
              </div>
              <div class="product__review">
                <div class="rating">
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                  </svg>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                  </svg>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                  </svg>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                  </svg>
                  <svg>
                    <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                  </svg>
                </div>
                <a href="#" class="rating__quatity">3 reviews</a>
              </div>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                a doloribus iste natus et facere?
                dolor sit amet consectetur adipisicing elit. Sunt
                a doloribus iste natus et facere?
              </p>
              <div class="product__info-container">
                <ul class="product__info">
                  <li>
                    <div class="input-counter">
                      <span>Quantity:</span>
                      <div>
                        <span class="minus-btn">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-minus"></use>
                          </svg>
                        </span>
                        <input type="text" min="1" value="1" max="10" class="counter-btn">
                        <span class="plus-btn">
                          <svg>
                            <use xlink:href="./images/sprite.svg#icon-plus"></use>
                          </svg>
                        </span>
                      </div>
                    </div>
                  </li>

                  <li>
                    <span>Subtotal:</span>
                    <a href="#" class="new__price">800rs</a>
                  </li>
                  <li>
                    <span>Availability:</span>
                    <a href="#" class="in-stock">In Stock (7 Items)</a>
                  </li>
                </ul>
                <div class="product-info__btn">
                  <a href="#">
                    <span>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-crop"></use>
                      </svg>
                    </span>&nbsp;
                    SIZE GUIDE
                  </a>
                  <a href="#">
                    <span>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-truck"></use>
                      </svg>
                    </span>&nbsp;
                    SHIPPING
                  </a>
                  <a href="#">
                    <span>
                      <svg>
                        <use xlink:href="./images/sprite.svg#icon-envelope-o"></use>
                      </svg>&nbsp;
                    </span>
                    ASK ABOUT THIS PRODUCT
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Facility Section -->
    <section class="facility__section section" id="facility">
      <div class="container">
        <div class="facility__contianer">
          <div class="facility__box">
            <div class="facility-img__container">
              <svg>
                <use xlink:href="./images/sprite.svg#icon-airplane"></use>
              </svg>
            </div>
            <p>ALL KERALA FREE SHIPPINGE</p>
          </div>

          <div class="facility__box">
            <div class="facility-img__container">
              <svg>
                <use xlink:href="./images/sprite.svg#icon-credit-card-alt"></use>
              </svg>
            </div>
            <p>100% MONEY BACK GUARANTEE IF NOT USED</p>
          </div>

          <div class="facility__box">
            <div class="facility-img__container">
              <svg>
                <use xlink:href="./images/sprite.svg#icon-credit-card"></use>
              </svg>
            </div>
            <p>MANY PAYMENT GATWAYS</p>
          </div>

          <div class="facility__box">
            <div class="facility-img__container">
              <svg>
                <use xlink:href="./images/sprite.svg#icon-headphones"></use>
              </svg>
            </div>
            <p>24/7 ONLINE SUPPORT</p>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
  include './common/CommonFooter.php';
?>
  <!-- PopUp 1 -->
  <div class="popup hide__popup">
    <div class="popup__content">
      <div class="popup__close">
        <svg>
          <use xlink:href="./images/sprite.svg#icon-cross"></use>
        </svg>
      </div>
      <div class="popup__left">
        <div class="popup-img__container">
          <img class="popup__img" src="./images/popup.jpg" alt="popup">
        </div>
      </div>
      <div class="popup__right">
        <div class="right__content">
          <h1>Get Discount <span>30%</span> Off</h1>
          <p>Sign up to our updates and save 30% for you next purchase. No spam, we promise!
          </p>
          <form action="#">
            <input type="email" placeholder="Enter your email..." class="popup__form">
            <a href="#">Subscribe</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Popup 2 (New Popup) -->
<div class="popup2 hide__popup" id="loginPopup">
    <div class="popup__content centered">
        <div class="popup__close">
            <svg>
                <use xlink:href="./images/sprite.svg#icon-cross"></use>
            </svg>
        </div>
        <div class="centered-content">
            <div class="login-form glide">
               <h1>June Login</h1><br>
              <hr><br>
              <form action="login.php " method="post">
                <input type="email" name="email" placeholder="email" class="popup__form">
                <input type="password" name="password" placeholder="Password" class="popup__form">
                <button class="submit btn-success" name="login" type="submit" id="login">submit</button>
              </form>
              <p>Don't have an account? <a href="registration.php"><strong>Sign Up</strong></a></p>
            </div>
        </div>
    </div>
</div>
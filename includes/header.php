<?php

$isPartner =  $page == 'ib-partner' || $page == 'analysis-education' || $page == 'copy-trading' || $page == 'service-provider' || $page == 'regional-partner';

$isTransparentHeader = $page == 'privacy-policy' || $page == 'about' || $page == 'promotion' || $isPartner || $page == 'trading' || $page == 'trading-instruments' || $page == 'pricing-spreads' || $page == 'platform-info' || $page == 'home' || $page == 'funding' || $page == 'copyTrading'



?>

<style>
  .underoncstruction p {
    padding: 6px 0px;

    font-size: 13px;

    text-transform: capitalize;



  }

  .nav-item {
    display: inline;
  }

  .dropdown-menu {
    position: absolute;
    inset: 0px auto auto 0px;
    margin: 0px;
    transform: translate(10px, 33px);
  }

  .login-item:hover {
    color: black !important;
  }

  @media(max-width:768px) {

    .img-sm-30 {

      width: 30%;

    }

    .img-sm-40 {

      width: 40%;

    }

    .img-sm-50 {

      width: 50%;

    }

  }
</style>

<?php

if ($isPartner) {

?>

  <style>
    @media(max-width:992px) {

      /* body {} */

      header.fixed {

        position: relative;

        background: #000;

      }

      .banner {

        padding-top: 0px;

      }

      .banner .section-header {

        margin-top: 0px !important;

      }

      .banner form,
      .banner form button {

        margin-top: 0px !important;

      }

      .banner form [class*=col-] {

        padding: 0px 3px;

        margin-top: 7px !Important;

      }

      .banner form input::placeholder,

      .banner form textarea::placeholder {

        font-size: 10px !important;

        color: #7a7878;

      }

    }
  </style>

<?php

} ?>





<?php

if ($isTransparentHeader) {

?>

  <style>
    @media (max-width: 768px) {

      .mainSlider .item {

        padding-top: 26vh;

      }

    }
  </style>

<?php

} ?>



<header class="<?php if ($isTransparentHeader == 1) {
                  echo 'fixed';
                } ?>">

  <div class="underoncstruction d-none">

    <p><img src="./assets/header/under-construction-min.png" width="30"> Note: MBFX GLOBAL Team is working to upgrade some features of the website to make your experience better. Some links may not work at the moment.</p>

  </div>

  <div class="navTop py-2 py-md-4">

    <div class="container">

      <div class="row justify-content-center align-items-center">

        <div class="col-12 col-md-6 col-xl-5">

          <div class="left text-center text-md-start">

            <a target="_blank" href="#" class="d-none">Welcome to MBFX GLOBAL</a>

            <a target="_blank" href="mailto:support@mbfx.co"><img src="./assets/header/email-icon.png" /> support@mbfx.co</a>

            <!-- <a target="_blank" class="d-none d-xl-inline" href="tel:+44 20 3290 5333"><img src="./assets/header/phone-icon.png" /> +44 20 3290 5333</a>

            <a target="_blank" href="https://wa.me/447927555692?text="><img src="./assets/header/WhatsApp.png" /> +44 79 2755 5692 </a> -->

          </div>

        </div>

        <div class="col-12 col-md-6 col-xl-7">

          <div class="right text-md-end">

            <!--  -->
            <div class="nav-item">


              <a target="_blank" class="d-none d-xl-inline nav-link dropdown-toggle" id="navbarDropdowns" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="./assets/header/login.png" /> &nbsp; Client Login</a>

              <ul class="dropdown-menu  slideIn" aria-labelledby="navbarDropdown">

                <li><a class="dropdown-item login-item" href="https://my.mbfx.co/en/login" target="_blank">Retail Broker </a></li>

                <!-- <li><a class="dropdown-item login-item" href="https://trader.mbfx.co/auth/signin" target="_blank">Prop Fund</a></li> -->


              </ul>

            </div>

            <!-- // -->

            <!-- <a target="_blank" href="<?php echo $loginUrl; ?>" class="d-none d-xl-inline"><img src="./assets/header/login.png" /> &nbsp; Client Login</a> -->

            <a target="_blank" href="<?php echo $signupUrl; ?>" class="d-none d-xl-inline btn btn-primary <?php if ($isTransparentHeader == 1) {

                                                                                                            echo 'btn-secondary-outline';
                                                                                                          } else {

                                                                                                            echo 'btn-secondary-outline';
                                                                                                          } ?>">Open Demo Account</a>

            <a target="_blank" href="<?php echo $signupUrl; ?>" class="d-none d-xl-inline btn btn-primary btn-primary">Open Live Account</a>
            <!-- <a target="_blank" href="<?php customUrl("funding"); ?>" class="d-none d-xl-inline btn btn-primary btn-primary position-relative">MBFX Funding
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                NEW

              </span>
            </a> -->

          </div>

        </div>

      </div>

    </div>

  </div>

  <nav class="navbar navBottom navbar-expand-lg navbar-dark py-md-4">

    <div class="container">

      <a target="_blank" class="navbar-brand" href="<?php customUrl("index"); ?>"><img src="./assets/header/mbfx-logo.png" /></a>



      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="z-index: 7;">

        <ul class="navbar-nav ms-auto mb-lg-0">

          <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

              Trading

            </a>

            <ul class="dropdown-menu animate slideIn" aria-labelledby="navbarDropdown">

              <li><a class="dropdown-item" href="<?php customUrl("trading-accounts"); ?>">Trading Accounts</a></li>

              <li><a class="dropdown-item" href="<?php customUrl("trading-instruments"); ?>"> Trading Instruments</a></li>

              <li><a class="dropdown-item" href="<?php customUrl("pricing-spreads"); ?>"> Pricing Spreads</a></li>

              <li><a class="dropdown-item" href="<?php customUrl("platform-info"); ?>"> Platform Info</a></li>

            </ul>

          </li>

          <li class="nav-item">

            <a class="nav-link target=" _blank" <?php if ($page == 'analysis-education') {
                                                  echo 'active';
                                                } ?>" href="<?php customUrl("analysis-education"); ?>">Analysis & Education</a>

          </li>

          <li class="nav-item">

            <a class="nav-link" href="<?php customUrl("promotion"); ?>">Promotions</a>

          </li>



          <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">

              Partners

            </a>

            <ul class="dropdown-menu animate slideIn" aria-labelledby="navbarDropdown2">

              <li><a class="dropdown-item" href="<?php customUrl("regional-partner"); ?>">Regional Partner</a></li>

              <li><a class="dropdown-item" href="<?php customUrl("ib-partner"); ?>">IB Partner</a></li>

              <li><a class="dropdown-item" href="<?php customUrl("copy-trading"); ?>">Copy Trading</a></li>

              <li><a class="dropdown-item" href="<?php customUrl("service-provider"); ?>">Service Provider</a></li>

            </ul>

          </li>

          <li class="nav-item">

            <a class="nav-link <?php if ($page == 'about') {

                                  echo 'active';
                                } ?>" href="<?php customUrl("about"); ?>">About</a>

          </li>

          <li class="nav-item d-block d-md-none d-lg-none d-xl-none my-4">


            <a target="_blank" href="<?php echo $loginUrl; ?>" class="d-inline nav-link dropdown-toggle" id="navbarDropdowns" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="./assets/header/login.png" /> &nbsp; Client Login</a>

            <ul class="dropdown-menu  slideIn" aria-labelledby="navbarDropdown">

              <li><a class="dropdown-item login-item" href="https://my.mbfx.co/en/login" target="_blank">Retail Broker </a></li>

              <!-- <li><a class="dropdown-item login-item" href="https://trader.mbfx.co/auth/signin" target="_blank">Prop Fund</a></li> -->


            </ul>

            &nbsp;|&nbsp; <a target="_blank" href="<?php echo $signupUrl; ?>">Open Live Account</a>
          </li>


          <!--<li class="nav-item">-->

          <!--  <a class="nav-link" href="https://mbfx.ladesk.com/"  target="_blank">Support</a>-->

          <!--</li>-->



        </ul>



      </div>

    </div>

  </nav>

</header>
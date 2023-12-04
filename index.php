<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('includes/headScript.php'); ?>
  <link rel="stylesheet" href="css/index.css" />
  <title>Welcome to MBFX GLOBAL</title>
  <?php
  $page = 'home';
  ?>
  <style>
    .mapMarkers {
      position: absolute;
      height: 100%;
      width: 90%;
      top: 0;
    }

    .mapMarkers .wrap,
    .mapMarkers .flagContainer {
      position: relative;
      height: 100%;
    }

    .markers {
      height: 10px;
      width: 10px;
      background: var(--brandColor1);
      position: absolute;
      display: block;
      border-radius: 100%;
    }

    .mapMarkers .flagContainer img {
      position: absolute;
      top: 0;
      width: 27px;
    }

    .modal-custom-size {
      max-width: 80%;
    }

    .popup-close-btn {
      position: absolute;
      right: 10px;
      top: 10px;
      background-color: #e3373f;
    }

    .dull-back {
      background-color: rgba(0, 0, 0, 0.8);
    }
  </style>
</head>

<body>

  <!-- Promotion Modal -->
  <div class="modal fade dull-back" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered position-relative modal-custom-size">
      <div class="modal-content">
        <button type="button" class="btn-close popup-close-btn" data-bs-dismiss="modal" aria-label="Close"></button>
        <img src="./assets/referal-pop.jpeg" class="w-100" />
        <!-- <video src="assets/banners/Dash board - GIF.mp4" autoplay></video> -->
        <a type="button" class="btn btn-danger modal-contact-us" href="https://api.whatsapp.com/send/?phone=447927555692&text&type=phone_number&app_absent=0" target="_blank">Contact US</a>
      </div>
    </div>
  </div>

  <!--Promotion Modal-->

  <?php include('includes/header.php'); ?>
  <section class="mainSlider dark">
    <div id="particles-js"><canvas class="particles-js-canvas-el" width="1903" height="754" style="width: 100%; height: 100%"></canvas></div>
    <div class="owl-carousel owl-theme" id="mainSlider">
      <div class="item" id="slide1">
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 col-lg-5 pe-lg-5">
              <h1>GET THE BEST<br> START IN THE TRADING WORLD</h1>
              <ul class="check">
                <li>Spread as low as <strong class="text-red">0.0 Pips</strong>.</li>
                <li>Fastest Trade Execution.</li>
                <li>Maximum Leverage.</li>
                <li>EAs Integrated Environment.</li>
                <!-- <li>Most Secure and Multi-Contienet Regulated Broker.</li> -->
              </ul>
              <div class="text-center text-md-start"><a href="<?php echo $signupUrl; ?>" target="_blank" class="btn btn-secondary">Open A live Account</a></div>
              <?php include('includes/regulators.php'); ?>
            </div>
            <div class="col-12 col-md-6 col-lg-7 d-none d-md-flex"><img src="./assets/Slider/slider1.webp" /></div>
          </div>
        </div>
      </div>
      <div class="item" id="slide2">
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 col-lg-5">
              <h1>BECOME THE HIGHEST-EARNING IB</h1>
              <ul class="check">
                <li>Earn up to <strong class="text-red">20$ REBATE</strong> per trade.</li>
                <li>Withdraw your earnings any time</li>
                <li>Get your Personal Manager</li>
                <li>Market yourself with an expert marketing team</li>
                <li>Extra Monthly Allowances, Net-worker payouts, gifts, rewards and much more</li>
              </ul>
              <div class="text-center text-md-start"><a target="_blank" href="<?php echo $signupUrl; ?>" class="btn btn-secondary">Open A live Account</a></div>
              <?php include('includes/regulators.php'); ?>
            </div>
            <div class="col-12 col-md-6 col-lg-7  d-none d-md-flex">
              <img class="lazyImage carMoneyImg" data-src="./assets/Slider/banner img-01.png" />
            </div>
          </div>
        </div>
      </div>
      <div class="item" id="slide3">
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-5">
              <h1>Best Crypto CFD <br>Liquidity Provider (2019)</h1>
              <ul class="check">
                <li>Trade crypto with the <strong class="text-red">TIGHTEST SPREAD</strong> and <strong class="text-red">COMMISSION</strong></li>
                <li>Trade <strong class="text-green">SWAP-FREE</strong> Crypto.</li>
                <li>Vast number of tradable crypto coins.</li>
                <li>Copy professional crypto traders</li>
                <li>Get flexible leverage</li>
              </ul>
              <div class="text-center text-md-start"><a href="<?php echo $signupUrl; ?>" class="btn btn-secondary">Open
                  A live Account</a></div>
              <?php include('includes/regulators.php'); ?>
            </div>
            <div class="col-12 col-md-7 d-none d-md-flex"><img class="w-100 lazyImage" data-src="./assets/Slider/slider3.webp" /></div>
          </div>
        </div>
      </div>
      <div class="item" id="slide4">
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 pe-lg-5">
              <h1>COPY TRADES <br>IN ONE CLICK</h1>
              <ul class="check">
                <li>Discover the world of the finest traders</li>
                <li>Select the trader of your choice and get incredible returns.</li>
                <li>Stay up to date with daily reports.</li>
                <li>Get complimentary rewards</li>
                <li>Trade with those who choose to work with a regulated award-winning broker</li>
              </ul>
              <div class="text-center text-md-start"><a type="button" href="<?php echo $signupUrl; ?>" class="btn btn-secondary">Open A live Account</a></div>
              <?php include('includes/regulators.php'); ?>
            </div>
            <div class="col-12 col-md-6 d-none d-md-flex"><img src="./assets/Slider/slider4.webp" class="w-100 lazyImage" /></div>
          </div>
        </div>
      </div>
      <div class="item" id="slide5">
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 pe-lg-5">
              <h1>TRADE WITH CONFIDENCE</h1>
              <ul class="check">
                <li>Enjoy 500+ instruments including CRYPTO and STOCKS too.</li>
                <li>24/5 Free of cost consultation</li>
                <li>Daily analysis support by expert advisers</li>
                <li>Become a skilled trader with one-to-one short courses, and seminars</li>
                <li>Get market insights and drill down into the market.</li>
              </ul>
              <div class="row align-items-center mb-3  support gx-5">
                <div class="col-6 col-md-5  after-border position-relative">
                  <div class="support-wrapper">
                    <img src="./assets/Slider/Trustpilot.png" class="w-100">
                  </div>
                  <p class="text-center mt-3">4.6 out of 5 stars</p>
                </div>
                <div class="col-6 col-md-5 pe-5 pe-lg-0">
                  <div class="support-wrapper">
                    <img src="./assets/Slider/support.png" class="w-100" style="width:90%">
                  </div>
                  <p class="text-center mt-3 fst-italic">Friendly customer support</p>
                </div>
              </div>
              <?php include('includes/regulators.php'); ?>
            </div>
            <div class="col-12 col-md-6 d-none d-md-flex"><img data-src="./assets/Slider/slider5.jpg" class="w-100 lazyImage borderTransform" /></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- <section class="logos p-4">
    <div class="owl-carousel owl-theme" id="logos">
      <div class="item">
        <img class="lazyImage" data-src="./assets/partners-logo/01-hover.png" />
      </div>
      <div class="item">
        <img class="lazyImage" data-src="./assets/partners-logo/02-hover.png" />
      </div>
      <div class="item">
        <img class="lazyImage" data-src="./assets/partners-logo/03-hover.png" />
      </div>
      <div class="item">
        <img class="lazyImage" data-src="./assets/partners-logo/04-hover.png" />
      </div>
      <div class="item">
        <img class="lazyImage" data-src="./assets/partners-logo/05-hover.png" />
      </div>
      <div class="item">
        <img class="lazyImage" data-src="./assets/partners-logo/06-hover.png" />
      </div>
      <div class="item">
        <img class="lazyImage" data-src="./assets/partners-logo/07-hover.png" />
      </div>
      <div class="item">
        <img class="lazyImage" data-src="./assets/partners-logo/08-hover.png" />
      </div>
      <div class="item">
        <img class="lazyImage" data-src="./assets/partners-logo/09-hover.png" />
      </div>
      <div class="item">
        <img class="lazyImage" data-src="./assets/partners-logo/10-hover.png" />
      </div>
      <div class="item">
        <img class="lazyImage" data-src="./assets/partners-logo/11-hover.png" />
      </div>
      <div class="item">
        <img class="lazyImage" data-src="./assets/partners-logo/12-hover.png" />
      </div>
      <div class="item">
        <img class="lazyImage" data-src="./assets/partners-logo/13-hover.png" />
      </div>
    </div>
  </section> -->
  <section id="aboutCompany" class="aboutCompany" data-aos="fade-up">
    <div class="container">
      <div class="row px-md-5 justify-content-center align-items-center">
        <div class="col-12 col-md-12 col-lg-6">
          <div class="section-header">
            <h2 class="mb-md-5">
              MBFX GLOBAL operates
              multiple IB offices worldwide

            </h2>
            <p class="mb-md-3">Serving international clients and partners in major financial hubs globally. As a global broker, MBFX GLOBAL provides seamless access to <strong> thousands of partner spaces in over 540 cities and 50 countries,</strong> with more spaces being added every day.</p>
          </div>
          <!--<div class="row">-->
          <!--  <div class="col-4 col-md-4">-->
          <!--    <div class="about-box text-center text-md-start">-->
          <!--      <h2><span class='counter'>350</span>k</h2>-->
          <!--      <div>-->
          <!--        <p><strong>Active Clients</strong> </p>-->
          <!--        <p>Worldwide active clients:</p>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--  <div class="col-4 col-md-4">-->
          <!--    <div class="about-box text-center text-md-start">-->
          <!--      <h2><span class='counter'>183</span>$ </h2>-->
          <!--      <p><strong>Billion Dollars</strong> </p>-->
          <!--      <p>Average Quaterlay Trading Volume:</p>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--  <div class="col-4 col-md-4">-->
          <!--    <div class="about-box text-center text-md-start">-->
          <!--      <h2><span class='counter'>50</span></h2>-->
          <!--      <p><strong>Million Traders</strong> </p>-->
          <!--      <p>Trades Executed Per Year</p>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
        </div>
        <div class="col-12 col-md-12 col-lg-6 position-relative">
          <img class="lazy w-100" src="./assets/map.jpg" style="opacity:0.6" />
          <div id="mapMarkers" class="mapMarkers">
            <div class="wrap" id="wrapper">
              <div class="flagContainer">
                <!-- <img src="./assets/flags/belgium.png" title="Belgium" style="left: 48%;top: 23%;" />
                <img src="./assets/flags/france.png" title="France" style="left: 43%;top: 31%;" />
                <img src="./assets/flags/russia.png" title="Russia" style="left: 68%;top: 18%;" />
                <img src="./assets/flags/united-arab-emirates.png" title="United arab emirates" style="left: 60%;top: 42%;" />
                <img src="./assets/flags/united-kingdom.png" title="United kingdom" style="left: 43%;top: 17%;" />
                <img src="./assets/flags/united-states.png" title="United states" style="left: 20%;top: 23%;" />
                <img src="./assets/flags/india.png" title="United states" style="left: 66.5%;top: 45%;" />
                <img src="./assets/flags/pakistan.png" title="United states" style="left: 65%;top: 38%;" />
                <img src="./assets/flags/australia.png" title="United states" style="left: 80.5%;top: 67%;" /> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include('includes/pricing-plan.php'); ?>
  <section class="customTable" data-aos="fade-up" data-aos-anchor-placement="top-center">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-10">
          <div class="section-header">
            <h2>Stand Out with MBFX GLOBAL Copy Trading. A platform to learn and connect with top-performing traders.</h2>
            <p>Make a statement by joining a leading traders community. Go through hundreds of
              profiles review their risk-reward, chat with them, Select the fund manager
              according to your risk appetite, and instantly copy their trades into your account.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12">
          <div class="table-responsive">
            <table class="table" id="dataTable">
              <thead class="tableHead">
                <tr class="tableRow">
                  <th scope="col" width="300">Fund Manager</th>
                  <th scope="col">Account Type</th>
                  <th scope="col">Account Size</th>
                  <th scope="col">Total Profit</th>
                  <th scope="col">Average Monthly Gain </th>
                  <th scope="col">Average Drawdown</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-8 text-left">
          <!-- <p> <strong>On Average <span class="text-red">83% </span>of Investors made a profit by copying the trades of
              Professional Traders. </strong></p> -->
        </div>
        <div class="col-12 col-md-4 text-end">
          <p><a class="btn btn-default btn-primary" href="<?php customUrl("copy-trading"); ?>" target="_blank">Learn
              More</a> </p>
        </div>
      </div>
    </div>
  </section>

  <section class="offers pb-0 dark">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12 col-md-6 col-lg-6 position-relative" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
          <img class="w-100 lazyImage" data-src="./assets/acadmy-img.jpg" />
          <img class="vert-move position-absolute top-0 end-0 lazyImage img-sm-40 comeup" data-src="./assets/profit-popup.png" style="width:200px" />
          <img class="position-absolute bottom-0 start-0 lazyImage img-sm-30" data-src="./assets/training-popup1.png" data-aos="zoom-in" style="width:199px;bottom: 30px !important;" />
        </div>
        <div class="col-12 col-md-6 col-lg-5" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000">
          <div class="section-header mt-4 mt-md-0 ">
            <h2>Sit Back And Relax We Are<br> <span class="text-green">Here To Make You Profit</span></h2>
            <p>With us, you can practice the trading strategies of professional traders and service providers. We’ll
              teach you how trading works. Besides, daily market updates, tips and techniques, trends, Live broadcasts,
              and fundamental effects will break ground for successful returns.</p>
          </div>
          <!-- <ul class="check">
            <li>Details on Forex trading tips and techniques</li>
            <li>Live broadcasts about current financial topics and market reviews</li>
            <li>Opportunity to learn every detail about Forex</li>
          </ul> -->

          <a class="btn btn-primary btn-primary" href="<?php customUrl("analysis-education"); ?>" target="_blank">Learn
            More</a>
        </div>
      </div>
    </div>
  </section>

  <section class="moneyCard dark">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12 col-md-6 col-lg-6 order-md-2 position-relative mb-5 mb-md-0" data-aos="fade-down" data-aos-delay="300">
          <img class="w-100 lazyImage" data-src="./assets/hand-background.png" />
          <img class="w-100 lazyImage hand-image" src="./assets/hand-img.png" alt="hand image">
          <div class="cards-area">
            <div class="wrap">
              <div class="card1 cards"><img class="lazyImage" data-src="./assets/card-1.png" data-aos-delay="600" data-aos="zoom-out-up" /></div>
              <div class="card2 cards"><img class="lazyImage" data-src="./assets/card-2.png" data-aos-delay="900" data-aos="zoom-out-up" /></div>
              <div class="card3 cards"><img class="lazyImage" data-src="./assets/card-3.png" data-aos-delay="1200" data-aos="zoom-out-up" /></div>
            </div>
          </div>
          <!--<img class="vert-move position-absolute top-0 lazyImage" data-src="./assets/card.png" style="width: 66%;left:0;right:0;margin:auto" />-->

        </div>
        <div class="col-12 col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
          <div class="section-header">
            <h2>Your Own MBFX GLOBAL Money Card <span class="text-green">Too Easy, Too Safe</span> </h2>
            <p>With the MBFX GLOBAL Money card, we maintained instant deposit and withdrawal records in the global market</p>
          </div>
          <ul class="check">
            <li>Now you can withdraw your funds anytime from nearest ATM</li>
            <li>Now you can pay your bill with MBFX GLOBAL Debit Card</li>
            <li>Now you can shop with MBFX GLOBAL Debit Card</li>
          </ul>
          <a class="btn btn-primary btn-primary" href="<?php customUrl("trading"); ?>" target="_blank">Learn More</a>
        </div>
      </div>
    </div>
  </section>

  <section class="payment" data-aos="fade-up" data-aos-anchor-placement="top-center">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-10 mx-auto text-center">
          <div class="section-header">
            <h2>Discover Fast And Secure Payment Options</h2>
            <p>There's no need to be concerned since MBFX GLOBAL has your back. With the widest range of deposit and withdrawal
              options, your money will be withdrawed or deposited within 24 hours of your request.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-md-3 col-lg-2">
          <div class="payment-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="wrap">
              <div>
                <img data-src="./assets/payment-option/01.png" class="card-img-top lazyImage small" alt="..." />
                <p class="payment-text">Credit Card</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3 col-lg-2">
          <div class="payment-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="wrap">
              <div>
                <img data-src="./assets/payment-option/02.png" class="card-img-top lazyImage small" alt="..." />
                <p class="payment-text">Debit Card</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3 col-lg-2">
          <div class="payment-box" data-aos="zoom-in" data-aos-delay="500">
            <div class="wrap">
              <div>
                <img data-src="./assets/payment-option/03.png" class="card-img-top lazyImage" alt="..." />
                <p class="payment-text">Neteller</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3 col-lg-2">
          <div class="payment-box" data-aos="zoom-in" data-aos-delay="700">
            <div class="wrap">
              <div>
                <img data-src="./assets/payment-option/04.png" class="card-img-top lazy lazyImage" alt="..." />
                <p class="payment-text">Skirll</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3 col-lg-2">
          <div class="payment-box" data-aos="zoom-in" data-aos-delay="1000">
            <div class="wrap">
              <div>
                <img data-src="./assets/payment-option/05.png" class="card-img-top lazy lazyImage small" alt="..." />
                <p class="payment-text">Local Bank Transfer</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3 col-lg-2">
          <div class="payment-box" data-aos="zoom-in" data-aos-delay="1200">
            <div class="wrap">
              <div>
                <img data-src="./assets/payment-option/06.png" class="card-img-top lazy lazyImage small" alt="..." />
                <p class="payment-text">Perfect Money</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3 col-lg-2">
          <div class="payment-box" data-aos="zoom-in" data-aos-delay="1500">
            <div class="wrap">
              <div>
                <img data-src="./assets/payment-option/07.png" class="card-img-top lazy" alt="..." />
                <p class="payment-text">Bpay</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3 col-lg-2">
          <div class="payment-box" data-aos="zoom-in" data-aos-delay="1800">
            <div class="wrap">
              <div>
                <img data-src="./assets/payment-option/08.png" class="card-img-top lazy lazyImage small" alt="..." />
                <p class="payment-text">China Union Pay</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3 col-lg-2">
          <div class="payment-box" data-aos="zoom-in" data-aos-delay="2100">
            <div class="wrap">
              <div>
                <img data-src="./assets/payment-option/09.png" class="card-img-top lazy lazyImage small" alt="..." />
                <p class="payment-text">WeChat</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3 col-lg-2">
          <div class="payment-box" data-aos="zoom-in" data-aos-delay="2300">
            <div class="wrap">
              <div>
                <img data-src="./assets/payment-option/10.png" class="card-img-top lazy" alt="..." />
                <p class="payment-text">Paypal</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3 col-lg-2">
          <div class="payment-box" data-aos="zoom-in" data-aos-delay="2500">
            <div class="wrap">
              <div>
                <img data-src="./assets/payment-option/11.png" class="card-img-top lazy lazyImage small" alt="..." />
                <p class="payment-text">Crypto</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3 col-lg-2">
          <div class="payment-box" data-aos="zoom-in" data-aos-delay="2800">
            <div class="wrap">
              <div>
                <img data-src="./assets/payment-option/12.png" class="card-img-top lazy" alt="..." />
                <p class="payment-text">Bank Wire</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include('includes/awards.php') ?>



  <!-- <section class="sponsorships dark pb-0 " data-aos="fade-up" data-aos-anchor-placement="top-center">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 mx-auto text-center p-md-0">
          <div class="section-header">
            <h2>Global Sponsorships of MBFX</h2>
            <p>Over the past 8 years, we've been proud to accept many global awards from some of the most prestigious
              bodies in the business</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-md-4 p-0">
          <div class="sponorItem first lazy" data-src="assets/sponsor/Glasgow/bg.jpg">
            <img src="./assets/sponsor/Glasgow/player.png" class="player lazy" />
            <div class="onCollapsed">
              <img class="icon1 lazy" src="./assets/sponsor/Glasgow/logo.png" width="100" />
              <h2>Action Starts</h2>
            </div>
            <img class="icon2 lazy" src="./assets/sponsor/Glasgow/ball.png" width="100" />
            <div class="sponsorContent">
              <div class="wrap">
                <img class="icon lazy" src="./assets/sponsor/Glasgow/logo.png" width="100" />
                <h2>MBFX is an official sponsor of F.C GLASGOW FOOTBALL CLUB</h2>
                <p>The club is a paradigm of equality and diversification. The F.C Glasgow currently has 18.1 percent
                  Black, Asian, and minority ethnic. MBFX has joined hands with the clubin its efforts to achieve the EY
                  National Equality Standard.</p>
                <a class="btn btn-primary btn-primary" href="<?php customUrl("about"); ?>" target="_blank">Learn
                  More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 p-0">
          <div class="sponorItem second lazy" data-src="./assets/sponsor/Wrecksn/bg.png">
            <div class="onCollapsed">
              <img class="icon lazy" src="./assets/sponsor/Wrecksn/wrecksn-logo.png" width="100" />
              <p>Most popular extreme sports</p>
              <h2>Start Car Racing</h2>
            </div>
            <div class="sponsorContent">
              <div class="wrap">
                <img class="icon lazy" src="./assets/sponsor/Wrecksn/wrecksn-logo.png" width="100" />
                <h2>MBFX is an official sponsor of Wrecksn Auto Racing Club</h2>
                <p>The Wrecksn is run by a team of dedicated individuals with a love for motorsport. MBFXis an official
                  partner of Wrecksn a club that promotes individuals affordable car racing for popular cars.</p>
                <p>Auto Racing is one of the most popular sports all over the world.</p>
                <a class="btn btn-primary btn-primary" href="<?php customUrl("about"); ?>" target="_blank">Learn
                  More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 p-0">
          <div class="sponorItem third active lazy" data-src="./assets/sponsor/Huskies/bg.png">
            <div class="onCollapsed">
              <img class="icon lazy" src="./assets/sponsor/Huskies/huskies-logo.png" width="100" />
            </div>
            <div class="sponsorContent">
              <div class="wrap">
                <img class="icon lazy" src="./assets/sponsor/Huskies/huskies-logo.png" width="100" />
                <h2>MBFX is an official sponsor of Huskies Warriors Rugby Club</h2>
                <p>Huskies Warriors Rugby is established in 1968, comprising 13 professional teams in North America.
                  MBFX is a sponsor of Major League Rugby (MLR) —Huskies Warriors with the same mission as Huskies
                  Warriors; To make the culture and sport of rugby accessible to the local community, while also
                  providing a conduit for education, inspiration, and leadership through rugby</p>
                <a class="btn btn-primary btn-primary" href="<?php customUrl("about"); ?>" target="_blank">Learn
                  More</a>
              </div>
            </div>
            <img class="player lazy" src="./assets/sponsor/Huskies/player.png" width="100" />
          </div>
        </div>
      </div>
    </div>
  </section> -->




  <?php include('includes/footer.php'); ?>
  <?php include('includes/footerScript.php'); ?>
  <!--  This script is opening the promotion modal, on window load-->
  <script>
    // Launch the modal when the site has loaded-->
    window.onload = function() {
      var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {
        keyboard: false
      });
      myModal.show();
    };

    // Close the modal when the close button is clicked
    document.querySelector('.btn-close').addEventListener('click', function() {
      var myModal = bootstrap.Modal.getInstance(document.getElementById('exampleModal'));
      myModal.hide();
    });
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" defer integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="./js/index.js"></script>
</body>

</html>
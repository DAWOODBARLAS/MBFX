<!DOCTYPE html>

<html lang="en">

<head>

  <?php include('includes/headScript.php'); ?>

  <link rel="stylesheet" href="css/analysis-education.css" />

  <title>Analysis Education</title>

  <?php

  $page = 'analysis-education';

  ?>

  <style type="text/css">
    .responsive-iframe {

      position: relative;

      overflow: hidden;

      width: 100%;

      padding-top: 56.25%;
      /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */

    }



    /* Then style the iframe to fit in the container div with full height and width */

    .responsive-iframe iframe {

      position: absolute;

      top: 0;

      left: 0;

      bottom: 0;

      right: 0;

      width: 100%;

      height: 100%;

    }

    .modal-body {

      padding: 10px;

      background: #333;

    }

    .modal button {

      position: absolute;

      right: 0;

      background-color: #ffffff;

      padding: 10px;

      top: 0;

      border-radius: 10px;

      z-index: 1;

    }
  </style>

</head>



<body>

  <?php include('includes/header.php'); ?>



  <section class="banner">

    <h4 class="text-center text-white">

      Discover every resource to be next level trader with daily <br />

      <span>ROI (Return on Investment) upto 5% – 10%</span>

    </h4>

  </section>



  <section class="link-tabs">

    <!-- <div class="d-md-flex justify-content-center align-items-center gap-4 link-container">

        <a class="active" href="#">Education</a>

        <a class="" href="">Financial Calculators</a>

        <a class="" href="">News and Events</a>

        <a class="" href="">Expert Analysis</a>

        <a class="" href="">Glossary</a>

      </div> -->

    <div class="container">

      <div class="row">

        <div class="col-10 mx-auto">

          <div class="row align-items-center">

            <div class="col-12 col-md-6">

              <div class="section-header">

                <h2>What Type Of Trader Are You?</h2>

                <p>In only a few minutes, you can assess your trading abilities. Discover your weaknesses and overcome them with the assistance of expert instructors and trade tools and resources.</p>

              </div>

              <a href="" class="btn btn-primary btn-primary">TAKE A SHORT QUIZ</a>

            </div>

            <div class="col-12 col-md-6 d-none d-md-block d-lg-block">

              <div class="img-wrapper">

                <img src="./assets/education-analysis/education-part/img-1.png" class="img-fluid" alt="" />

              </div>

              <!-- <a href="" class="learn-more"> LEARN MORE ABOUT US </a> -->

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>



  <section class="levels">

    <div class="container">

      <div class="row justify-content-center">

        <div class="col-12 col-md-12 col-lg-6">

          <div class="section-header text-center">

            <h2>It's Your World. Trade It.</h2>

            <p>Our free-of-cost education system will help, and guide you for your needs of any kind. Our courses are designed to benefit the trader of any kind and guarantee success.</p>

          </div>

        </div>

      </div>

      <div class="row">

        <div class="col-12 col-md-10 mx-auto">

          <div class="row">

            <div class="col-12 col-md-4">

              <div class="card">

                <div class="icon-wrapper">

                  <img src="./assets/education-analysis/education-part/basic-level-icon.png" alt="" />

                </div>

                <h5>Basic Level</h5>

                <p>Are you a newbie? Get our expert guide and learn the concepts of trading with special one-on-one classes.</p>

                <a href="<?php customUrl("beginner"); ?>">Go to course >></a>

              </div>

            </div>

            <div class="col-12 col-md-4">

              <div class="card">

                <div class="icon-wrapper">

                  <img src="./assets/education-analysis/education-part/intermediate-level-icon.png" alt="" />

                </div>

                <h5>Intermediate Level</h5>

                <p>Already have an understanding of trading but hesitate to take a right trade. We have got your covered.</p>

                <a href="<?php customUrl("intermediate"); ?>">Go to course >></a>

              </div>

            </div>

            <div class="col-12 col-md-4">

              <div class="card">

                <div class="icon-wrapper">

                  <img src="./assets/education-analysis/education-part/advance-level-icon.png" alt="" />

                </div>

                <h5>Advance Level</h5>

                <p>Mater trading expertise, enhance risk management, and become an expert trader</p>

                <a href="<?php customUrl("advanced"); ?>">Go to course >></a>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>





  <?php

  $videos = array(

    array(

      'title' => 'How To Setup Your Trading Account',

      'thumb' => './assets/education-analysis/education-part/video-img1.jpg',

      'videoId' => 'v_ZfFMIaLxg'

    ),

    array(

      'title' => 'How To Sign In Your Trading Account',

      'thumb' => './assets/education-analysis/education-part/video-img1.jpg',

      'videoId' => 'EgBuyFjEfQc'

    ),

    array(

      'title' => 'How To Verify Your Trading Account With MBFX',

      'thumb' => './assets/education-analysis/education-part/video-img1.jpg',

      'videoId' => 'bjPJupcwwt8'

    ),

    array(

      'title' => 'PAM INVESTMENT ACCOUNT SETUP',

      'thumb' => './assets/education-analysis/education-part/video-img1.jpg',

      'videoId' => 'VxWcDkt-Dpo'

    ),

    array(

      'title' => 'How To Change Meta Trader Password',

      'thumb' => './assets/education-analysis/education-part/video-img1.jpg',

      'videoId' => '6HWYX7bxAsE'

    ),

    array(

      'title' => 'How To Change Dashboard Password',

      'thumb' => './assets/education-analysis/education-part/video-img1.jpg',

      'videoId' => 'r-3L7YTjF-Y'

    ),

    array(

      'title' => 'How To Setup Master Trading Account',

      'thumb' => './assets/education-analysis/education-part/video-img1.jpg',

      'videoId' => 'wiOxWL9GCxg'

    ),

    array(

      'title' => 'How To Setup MT5 Account',

      'thumb' => './assets/education-analysis/education-part/video-img1.jpg',

      'videoId' => '5wkIoiS4JTI'

    ),

  )

  ?>

  <section class="live-sessions">

    <div class="container-fluid">

      <div class="row">

        <div class="col-12 col-md-8 mx-auto">

          <div class="section-header text-center">

            <h2 class="text-white">Get Access to Full Sessions With a Live Account.</h2>

            <p>These video courses will guide you through the main aspects of Forex trading. You will learn the Forex market mechanism and how you can profit from it.</p>

            <p>Study the essential Forex methodologies, how to take your first steps, and develop your trading strategy.</p>

          </div>

        </div>

      </div>

      <div class="owl-carousel" id="sessions">

        <?php



        foreach ($videos as $video) {

          $videoThumb = 'https://img.youtube.com/vi/' . $video['videoId'] . '/0.jpg'

        ?>

          <div class="session">

            <img src="<?php echo $videoThumb; ?>" alt="" />

            <div class="session-text">

              <p><?php echo $video['title']; ?></p>

              <img class="btnYoutube" data-video-id="<?php echo $video['videoId']; ?>" src="./assets/education-analysis/education-part/play-icon.png" alt="" />

            </div>

          </div>

        <?php

        } ?>



      </div>

      <div class="row">

        <div class="col-md-10 mx-auto">

          <div class="session-inner">

            <div class="section-header">

              <h2>

                <span>Get Access to Full Sessions With a Live Account</span><br />

                Get ready to explore the MBFX world

              </h2>

            </div>

            <a class="btn btn-primary" href="<?php echo $signupUrl; ?>">Open Live Account</a>

          </div>

        </div>

      </div>

    </div>

  </section>



  <section class="calculator">

    <div class="container">

      <div class="row">

        <div class="col-12 col-md-10 mx-auto">

          <div class="row align-items-center justify-content-between">

            <div class="col-12 col-md-6">

              <div class="section-header">

                <h2>Evaluate Perfect Entry And Exist Points With Few Clicks</h2>

                <p>MBFX trading tools provide our viewers can have a quick look into today's most important market price interpretations and market trends our tools make it easy for you to analyse your charts.</p>

              </div>

              <div class="card" data-bs-toggle="collapse" href="#collapse1" role="button">

                <img src="./assets/education-analysis/calculator-icon1.png" class="img-fluid" alt="" />

                <div class="container-fluid">

                  <div class="row">

                    <div class="col-12 col-md-10">

                      <div class="cardtxt">

                        <h6>Fibonacci Calculator</h6>

                        <p>Determine the price targets/trend with MBFX Fibonacci Calculator</p>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <div class="card" data-bs-toggle="collapse" href="#collapse2" role="button">

                <img src="./assets/education-analysis/calculator-icon2.png" class="img-fluid" alt="" />

                <div class="container-fluid">

                  <div class="row">

                    <div class="col-12 col-md-10">

                      <div class="cardtxt">

                        <h6>Stop Loss Target Prices</h6>

                        <p>Stop Loss Calculator is used to determine the amount of funds for Stop Loss/Take Profit orders.</p>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <div class="card" data-bs-toggle="collapse" href="#collapse3" role="button">

                <img src="./assets/education-analysis/calculator-icon3.png" class="img-fluid" alt="" />

                <div class="container-fluid">

                  <div class="row">

                    <div class="col-12 col-md-10">

                      <div class="cardtxt">

                        <h6>Pivot Calculator</h6>

                        <p>A pivot point calculator is used primarily when trading equities and commodities.</p>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

            <div class="col-12 col-md-5">

              <div class="collapse show" id="collapse1">

                <div><iframe height="600" frameborder="0" scrolling="yes" src="https://widgets.fxwidgets.com/calculators/default/fibonacci.html"></iframe></div>

              </div>

              <div class="collapse" id="collapse2">

                <div><iframe height="600" frameborder="0" scrolling="yes" src="https://widgets.fxwidgets.com/calculators/default/stop-loss-take-profit-levels.html"></iframe></div>

              </div>

              <div class="collapse" id="collapse3">

                <div><iframe height="600" scrolling="yes" frameborder="0" src="https://widgets.fxwidgets.com/calculators/default/pivots.html"></iframe></div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>



  <section class="analysis">

    <div class="container">

      <div class="row">

        <div class="col-12 col-md-10 mx-auto">

          <div class="row">

            <div class="col-md-6">

              <div class="section-header">

                <h2 class="text-white">Daily Market analysis in multiple languages</h2>

                <p class="text-white">Our trading experts provide an insightful daily market analysis along with detailed charts and trend lines.</p>

              </div>



              <!--<a href="./assets/education-analysis/B1-merged.pdf" target="_blank" class="btn btn-primary btn-primary">Subscribe to MBFX</a>-->

              <a href="https://www.youtube.com/channel/UC-bHCFsK_q6o3L4CoqNkQrA" target="_blank" class="btn btn-primary btn-primary">Subscribe to MBFX</a>

              <p>

                for daily market analysis in your our <br />

                <span> NATIVE LANGUAGE </span>

              </p>

            </div>

            <div class="col-md-6">

              <img class="img-fluid ms-lg-5" src="./assets/education-analysis/youtube-img.png" alt="" />

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>



  <section class="calendar">

    <div class="container">

      <div class="row">

        <div class="col-12 col-md-6 mx-auto">

          <div class="section-header text-center">

            <h2>

              Know before anyone else. <br />

              Get news alerts before anyone else

            </h2>

            <p>At MBFX we ensure that you get it all in one package. You can keep an eye on real-time high-impact or minor financial news and fundamentals.</p>

          </div>

        </div>

        <div class="col-12 col-md-10 mx-auto">

          <div class="row">

            <div class="col-12">

              <div class="responsive-iframe"><iframe height="840" frameborder="0" scrolling="yes" src="https://widgets.fxwidgets.com/default/economic-calendar.html"></iframe></div>

              <!-- <img src="./assets/education-analysis/calender.jpg" class="img-fluid" alt=""> -->

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>



  <section class="technical">

    <div class="container">

      <div class="row">

        <div class="col-12 col-md-8 mx-auto">

          <div class="section-header text-center">

            <h2>Daily Technical Analysis</h2>

            <p>At MBFX we enlighten every possible opportunity of market, including Forex, Crypto Currencies, Indices and stocks. Our third-party partnership consist of 15+ market analysts with extensive background in financial market and technical analysis.</p>

            <p>We understand market criticality and its dynamic and changes very well due to that we aimed to provide timely and comprehensive forecasting to customers.</p>

            <p>With us you will get clean, easy-to-follow, and professional looking analysis. Analysis contains visual tool to help members easily identify the Right side of the market (trending up, trending down, or sideways) based on our advance techniques.</p>

          </div>

        </div>



      </div>

      <div align="center"><iframe height="5700" width="100%" frameborder="0" scrolling="yes" src="https://widgets.fxwidgets.com/default/en-technical-analysis.html"></iframe></div>

    </div>

  </section>



  <section class="glossary">

    <div class="container">

      <div class="row">

        <div class="col-12 col-md-8 mx-auto">

          <div class="section-header text-center">

            <h2>Your Guide to Financial Terms and Technical Tools Summary</h2>

            <p>Improve understanding of trading terms. This glossary is designed by using trading for traders of any kind. It can not only clean up misunderstand related to any phrase but also build trading knowledge. For instance word <span> "Scalping"</span> normally means removal of all or part of the scalp but in trading it means, a trading style that <span> specializes in profiting off of small price changes and making a fast profit off reselling.</span></p>

          </div>

        </div>

        <div class="col-12 col-md-10 mx-auto">

          <div class="glossary-inner">

            <p class="text-center">Discover the most important terminology you need to know</p>

            <div class="container">

              <div class="row text-center align-items-center">

                <div class="col-12 col-md-9 pe-md-0 pe-lg-0">

                  <input placeholder="Annual Percentage" type="text" class="form-control" />

                </div>

                <div class="col-12 col-md-3">

                  <button class="btn btn-primary">Search Glossary</button>

                </div>

                <a href="">GLOSSARY DICTIONARY >></a>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>



  <section class="annual-precentage">

    <div class="container">

      <div class="row">

        <div class="col-12 col-md-8 mx-auto">

          <div class="section-header text-center">

            <p class="heading">Annual Percentage Yield (APY)</p>

            <p>Annual percentage yield is the real rate of returns earned on an investment (ROI) on an annual basis, taking into account the effect of compound interest.</p>



            <p class="heading">Annual Percentage Rate (APR)</p>

            <p>The yearly rate of interest a borrower must pay investors. It is expressed in percentage and determined by multiplying the periodic interest rate by the number of periods.</p>

          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- Modal -->

  <div class="modal fade " id="youtubeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog modal-xl modal-dialog-centered">

      <div class="modal-content">

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        <div class="modal-body">

          <div class="responsive-iframe"> <iframe src="https://www.youtube.com/embed/EgBuyFjEfQc" id="youtubeVideo"></iframe>

          </div>

        </div>

      </div>

    </div>

    <?php include('includes/footer.php'); ?>

    <?php include('includes/footerScript.php'); ?>

    <script src="./js/anaylsis.js"></script>

    <script>
      var myModal = new bootstrap.Modal(document.getElementById('youtubeModal'), {

        keyboard: false

      })

      let youtubeVideo = $('#youtubeVideo')

      $('.btnYoutube').click(function() {

        let youtbeBaseUrl = "https://www.youtube.com/embed/"

        let videoId = $(this).attr('data-video-id')

        youtubeVideo.attr('src', youtbeBaseUrl + videoId)

        myModal.show()



      })



      var exampleModal = document.getElementById('youtubeModal')

      exampleModal.addEventListener('hidden.bs.modal', function(event) {

        youtubeVideo.attr('src', '')

      })
    </script>

</body>

</html>
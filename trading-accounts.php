<!DOCTYPE html>

<html lang="en">

<head>

    <?php include('includes/headScript.php'); ?>

    <link rel="stylesheet" href="css/trading.css?v=1" />

    <title>MBFX GLOBAL - Live Trading Accounts</title>

    <?php

    $page = 'trading';

    ?>

    <style>
        /*table*/

        .customTable {

            width: 100%;

            background-color: #f2f2f2;

        }

        .customTable thead .tableRow {

            border-radius: 0px;

            background: var(--brandColor1) !important;

            border: 0px !important;

            border-bottom: 2px solid #ddd !important;

            text-transform: uppercase;

            margin: 0px;

        }

        .customTable thead .tableRow th {

            font-size: 16px;

            padding-left: 0px;

            padding-right: 0px;

        }

        .customTable thead th {

            color: #fff !important;

            font-weight: 500;

        }

        .customTable thead th:nth-child(n + 3) {

            text-align: center;

        }

        .customTable .tableRow {

            border-bottom: 1px solid gray;

        }

        .customTable tbody {

            width: 100%;

            display: table-caption;

        }

        .customTable .tableRow {

            display: flex;

            flex-direction: row;

            flex-wrap: wrap;

            margin: 0.4em 0;

            border: 1px solid rgba(3, 3, 3, 0.2);

            border-radius: 0px;

            align-items: center;

        }

        .customTable .tableRow:nth-child(even) {

            border: 1px solid #e4eaca;

            background: #f3f8de;

        }

        .customTable .tableRow:nth-child(odd) {

            border: 1px solid #f3eed7;

            background: #ffffff;

        }



        .customTable .tableRow td,

        .customTable .tableRow th {

            padding: 15px;

            flex: 1 1;

            border: 0px;

            font-size: 14px;

            color: #605a5a;

            text-align: center;

        }
    </style>

</head>



<body>

    <?php include('includes/header.php'); ?>

    <section class="banner">

        <div class="section-header">

            <h2 class="text-center">Record low spreads, commissions and all <br> optimal working conditions for a trader.</h2>

            <p class="text-center">The MBFX GLOBAL aimed to work with quality services only. We facilitate the need of every skill and non <br> skill worker. You will experience optimal working conditions from light speed trade executions to <br> award winning customer services.</p>

        </div>

    </section>



    <section class="link-tabs">

        <div class="d-md-flex justify-content-center align-items-center gap-4 link-container">

            <!-- <a href="https://mbfx.co/trading-accounts" class="active">Live Accounts</a>

            <a href="https://mbfx.co/demo-accounts" href="<?php customUrl("trading"); ?>" data-target='#demo'>Demo Accounts</a>

            <a href="#" data-target='#premium'>Premium Member (Coming soon)</a> -->

        </div>

    </section>

    <?php include('includes/pricing-plan.php'); ?>



    <section class="tradingSkill customTable py-3" id="trading">

        <br>

        <div class="container">

            <div class="row">

                <div class="col-12 col-md-10 mx-auto">

                    <div class="table-responsive">

                        <table class="table">

                            <thead>

                                <tr class="tableRow">

                                    <th>Account Type</th>

                                    <th>Standard Account</th>

                                    <th>Raw Spread Account</th>

                                    <th>Premium Account</th>

                                    <th>Copy Trading</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr class="tableRow">

                                    <td>Spread</td>

                                    <td>From 1.0</td>

                                    <td>From 0.1</td>

                                    <td>From 0.0</td>

                                    <td>From 1.0</td>

                                </tr>

                                <tr class="tableRow">

                                    <td>Commission</td>

                                    <td>NO</td>

                                    <td>NO</td>

                                    <td>YES</td>

                                    <td>NO</td>

                                </tr>

                                <tr class="tableRow">

                                    <td>Minimum Lot</td>

                                    <td>0.01</td>

                                    <td>0.01</td>

                                    <td>0.01</td>

                                    <td>0.01</td>

                                </tr>

                                <tr class="tableRow">

                                    <td>Minimum Deposit</td>

                                    <td>50$</td>

                                    <td>500$</td>

                                    <td>1000$</td>

                                    <td>50$</td>

                                </tr>

                                <tr class="tableRow">

                                    <td>Tradable Instruments</td>

                                    <td>200+</td>

                                    <td>200+</td>

                                    <td>200+</td>

                                    <td>200+</td>

                                </tr>

                                <tr class="tableRow">

                                    <td>Copy Trading</td>

                                    <td>Yes</td>

                                    <td>NO</td>

                                    <td>NO</td>

                                    <td>Yes</td>

                                </tr>

                                <tr class="tableRow">

                                    <td>Islamic Account</td>

                                    <td>YES</td>

                                    <td>YES</td>

                                    <td>YES</td>

                                    <td>YES</td>

                                </tr>

                                <tr class="tableRow">

                                    <td>Maximum Leverage</td>

                                    <td>1:500</td>

                                    <td>1:500</td>

                                    <td>1:500</td>

                                    <td>1:500</td>

                                </tr>

                                <tr class="tableRow">

                                    <td>Price Execution</td>

                                    <td>ECN</td>

                                    <td>ECN</td>

                                    <td>ECN</td>

                                    <td>ECN</td>

                                </tr>

                                <tr class="tableRow">

                                    <td>Trading Bonus</td>

                                    <td>Yes</td>

                                    <td>Yes</td>

                                    <td>Yes</td>

                                    <td>No</td>

                                </tr>

                            </tbody>

                        </table>

                    </div>





                </div>

            </div>



        </div>

        </div>



        <!-- <div class="container mt-4">

            <div class="row">

                <div class="col-md-10 mx-auto p-0">

                    <div class="help-inner">

                        <div class="section-header">

                            <h2>

                                <span>Get ready to explore the MBFX GLOBAL world <br /></span>

                                We are always ready to help you

                            </h2>

                        </div>

                        <a class="btn" href="https://my.mbfx.co/en/trade/platform/MetaTrader5">OPEN A LIVE ACCOUNT</a>

                    </div>

                </div>

            </div>

        </div> -->

    </section>
    <section class="tradingSkill py-3" id="trading">

        <div class="container">

            <div class="row">

                <div class="col-12 col-md-10 mx-auto">

                    <div class="row">

                        <div class="col-12 col-md-8 col-lg-6">

                            <div class="section-header sub-section">

                                <h2>Brush Up Your Trading Skills With Demo Account</h2>

                                <p>Create a demo account with MBFX GLOBAL to explore trading functionality the same as a real account. Utilize a demo account to get your hands on advanced trading features provided by MetaTrader 5 platform.</p>

                            </div>

                        </div>

                    </div>

                    <div class="row mb-5 ps-lg-2">

                        <div class="img-wrapper">

                            <a href="<?php echo $download_links['ios']; ?>">

                                <img class="img-fluid" src="./assets/apple-icon-hover.png" alt="" />

                                <p>IOS</p>

                            </a>

                        </div>

                        <div class="img-wrapper">

                            <a href="<?php echo $download_links['android']; ?>">

                                <img class="img-fluid" src="./assets/andriod-icon-hover.png" alt="" />

                                <p>Android</p>

                            </a>

                        </div>

                        <div class="img-wrapper">

                            <a href="<?php echo $download_links['windows']; ?>">

                                <img class="img-fluid" src="./assets/windows-icon-hover.png" alt="" />

                                <p>Desktop</p>

                            </a>

                        </div>

                        <div class="img-wrapper">

                            <a href="<?php echo $download_links['ios']; ?>">

                                <img class="img-fluid" src="./assets/apple-icon-hover.png" alt="" />

                                <p>MAC</p>

                            </a>

                        </div>

                        <div class="img-wrapper">

                            <a href="<?php echo $download_links['web']; ?>">

                                <img class="img-fluid" src="./assets/web-icon--hover.png" alt="" />

                                <p>Web</p>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        </div>



        <div class="container mt-4">

            <div class="row">

                <div class="col-md-10 mx-auto p-0">

                    <div class="help-inner">

                        <div class="section-header">

                            <h2>

                                <span>Get ready to explore the MBFX GLOBAL world <br /></span>

                                We are always ready to help you

                            </h2>

                        </div>
                        <a class="btn" href="https://my.mbfx.co/en/trade/platform/MetaTrader5">Ready to Open an Account</a>


                    </div>

                </div>

            </div>

        </div>

    </section>






    <section class="whychoose">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-12 col-md-12 col-lg-6">

                    <div class="section-header text-center">

                        <h2>Why choose MBFX GLOBAL over others</h2>

                        <p>Compare and contrast trading conditions and choose the best for yourself.</p>

                    </div>

                </div>

            </div>

            <div class="row justify-content-center child-container">

                <div class="col-12 col-md-12 col-lg-10 mx-auto">

                    <!-- <div class="owl-carousel owl-theme nav-dark" id="tradingSlider">

                        <div class="p-1">

                            <div class="col-12">

                                <div class="card">

                                    <div class="d-flex align-items-center work-card-head">

                                        <img src="./assets/trading/why-mbfx-icon1.png" alt="" />

                                        <div class="col-10 col-md-7 ps-3">

                                            <h3 class="m-0">Complete Solution Range</h3>

                                        </div>

                                    </div>

                                    <div class="work-card-body">

                                        <p>We have solution for all, including scalpers, long term traders, day traders, pro trades, beginners and funds managers. The MBFX GLOBAL team is always ready to work and alongside you.</p>

                                    </div>

                                </div>



                            </div>

                        </div>

                        <div class="p-1">

                            <div class="col-12">

                                <div class="card">

                                    <div class="col-md-12">

                                        <div class="d-flex align-items-center work-card-head">

                                            <img src="./assets/trading/why-mbfx-icon2.png" alt="" />

                                            <div class="col-10 col-md-7 ps-3">

                                                <h3 class="m-0">Support and Research</h3>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="work-card-body">

                                        <p>We provide daily trading momentum, support, and resistance levels along with trading techniques based on fundamental and technical research.</p>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="p-1">

                            <div class="col-12">

                                <div class="card">

                                    <div class="d-flex align-items-center work-card-head">

                                        <img src="./assets/trading/why-mbfx-icon1.png" alt="" />

                                        <div class="col-10 col-md-7 ps-3">

                                            <h3 class="m-0">Secure and Easy</h3>

                                        </div>

                                    </div>

                                    <div class="work-card-body">

                                        <p>We maintain your privacy and have taken every step to establish easiest and most secured deposit withdraw methods.</p>

                                    </div>

                                </div>



                            </div>

                        </div>

                        <div class="p-1">

                            <div class="col-12 col-md-6 col-lg-12">

                                <div class="card">

                                    <div class="col-md-12">

                                        <div class="d-flex align-items-center work-card-head">

                                            <img src="./assets/trading/why-mbfx-icon2.png" alt="" />

                                            <div class="col-10 col-md-7 ps-3">

                                                <h3 class="m-0">Friendly Coaching</h3>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="work-card-body">

                                        <p>We will find the best match for your Copy trading, Signals services, and Expert Advisors without charging you anything extra.</p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div> -->


                </div>

            </div>

        </div>

    </section>

    <?php include('includes/what_we_offer.php'); ?>

    <?php include('includes/footer.php'); ?>

    <?php include('includes/footerScript.php'); ?>

</body>



</html>
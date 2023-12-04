<!DOCTYPE html>
<html lang="en">

<head><?php include('includes/headScript.php');
        ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="css/funding.css?v=1.9.6" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- Banner -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <title>MBFX GLOBAL - Funding</title><?php $page = 'funding';
                                        ?><style>
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

<body><?php include('includes/header.php');
        ?><!-- <div class="banner">
            <div class='row'>
                <h2 class="text-center fw-bold">Fuel your profits with limitless funding possibilities</h2>
                <p class="ban-p text-center">MBFX Funding Routes: Where Success Meets Opportunity</p>
                <div class="mt-4 mb-4 text-center"><span><a target="_blank" href="#" class="d-xl-inline btn btn-primary">Join Challange</a></span><span class="ps-3"><a target="_blank" href="#" class="d-xl-inline btn btn-secondary">Become Affiliate</a></span></div>
                <div>
                    <div class="first-container banner-card col-8 col-sm-10 col-lg-6 col-md-10 mx-auto">
                        <p class="text-center">Challenge up to 200,
                            000</p>
                        <div class="row">
                            <div class="col-12 col-md-4 col-sm-4 mx-auto border-end">
                                <div class="cards text-center p-1">
                                    <div class="offerImg"><img src="assets/funding/Two-phase.svg" /></div>
                                    <p>Two-Phase Challenge</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-sm-4 mx-auto border-end">
                                <div class="cards text-center p-1">
                                    <div class="offerImg"><img src="assets/funding/Three-phase.svg" /></div>
                                    <p>One-Phase Challenge</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-sm-4 mx-auto">
                                <div class="cards text-center p-1">
                                    <div class="offerImg"><img src="assets/funding/abc.svg" /></div>
                                    <p>Direct Funding</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>-->
    <div class="banner">
        <div class='row w-100'>
            <h1 class="text-center fw-bold">Fuel your profits with limitless funding possibilities</h1>
            <p class="ban-p text-center">MBFX GLOBAL Funding Routes: Where Success Meets Opportunity</p>
            <div class="mt-4 mb-4 text-center"><span><a target="_blank" href="https://trader.mbfx.co/auth/signup/challenge" class="banner-btn bg-color-a">Join Now</a></span><span class="ps-3"><a target="_blank" href="https://trader.mbfx.co/auth/signup/challenge" class="banner-btn bg-color-b">Become Affiliate</a></span></div>
            <div>
                <p class="text-center mt-5">Challenge up to 200,
                    000</p>
            </div>
            <div class="container">
                <div class="col-12 text-center mt-4 d-inline-flex justify-content-center">
                    <div class="col-4 col-md-3 col-sm-4 challenge border-end">Instant<br>Funding<a href="#instant">Start Now</a></div>
                    <div class="col-4 col-md-3 col-sm-4 challenge border-end">One-Phase<br>Challenge<a href="#one-phase">Start Now</a></div>
                    <div class="col-4 col-md-3 col-sm-4 challenge">Two-Phase<br>Challenge<a href="#two-phase">Start Now</a></div>
                </div>
            </div>
        </div>
    </div>
    <section class="offer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-10 mx-auto mt-5">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3 col-sm-6 mx-auto">
                            <div class="card coustom-height">
                                <div class="offerImg"><img src="assets/funding/01-1-2048x1541-min.png" height="160px" width="160px" class="img-fluid" /></div>
                                <h3>Instant Funding </h3>
                                <p class="text-center">Start earning from day one by avoiding the hassle of tests in Challenges
                                <p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 col-sm-6 mx-auto">
                            <div class="card coustom-height">
                                <div class="offerImg"><img src="assets/funding/MOBILE-2048x1575-min.png" height="160px" width="160px" class="img-fluid" /></div>
                                <h3>Daily Withdraws</h3>
                                <p class="text-center">Enjoy the convenience of daily withdrawals,
                                    ensuring you have quick access to your profits whenever you need them</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 col-sm-6 mx-auto">
                            <div class="card coustom-height">
                                <div class="offerImg"><img src="assets/funding/TARAZU-2048x1516-min.png" height="160px" width="160px" class="img-fluid" /></div>
                                <h3>Profit Split upto 90%</h3>
                                <p class="text-center">With our generous profit-sharing model,
                                    your hard-earned profits stay where they belong – in your pocket</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 col-sm-6 mx-auto">
                            <div class="card coustom-height">
                                <div class="offerImg"><img src="assets/funding/ROCK-2048x1516-min.png" height="160px" width="160px" class="img-fluid" /></div>
                                <h3>1 Step Challenge </h3>
                                <p class="text-center">Skilled traders doesn't deserve to wait too long to get to live account</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="offer bg-color pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="section-header text-center">
                        <h2>Choose a challenge that suits your trading expertise</h2>
                        <p>At MBFX GLOBAL Funding,
                            where capital meets expertise,
                            our ambition is to transform aspirations into profits. Unlike conventional prop funds,
                            MBFX GLOBAL Funding provides steadfast support and optimal trading conditions to guarantee your success in FOREX trading through a Proprietary Trading Firm.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-11 mx-auto">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 mx-auto">
                            <div class="card coustom-card-height bordered-card" id="instant">
                                <div class="offerImg img-fluid"><img src="assets/funding/noun-funding-2763957-1-min.png" height="160px" width="160px" /></div>
                                <h2><strong>Instant Funding</strong></h2>
                                <ol class="mb-0">
                                    <li class="elementor-icon-list-item"><span class="elementor-icon-list-text">Trade with Our Funds and Share Profits</span></li>
                                    <li class="elementor-icon-list-item"><span class="elementor-icon-list-text">Embark on Your Trading Career with Express Funding</span></li>
                                    <li class="elementor-icon-list-item"><span class="elementor-icon-list-text">Lead the Industry with Our 50% Profit Sharing Structure</span></li>
                                    <li class="elementor-icon-list-item"><span class="elementor-icon-list-text">Rapid Expansion Opportunities Through Diverse Account Sizes</span></li>
                                </ol><a href="#Direct" class="btn btn-primary mb-5 mb-lg-0 btn-primary faq-link">Learn More</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mx-auto">
                            <div class="card coustom-card-height bordered-card" id="one-phase">
                                <div class="offerImg img-fluid"><img src="assets/funding/Vector-min.png" height="160px" width="160px" /></div>
                                <h2><strong>Swift</strong></h2>
                                <ol class="mb-5">
                                    <li><span class="elementor-icon-list-text">Affordable Initial Investment</span></li>
                                    <li class="elementor-icon-list-item"><span class="elementor-icon-list-text">A Single Leap Towards Professional Trading</span></li>
                                    <li class="elementor-icon-list-item"><span class="elementor-icon-list-text">Earn While You Gain Valuable Expertise</span></li>
                                    <li class="elementor-icon-list-item"><span class="elementor-icon-list-text">Attainable Plan According to Your Trading Expertise</span></li>
                                </ol><a href="#Swift" class="btn btn-primary mb-5 mb-lg-0 btn-primary faq-link">Learn More</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mx-auto">
                            <div class="card coustom-card-height bordered-card" id="two-phase">
                                <div class="offerImg img-fluid"><img src="assets/funding/noun-progressive-min.png" height="160px" width="160px" /></div>
                                <h2><strong>Progressive</strong></h2>
                                <ol class="mb-5">
                                    <li class="elementor-icon-list-item "><span class="elementor-icon-list-text">Demonstrate Your Skills with Our Assessment Account</span></li>
                                    <li class="elementor-icon-list-item"><span class="elementor-icon-list-text">Streamlined Evaluation and Verification Process</span></li>
                                    <li class="elementor-icon-list-item"><span class="elementor-icon-list-text">No Trading Day Limitations</span></li>
                                    <li class="elementor-icon-list-item"><span class="elementor-icon-list-text">Enjoy Up to 90% Profit Split</span></li>
                                </ol><a href="#Progressive" class="btn btn-primary mb-5 mb-lg-0 btn-primary faq-link">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Programm -->
    <div id="Progressive" class="faqS tabel-bg">
        <div class="our-program">
            <div class="container">
                <section class="pb-0">
                    <div class="section-header text-center">
                        <h2>Experience the Process</h2>
                        <div class="our-program-btn">
                            <a href="#prog-btn-1" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary px-3 mx-3 question-link">10000 USD</a>
                            <a href="#prog-btn-2" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary px-3 mx-3 question-link">25000 USD</a>
                            <a href="#prog-btn-3" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary px-3  mx-3 question-link">50000 USD</a>
                            <a href="#prog-btn-4" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary px-3  mx-3 question-link">100000 USD</a>
                            <a href="#prog-btn-5" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary px-3  mx-3 question-link">200000 USD</a>
                        </div>
                        <div class="col-md-4 col-lg-2 col-sm-6 col-8 container d-block">
                            <a href="https://trader.mbfx.co/auth/signup/challenge" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary mt-5  mx-3  justify-content-center answer" id="prog-btn-1">Buy Now 100 USD</a>
                            <a href="https://trader.mbfx.co/auth/signup/challenge" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary mt-5  mx-3 answer" id="prog-btn-2">Buy Now 250 USD</a>
                            <a href="https://trader.mbfx.co/auth/signup/challenge" target=" _new" class="btn btn-primary mb-5 mb-lg-0 btn-primary mt-5  mx-3 answer" id="prog-btn-3">Buy Now 350 USD </a>
                            <a href="https://trader.mbfx.co/auth/signup/challenge" target=" _new" class="btn btn-primary mb-5 mb-lg-0 btn-primary mt-5  mx-3 answer" id="prog-btn-4">Buy Now 500 USD</a>
                            <a href="https://trader.mbfx.co/auth/signup/challenge" target=" _new" class="btn btn-primary mb-5 mb-lg-0 btn-primary mt-5  mx-3 answer" id="prog-btn-5">Buy Now 1000 USD</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <section class="customTable py-3" id="trading"><br>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 mx-auto">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr class="tableRow">
                                        <th></th>
                                        <th>Phase 1-Evaluation</th>
                                        <th>Phase 2-Verification</th>
                                        <th>Live Account</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tableRow">
                                        <td>Min Days / Max Days</td>
                                        <td>Unlimited</td>
                                        <td>Unlimited</td>
                                        <td>Unlimited</td>
                                    </tr>
                                    <tr class="tableRow">
                                        <td>Leverage</td>
                                        <td>1 : 100</td>
                                        <td>1 : 100</td>
                                        <td>1 : 100</td>
                                    </tr>
                                    <tr class="tableRow">
                                        <td>Bonus Profit Split</td>
                                        <td>2%</td>
                                        <td>4%</td>
                                        <td>Up to 90%</td>
                                    </tr>
                                    <tr class="tableRow">
                                        <td>Profit Target</td>
                                        <td>8%</td>
                                        <td>5%</td>
                                        <td>X</td>
                                    </tr>
                                    <tr class="tableRow">
                                        <td>Scaling Plan</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>35%</td>
                                    </tr>
                                    <tr class="tableRow">
                                        <td>Retake Discount</td>
                                        <td>10%</td>
                                        <td>15%</td>
                                        <td>20%</td>
                                    </tr>
                                    <tr class="tableRow">
                                        <td>Draw Down Type</td>
                                        <td>Trailing</td>
                                        <td>Trailing</td>
                                        <td>Trailing</td>
                                    </tr>
                                    <tr class="tableRow">
                                        <td>Overall Draw Down</td>
                                        <td>&lt;
                                            10%</td>
                                        <td>&lt;
                                            10%</td>
                                        <td>&lt;
                                            5%</td>
                                    </tr>
                                    <tr class="tableRow">
                                        <td>Daily Draw Down</td>
                                        <td>&lt;
                                            5%</td>
                                        <td>&lt;
                                            5%</td>
                                        <td>&lt;
                                            5%</td>
                                    </tr>
                                    <tr class="tableRow">
                                        <td>News Trading</td>
                                        <td>Yes</td>
                                        <td>Yes</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr class="tableRow">
                                        <td>EA Trading*</td>
                                        <td>Yes</td>
                                        <td>Yes</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr class="tableRow">
                                        <td>Weekend Trade Holding</td>
                                        <td>Yes</td>
                                        <td>Yes</td>
                                        <td>Yes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Direct Funding Section -->
    <div id="Direct" class="faqS tabel-bg">
        <div class="our-program">
            <div class="container">
                <section class="pb-0">
                    <div class="section-header text-center">
                        <h2>No Evaluation</h2>
                        <div class="our-program-btn">
                            <a href="#prog-btn-6" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary px-3 mx-3 question-link">10000 USD</a>
                            <a href="#prog-btn-7" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary px-3 mx-3 question-link">25000 USD</a>
                            <a href="#prog-btn-8" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary px-3  mx-3 question-link">50000 USD</a>
                            <a href="#prog-btn-9" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary px-3  mx-3 question-link">100000 USD</a>
                            <a href="#prog-btn-10" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary px-3  mx-3 question-link">200000 USD</a>
                        </div>
                        <div class="col-md-4 col-lg-2 col-sm-6 col-8 container d-block">
                            <a href="https://trader.mbfx.co/auth/signup/challenge" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary mt-5  mx-3  justify-content-center answer" id="prog-btn-6">Buy Now 650 USD</a>
                            <a href="https://trader.mbfx.co/auth/signup/challenge" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary mt-5  mx-3 answer" id="prog-btn-7">Buy Now 1500 USD</a>
                            <a href="https://trader.mbfx.co/auth/signup/challenge" target=" _new" class="btn btn-primary mb-5 mb-lg-0 btn-primary mt-5  mx-3 answer" id="prog-btn-8">Buy Now 3000 USD </a>
                            <a href="https://trader.mbfx.co/auth/signup/challenge" target=" _new" class="btn btn-primary mb-5 mb-lg-0 btn-primary mt-5   mx-3 answer" id="prog-btn-9">Buy Now 6000 USD</a>
                            <a href="https://trader.mbfx.co/auth/signup/challenge" target=" _new" class="btn btn-primary mb-5 mb-lg-0 btn-primary mt-5  mx-3 answer" id="prog-btn-10">Buy Now 12000 USD</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <section class="customTable py-3" id="trading"><br>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 mx-auto">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr class="tableRow">
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tableRow">
                                        <td>Min Days / Max Days</td>
                                        <td>Unlimited</td>
                                    </tr>
                                    <tr class="tableRow">
                                        <td>Leverage</td>
                                        <td>1 : 100</td>
                                    </tr>
                                    <tr class="tableRow">
                                        <td>Profit Split</td>
                                        <td>50%</td>
                                    </tr>
                                    <tr class="tableRow">
                                        <td>Withdrawal</td>
                                        <td>Daily</td>
                                    </tr>
                                    <tr class="tableRow">
                                        <td>Min Withdrawal</td>
                                        <td>50</td>
                                    </tr>
                                    <tr class="tableRow">
                                        <td>Retake Discount</td>
                                        <td>10%</td>
                                    </tr>
                                    <tr class="tableRow">
                                        <td>Draw Down Type</td>
                                        <td>Trailing</td>
                                    </tr>
                                    <tr class="tableRow">
                                        <td>Overall Draw Down</td>
                                        <td>&lt;
                                            10%</td>
                                    </tr>
                                    <tr class="tableRow">
                                        <td>Daily Draw Down</td>
                                        <td>NO</td>
                                    </tr>
                                    <tr class="tableRow">
                                        <td>News Trading</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr class="tableRow">
                                        <td>EA Trading*</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr class="tableRow">
                                        <td>Weekend Trade Holding</td>
                                        <td>Yes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- -->
    <div id="Swift" class="faqS tabel-bg">
        <div class="our-program">
            <div class="container">
                <section class="pb-0">
                    <div class="section-header text-center">
                        <h2>For the Skilled Traders</h2>
                        <a href="#basic" class="btn btn-primary mb-5 mb-lg-0 btn-primary px-3 mx-3 program-button">Basic</a>
                        <a href="#advance" class="btn btn-primary mb-5 mb-lg-0 btn-primary px-3 mx-3 program-button">Advanve</a>
                        <div id="basic" class="program-details">
                            <div class="our-program-btn pt-5">
                                <a href="#swift-btn-6" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary px-3 mx-3 question-link">10000 USD</a>
                                <a href="#swift-btn-7" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary px-3 mx-3 question-link">25000 USD</a>
                                <a href="#swift-btn-8" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary px-3  mx-3 question-link">50000 USD</a>
                                <a href="#swift-btn-9" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary px-3  mx-3 question-link">100000 USD</a>
                                <a href="#swift-btn-10" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary px-3  mx-3 question-link">200000 USD</a>
                            </div>
                            <div class="col-md-4 col-lg-2 col-sm-6 col-8 container d-block">
                                <a href="https://mbfx.co/funding" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary mt-5  mx-3  justify-content-center answer" id="swift-btn-6">Buy Now 200 USD</a>
                                <a href="https://mbfx.co/funding" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary mt-5  mx-3 answer" id="swift-btn-7">Buy Now 500 USD</a>
                                <a href="https://mbfx.co/funding" target=" _new" class="btn btn-primary mb-5 mb-lg-0 btn-primary mt-5  mx-3 answer" id="swift-btn-8">Buy Now 600 USD </a>
                                <a href="https://mbfx.co/funding" target=" _new" class="btn btn-primary mb-5 mb-lg-0 btn-primary mt-5   mx-3 answer" id="swift-btn-9">Buy Now 1000 USD</a>
                                <a href="https://mbfx.co/funding" target=" _new" class="btn btn-primary mb-5 mb-lg-0 btn-primary mt-5  mx-3 answer" id="swift-btn-10">Buy Now 2000 USD</a>
                            </div>
                            <section class="customTable py-3" id="trading"><br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-md-10 mx-auto">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr class="tableRow">
                                                            <th></th>
                                                            <th>Phase 1-Evaluation</th>
                                                            <th>Live Account</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="tableRow">
                                                            <td>Min Days / Max Days</td>
                                                            <td>Unlimited</td>
                                                            <td>Unlimited</td>
                                                        </tr>
                                                        <tr class="tableRow">
                                                            <td>Leverage</td>
                                                            <td>1 : 100</td>
                                                            <td>1 : 100</td>
                                                        </tr>
                                                        <tr class="tableRow">
                                                            <td>Bonus Profit Split</td>
                                                            <td>X</td>
                                                            <td>75%</td>
                                                        </tr>
                                                        <tr class="tableRow">
                                                            <td>Profit Target</td>
                                                            <td>10%</td>
                                                            <td>X</td>
                                                        </tr>
                                                        <tr class="tableRow">
                                                            <td>Scaling Plan</td>
                                                            <td>X</td>
                                                            <td>35%</td>
                                                        </tr>
                                                        <tr class="tableRow">
                                                            <td>Retake Discount</td>
                                                            <td>10%</td>
                                                            <td>20%</td>
                                                        </tr>
                                                        <tr class="tableRow">
                                                            <td>Draw Down Type</td>
                                                            <td>Trailing</td>
                                                            <td>Trailing</td>
                                                        </tr>
                                                        <tr class="tableRow">
                                                            <td>Overall Draw Down</td>
                                                            <td>10%</td>
                                                            <td>&lt;
                                                                5%</td>
                                                        </tr>
                                                        <tr class="tableRow">
                                                            <td>Daily Draw Down</td>
                                                            <td>5%</td>
                                                            <td>&lt;
                                                                5%</td>
                                                        </tr>
                                                        <tr class="tableRow">
                                                            <td>News Trading</td>
                                                            <td>Yes</td>
                                                            <td>Yes</td>
                                                        </tr>
                                                        <tr class="tableRow">
                                                            <td>EA Trading*</td>
                                                            <td>Yes</td>
                                                            <td>Yes</td>
                                                        </tr>
                                                        <tr class="tableRow">
                                                            <td>Weekend Trade Holding</td>
                                                            <td>Yes</td>
                                                            <td>Yes</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div id="advance" class="program-details">
                            <div class="our-program-btn pt-5">
                                <a href="#swift-btn-1" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary px-3 mx-3 question-link">10000 USD</a>
                                <a href="#swift-btn-2" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary px-3 mx-3 question-link">25000 USD</a>
                                <a href="#swift-btn-3" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary px-3  mx-3 question-link">50000 USD</a>
                                <a href="#swift-btn-4" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary px-3  mx-3 question-link">100000 USD</a>
                                <a href="#swift-btn-5" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary px-3  mx-3 question-link">200000 USD</a>
                            </div>
                            <div class="col-md-4 col-lg-2 col-sm-6 col-8 container d-block">
                                <a href="https://www.youtube.com/watch?v=X0tVc1UPtr4" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary mt-5  mx-3  justify-content-center answer" id="swift-btn-1">Buy Now 100 USD</a>
                                <a href="https://www.youtube.com/watch?v=X0tVc1UPtr4" target="_new" class="btn btn-primary mb-5 mb-lg-0 btn-primary mt-5  mx-3 answer" id="swift-btn-2">Buy Now 250 USD</a>
                                <a href="https://www.youtube.com/watch?v=X0tVc1UPtr4" target=" _new" class="btn btn-primary mb-5 mb-lg-0 btn-primary mt-5  mx-3 answer" id="swift-btn-3">Buy Now 300 USD </a>
                                <a href="https://www.youtube.com/watch?v=X0tVc1UPtr4" target=" _new" class="btn btn-primary mb-5 mb-lg-0 btn-primary mt-5   mx-3 answer" id="swift-btn-4">Buy Now 500 USD</a>
                                <a href="https://www.youtube.com/watch?v=X0tVc1UPtr4" target=" _new" class="btn btn-primary mb-5 mb-lg-0 btn-primary mt-5  mx-3 answer" id="swift-btn-5">Buy Now 1000 USD</a>
                            </div>
                            <section class="customTable py-3" id="trading"><br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-md-10 mx-auto">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr class="tableRow">
                                                            <th></th>
                                                            <th>Phase 1-Evaluation</th>
                                                            <th>Live Account</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="tableRow">
                                                            <td>Min Days / Max Days</td>
                                                            <td>Unlimited</td>
                                                            <td>Unlimited</td>
                                                        </tr>
                                                        <tr class="tableRow">
                                                            <td>Leverage</td>
                                                            <td>1 : 100</td>
                                                            <td>1 : 100</td>
                                                        </tr>
                                                        <tr class="tableRow">
                                                            <td>Bonus Profit Split</td>
                                                            <td>X</td>
                                                            <td>75%</td>
                                                        </tr>
                                                        <tr class="tableRow">
                                                            <td>Profit Target</td>
                                                            <td>10%</td>
                                                            <td>X</td>
                                                        </tr>
                                                        <tr class="tableRow">
                                                            <td>Scaling Plan</td>
                                                            <td>X</td>
                                                            <td>35%</td>
                                                        </tr>
                                                        <tr class="tableRow">
                                                            <td>Retake Discount</td>
                                                            <td>10%</td>
                                                            <td>20%</td>
                                                        </tr>
                                                        <tr class="tableRow">
                                                            <td>Draw Down Type</td>
                                                            <td>Trailing</td>
                                                            <td>Trailing</td>
                                                        </tr>
                                                        <tr class="tableRow">
                                                            <td>Overall Draw Down</td>
                                                            <td>&lt;
                                                                5%</td>
                                                            <td>&lt;
                                                                5%</td>
                                                        </tr>
                                                        <tr class="tableRow">
                                                            <td>Daily Draw Down</td>
                                                            <td>&lt;
                                                                2.5%</td>
                                                            <td>&lt;
                                                                5%</td>
                                                        </tr>
                                                        <tr class="tableRow">
                                                            <td>News Trading</td>
                                                            <td>Yes</td>
                                                            <td>Yes</td>
                                                        </tr>
                                                        <tr class="tableRow">
                                                            <td>EA Trading*</td>
                                                            <td>Yes</td>
                                                            <td>Yes</td>
                                                        </tr>
                                                        <tr class="tableRow">
                                                            <td>Weekend Trade Holding</td>
                                                            <td>Yes</td>
                                                            <td>Yes</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- -->
    <!-- //// -->
    <section class="moneyCard dark">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-6 col-lg-6 order-md-2 position-relative mb-5 mb-md-0 aos-init aos-animate text-center" data-aos="fade-down" data-aos-delay="300"><img class="lazyImage barImage-background" data-src="./assets/hand-background.png" src="./assets/hand-background.png">
                    <div><img class="vert-move position-absolute top-0 lazyImage bar-img" src="assets/funding/[fpdl.in]_round-bar-chart-graph-3d-rendering_567294-612_normal.png" style="width: 66%;left:0;right:0" /></div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="section-header">
                        <h2>Winning Blueprint For <br><span class="text-green">Your Success:</span></h2>
                    </div>
                    <ul class="check">
                        <li>Realistic achievable profit targets.</li>
                        <li>No min/max trading days.</li>
                        <li>Manageable drawdowns.</li>
                        <li>Speedy upscaling.</li>
                        <li>No restrictions on trading</li>
                        <li>Rules that are simple,
                            fair,
                            and easy to follow.</li>
                    </ul>
                </div>
            </div>

        </div>

    </section>
    <!-- Limit -->
    <section class="services" id="reward">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-10 col-lg-6 text-center">
                    <div class="section-header">
                        <h2 class="service-heading">Your potential is limitless, and so are your rewards!</h2>
                        <p>We firmly believe in acknowledging your dedication and efforts on every referral you bring. </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-10">
                    <div class="row g-2 mt-3">
                        <div class="col-12 col-md-4">
                            <div class="cards">
                                <h4>Level 0</h4>
                                <p>5% Commission</p>
                                <p>5% Discount code</p>


                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="cards">
                                <h4>Level 1</h4>
                                <P>25 Referrals</P>
                                <p>10% Commission</p>
                                <p>5% Discount code</p>

                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="cards">
                                <h4>Level 2</h4>
                                <P>50 Referrals</P>
                                <p>12% Commission</p>
                                <p>5% Discount code</p>

                            </div>
                        </div>
                    </div>
                    <div class="row g-2 mt-3 justify-content-center">
                        <div class="col-12 col-md-4">
                            <div class="cards">
                                <h4>Level 3</h4>
                                <P>100 Referrals</P>
                                <p>15% Commission</p>
                                <p>5% Discount code</p>
                                <p>Mounthly Giveaways</p>
                                <p>Free $ 10k + $ 25k Account</p>
                                <p>Bi Weekly payout</p>

                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="cards">
                                <h4>Level 4</h4>
                                <P>200 referrals</P>
                                <p>20% Commission</p>
                                <p>5% Discount code</p>
                                <p>Mounthly Giveaways</p>
                                <p>Free $ 10k + $ 25k
                                    + $ 50k Account</p>
                                <p>Weekly payout</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>

    </section>
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 text-center">
                    <div>
                        <img class="reward-img" src="assets/funding/web-cover2+2.png" alt=""></img>
                    </div>
                </div>
                <div class="col-12 col-md-6 reward-content">

                    <h3>Your potential is limitless, and so are your rewards!</h3>
                    <p>Your potential is limitless, and so are your rewards! We firmly believe in acknowledging your dedication and efforts for every referral you bring.</p>
                    <h3>Revolutionary Cash Rewards:</h3>
                    <p>Experience an innovative approach to affiliate incentives with our unique cash-rewarding structure. We're creating new standard by offering the highest cash rewards to our affiliates.
                    </p>

                    <h3>Celebrate Your Success with Free Accounts:</h3>
                    <p>When you achieve milestone, you not only showcase your exceptional skills but also earn the opportunity to receive free accounts.
                    </p>
                    <h3>Receive Dedicated Support</h3>
                    <p>You'll be assigned a dedicated manager, providing you with direct access to our expert support team. Their role goes beyond addressing your queries – they're here to nurture your business growth and success.
                    </p>

                </div>
            </div>

            <div class="text-ceter col-12 reward-end-content">
                <p>Join our multi-tier affiliate program, and enjoy additional benefits at every level <a href="https://trader.mbfx.co/auth/signup/challenge"><u>Become an Affiliate</u></a></p>
            </div>
        </div>
    </section>


    <!-- // -->
    <!-- FAQ -->
    <section class="moneyCard bg-faq" id="FAQ">
        <div class='container'>

            <h2 class="text-center mb-5 faq-heading">Frequently Ask <span class="text-green">Questions<span></h2>
            <div class="dropdown"><button class="btn btn-secondary dropdown-toggle mb-5" type="button" data-bs-toggle="dropdown" aria-expanded="false">FAQs Categories </button>

                <ul>
                    <li><a href="#Direct-funding-faq" class="faq-item faq-link">Instant funding</a></li>
                    <li><a href="#Swift-faq" class=" faq-item faq-link">Swift</a></li>
                    <li><a href="#Progressive-faq" class="faq-item faq-link">Progressive</a></li>
                    <li><a href="#Affiliate-faq" class=" faq-item faq-link">Affiliate</a></li>
                    <li><a href="#General-faq" class=" faq-item faq-link">General</a></li>
                </ul>
            </div>
            <div class="d-md-flex justify-content-center align-items-center gap-4 link-container sticky pb-5 faq-btn-item text-center">
                <a href="#Direct-funding-faq" class="border-end faq-item faq-link">Instant funding</a>
                <a href="#Swift-faq" class="border-end faq-item faq-link">Swift</a>
                <a href="Progressive-faq" class="border-end faq-item faq-link">Progressive</a>
                <a href="#Affiliate-faq" class="border-end faq-item faq-link">Affiliate</a>
                <a href="#General-faq" class="faq-item faq-link">General</a>
            </div>
            <!-- -->
            <!-- //// -->
            <div id="Progressive-faq" class="faq">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">When will I receive my live account? </button></h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">You will receive your Live Account after 24 hours of completing Phase 2 (verification).</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">What is the profit split on progressive accounts? </button></h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">The profit split for Progressive Accounts can vary depending on performance and trading achievements,
                                and it has the potential to range from a minimum of 75% to reach as high as an impressive 90%.<br></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">What is the daily DD (drawdown) and over DD (drawdown) limit? </button></h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">The daily drawdown limits vary depending on your trading phase: <br>
                                <ol>
                                    <li>In Phase 1 (evaluation) and Phase 2 (verification),
                                        the daily drawdown limit is set at 10%</li>
                                    <li>Once you transition to a live account,
                                        the daily drawdown limit decreases to 5%.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">What is the discount for retaking the challenge? </button></h2>
                        <div id="flush-collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">If you decide to retake the challenge,
                                you'll receive a discount as follows:<br>
                                <ol>
                                    <li>In Phase 1 (evaluation),
                                        you'll get a 10% discount.</li>
                                    <li>In Phase 2 (verification),
                                        the discount increases to 15%.</li>
                                    <li>For the live account,
                                        you'll enjoy a 20% discount when retaking the challenge</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">What are the profit targets for the Progressive account? </button></h2>
                        <div id="flush-collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">In the Progressive account,
                                the profit targets are as follows:<br>
                                <ol>
                                    <li>In Phase 1 (evaluation),
                                        the profit target is set at 8%.</li>
                                    <li>· In Phase 2 (verification),
                                        the profit target is adjusted to 5%.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">When will I be eligible for withdraw ? </button></h2>
                        <div id="flush-collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">In the Progressive account,
                                the profit targets are as follows:<br>After 30 calendar days of live account trading,
                                you will receive your first withdrawal. This withdrawal will include your account purchasing fees,
                                along with 2% profit from phase 1,
                                4% from phase 2,
                                and 75% of the live account’s profit </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Swift -->
            <div id="Swift-faq" class="faq">
                <div class="accordion accordion-flush" id="accordionFlushExample1">
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne-swift" aria-expanded="false" aria-controls="flush-collapseOne-swift">When will I receive my live account? </button></h2>
                        <div id="flush-collapseOne-swift" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample1">
                            <div class="accordion-body">You will receive your live account after 24 hours upon successfully completing Phase 1 (evaluation).</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo-swift" aria-expanded="false" aria-controls="flush-collapseTwo-swift">What is the profit target? </button></h2>
                        <div id="flush-collapseTwo-swift" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample1">
                            <div class="accordion-body">In Phase 1 (evaluation),
                                the profit target is set at 10%<br></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree-swift" aria-expanded="false" aria-controls="flush-collapseThree-swift">What is the daily DD (drawdown) and over DD (drawdown) limit in SWIFT advance? </button></h2>
                        <div id="flush-collapseThree-swift" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample1">
                            <div class="accordion-body">In Phase 1 (evaluation) of SWIFT Advance,
                                the daily drawdown limit is 10%,
                                and the overall drawdown limit is 5%. <br>In the live account,
                                both the daily and overall drawdown limits are 5%. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5-swift" aria-expanded="false" aria-controls="flush-collapse5-swift">What is the daily DD (drawdown) and over DD (drawdown) limit in SWIFT basic? </button></h2>
                        <div id="flush-collapse5-swift" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample1">
                            <div class="accordion-body">In Phase 1 (evaluation) of SWIFT Basic,
                                the daily drawdown limit is 2.5%,
                                and the overall drawdown limit is 5%.<br>In the live account,
                                both the daily and overall drawdown limits are set at 5%. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6-swift" aria-expanded="false" aria-controls="flush-collapse6-swift">What is the discount for retaking the challenge? </button></h2>
                        <div id="flush-collapse6-swift" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample1">
                            <div class="accordion-body">If you decide to retake the challenge,
                                you'll receive a 10% discount in Phase 1 (evaluation) and a 20% discount in the live account phase.


                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7-swift" aria-expanded="false" aria-controls="flush-collapse7-swift">What is the percentage of the profit split I will receive? </button></h2>
                        <div id="flush-collapse7-swift" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample1">
                            <div class="accordion-body">Upon meeting the specified criteria and achieving your performance targets,
                                you will become eligible to receive a bonus profit split percentage of up to 75%. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8-swift" aria-expanded="false" aria-controls="flush-collapse8-swift">When will I be eligible for withdraw ? </button></h2>
                        <div id="flush-collapse8-swift" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample1">
                            <div class="accordion-body">You will be entitled to a profit share from the live account upon the first withdrawal after 30 calendar days of live account trading. </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Swift// -->
            <!-- Direct Funding -->
            <div id="Direct-funding-faq" class="faq">
                <div class="accordion accordion-flush" id="accordionFlushExample2">
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne-direct" aria-expanded="false" aria-controls="flush-collapseOne-direct">What is the profit split on direct accounts? </button></h2>
                        <div id="flush-collapseOne-direct" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body">In direct funding,
                                the profit split is an even 50/50,
                                ensuring a fair distribution of profits.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo-direct" aria-expanded="false" aria-controls="flush-collapseTwo-direct">What is the profit target? </button></h2>
                        <div id="flush-collapseTwo-direct" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body">There is no specific profit target;
                                you are free to earn as much as you can,
                                as long as you ensure that you do not violate any other conditions.<br></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree-direct" aria-expanded="false" aria-controls="flush-collapseThree-direct">What is the daily DD(drawdown) and over DD (drawdown) limit? </button></h2>
                        <div id="flush-collapseThree-direct" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body">In Direct Funding accounts,
                                there is no daily drawdown limit. However,
                                the overall drawdown limit is set at 10% to help manage and control potential losses </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5-direct" aria-expanded="false" aria-controls="flush-collapse5-direct">What is the discount for retaking the challenge? </button></h2>
                        <div id="flush-collapse5-direct" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body">Discounts are meant to entice customers and are available for direct purchasing only. Customers who sign up through affiliations will not be able to claim them. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6-direct" aria-expanded="false" aria-controls="flush-collapse6-direct">How much will my account scale up? </button></h2>
                        <div id="flush-collapse6-direct" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body">After generating a 10% profit for four consecutive months,
                                with each month contributing 3%,
                                you will become eligible to scale up to 35%. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7-direct" aria-expanded="false" aria-controls="flush-collapse7-direct">When will I be eligible for withdraw ? </button></h2>
                        <div id="flush-collapse7-direct" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body">You will receive your first split of 50% profit after 30 calendar days of live account trading. </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Direct Funding// -->

            <!-- Affiliate -->
            <div id="Affiliate-faq" class="faq">
                <div class="accordion accordion-flush" id="accordionFlushExample3">
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne-aff" aria-expanded="false" aria-controls="flush-collapseOne-aff">How much can I earn as an affiliate? </button></h2>
                        <div id="flush-collapseOne-aff" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample3">
                            <div class="accordion-body">You can earn a 5% commission on every referral.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo-aff" aria-expanded="false" aria-controls="flush-collapseTwo-aff">How can I become an affiliate? </button></h2>
                        <div id="flush-collapseTwo-aff" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample3">
                            <div class="accordion-body">To become an affiliate,
                                you need to sign up for the affiliate program by clicking <a>here.</a>After signing up,
                                log in to your affiliate portal and request to become an affiliate <a>Link</a>. Normally,
                                we process these requests within 42 hours. Once your request is accepted,
                                you're all set to go. You can copy your affiliate link and share it within your community or marketplace. This way, people can join the platform using the link you've provided. <br></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree-aff" aria-expanded="false" aria-controls="flush-collapseThree-aff">How can I find my affiliate link? </button></h2>
                        <div id="flush-collapseThree-aff" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample3">
                            <div class="accordion-body">To share your affiliate link,
                                log in to the affiliate portal and scroll down. From there,
                                you will be able to copy your Referral URL and generate new referral links. These links can be used to track specific affiliate campaigns you run,
                                allowing you to monitor their performance. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5-aff" aria-expanded="false" aria-controls="flush-collapse5-aff">Can I purchase an account for myself? </button></h2>
                        <div id="flush-collapse5-aff" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample3">
                            <div class="accordion-body">Yes,
                                you can purchase any challenge for yourself. However,
                                please note that any challenges you purchase for yourself will not be included in your affiliate commissions. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6-aff" aria-expanded="false" aria-controls="flush-collapse6-aff">How frequently can I request my referral payout? </button></h2>
                        <div id="flush-collapse6-aff" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample3">
                            <div class="accordion-body">You can request your referral payouts biweekly,
                                specifically on the 15th and 30th of each month. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7-aff" aria-expanded="false" aria-controls="flush-collapse7-aff">What payment method can I use for my referral commissions? </button></h2>
                        <div id="flush-collapse7-aff" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample3">
                            <div class="accordion-body">The method you select at the time of sign-up will be considered your permanent payout method for referral commissions. However,
                                there can be exceptions to this. </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Affiliate// -->

            <!-- GENERAL -->
            <div id="General-faq" class="faq">
                <div class="accordion accordion-flush" id="accordionFlushExample4">
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne-gen" aria-expanded="false" aria-controls="flush-collapseOne-gen">Is there a limit on the number of times you can pause your account? </button></h2>
                        <div id="flush-collapseOne-gen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">The minimum trading days is 1;
                                afterward,
                                if your account remains inactive for 30 days,
                                it will be disqualified.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo-gen" aria-expanded="false" aria-controls="flush-collapseTwo-gen">Are there any minimum trade requirements? </button></h2>
                        <div id="flush-collapseTwo-gen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">No,
                                there are no minimum or maximum trade requirements. However,
                                a minimum of one trade is required to activate the account<br></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree-gen" aria-expanded="false" aria-controls="flush-collapseThree-gen">What time does each instrument/pair close on our server? </button></h2>
                        <div id="flush-collapseThree-gen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">The server closing time is 12:00 ET. However,
                                you can check the closing times for each pair using the symbols specifications in your MetaTrader account. To access this information,
                                please refer to your MetaTrader 5 platform. You can download the MetaTrader 5 platform by clicking on the following link. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5-gen" aria-expanded="false" aria-controls="flush-collapse5-gen">Can I get a refund? </button></h2>
                        <div id="flush-collapse5-gen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">Unfortunately,
                                no. If the account remains inactive for 6 months,
                                it will be abolished. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6-gen" aria-expanded="false" aria-controls="flush-collapse6-gen">Can I hold trades over the weekend? </button></h2>
                        <div id="flush-collapse6-gen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">Yes,
                                holding trades over the weekend is allowed for every account category. However,
                                we advise you to exercise caution and adhere to the challenge criteria. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7-gen" aria-expanded="false" aria-controls="flush-collapse7-gen">Is overnight trading and holding allowed? </button></h2>
                        <div id="flush-collapse7-gen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">Yes,
                                you can hold trades overnight. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8-gen" aria-expanded="false" aria-controls="flush-collapse8-gen">Do I need to use a stop loss on trades? </button></h2>
                        <div id="flush-collapse8-gen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">No,
                                there is no mandatory rule for using a stop loss. However,
                                you are advised to trade with a stop loss and practice proper trade risk management. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse81" aria-expanded="false" aria-controls="flush-collapse1">What payment methods do you offer? </button></h2>
                        <div id="flush-collapse81" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">You can use cryptocurrency,
                                Skrill,
                                Perfect Money,
                                and local bank transfers if available in your region. Please note that any additional costs associated with the purchase will be borne by the consumer </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse82" aria-expanded="false" aria-controls="flush-collapse82">What is the difference between the Swift and Progressive programs? </button></h2>
                        <div id="flush-collapse82" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">In the Progressive program,
                                you will go through two testing phases: Phase 1 Evaluation and Phase 2 Verifications. In contrast,
                                in the Swift program,
                                you only need to pass the Evaluation phase with the set qualifying criteria to obtain a live account. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse83" aria-expanded="false" aria-controls="flush-collapse83">Can anyone from any country open an account with you? </button></h2>
                        <div id="flush-collapse83" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">Yes,
                                traders from around the world can open an account and access a funded account,
                                except for the countries that are mentioned as exceptions. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse84" aria-expanded="false" aria-controls="flush-collapse84">What trading platforms do you offer? </button></h2>
                        <div id="flush-collapse84" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">We offer MetaTrader 5 for trading. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse85" aria-expanded="false" aria-controls="flush-collapse85">What documents do I need for KYC? </button></h2>
                        <div id="flush-collapse85" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">You need to provide proof of address and identity. KYC is a mandatory process for verifying your identity. It's a regulatory requirement that we must adhere to in order to issue live accounts with real funding capital to members like you.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse86" aria-expanded="false" aria-controls="flush-collapse86">What instruments can I trade? </button></h2>
                        <div id="flush-collapse86" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">You can trade Forex,
                                Metals,
                                Indices,
                                and Cryptocurrencies. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse87" aria-expanded="false" aria-controls="flush-collapse87">Is there a fee for the challenge? </button></h2>
                        <div id="flush-collapse87" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">Yes,
                                there is a nominal registration fee to obtain your account details. These fees cover operational costs and enable us to offer traders the technology,
                                platform,
                                and top-tier customer service. This fee also encourages all traders to approach the program and accounts seriously,
                                applying proper trading techniques and risk management methodologies,
                                as it's not provided for free.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse88" aria-expanded="false" aria-controls="flush-collapse88">Is it permissible to use a trade copier EA? </button></h2>
                        <div id="flush-collapse88" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">Yes,
                                you are permitted to use a trade copier EA if you are copying trades solely from your own accounts. However,
                                it is not allowed if you are copying trades from an external source,
                                such as another individual or trade signals. We discourage the practice of copying trades from others,
                                as our intention is to assess your individual trading skills. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse89" aria-expanded="false" aria-controls="flush-collapse89">What is the process to scale up my account? </button></h2>
                        <div id="flush-collapse89" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">If you have managed to generate a profit of 10% or more over a span of 4 months,
                                and at least 3 out of those 4 months were profitable with a minimum gain of 3% each month,
                                we will enhance your account size by 35% of the initial account size. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse91" aria-expanded="false" aria-controls="flush-collapse91">Am I allowed to utilize Expert Advisors (EAs)? </button></h2>
                        <div id="flush-collapse91" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">For Rapid and Evaluation accounts: You can employ EAs,
                                provided they are not utilized for the following purposes: <ol>
                                    <li>Account management services</li>
                                    <li>Copy trading of signals from other individuals</li>
                                    <li>Tick scalping</li>
                                    <li>Arbitrage trading</li>
                                </ol>Using third-party expert advisors is acceptable,
                                as long as they are not managed or operated by another entity. All signals must originate from you and be based on your personal setup Any breach of this rule will result in a violation. Accounts employing such EAs will be terminated,
                                banned,
                                and will not be eligible for a refund. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse92" aria-expanded="false" aria-controls="flush-collapse92">How is the calculation done for daily drawdown? </button></h2>
                        <div id="flush-collapse92" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">The calculation for daily drawdown involves 5% of the initial equity or balance for each day,
                                assessed at 5:00pm EST. It's important to note that the daily drawdown is not a fixed 5% of the initial starting balance. Here are a couple of examples to illustrate:
                                <ol>
                                    <li>If your initial equity is $103,
                                        000 and your starting balance is $100,
                                        000,
                                        the daily drawdown will be based on the higher value,
                                        which is the starting equity. 5% of $103,
                                        000 equals $5,
                                        150. This means your account balance or equity must not fall below $97,
                                        850 for the day.</li>
                                    <li>Conversely,
                                        if your initial equity is $95,
                                        000 and your starting balance is $97,
                                        000,
                                        the daily drawdown will be calculated based on the higher starting balance. 5% of $97,
                                        000 equals $4,
                                        850. This mandates that your account balance or equity should not drop below $92,
                                        150 for that day.</li>
                                </ol>Using third-party expert advisors is acceptable,
                                as long as they are not managed or operated by another entity. All signals must originate from you and be based on your personal setup Any breach of this rule will result in a violation. Accounts employing such EAs will be terminated,
                                banned,
                                and will not be eligible for a refund.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse93" aria-expanded="false" aria-controls="flush-collapse93">How many accounts am I allowed to have? </button></h2>
                        <div id="flush-collapse93" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">You are permitted to have as many accounts as you wish simultaneously,
                                as long as you adhere to all the rules and guidelines. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse94" aria-expanded="false" aria-controls="flush-collapse94">How many live accounts can I have at the same time? </button></h2>
                        <div id="flush-collapse94" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">You are allowed to maintain multiple live accounts simultaneously. However,
                                please note that the total size of these accounts must not exceed $500,
                                000. Client having multiple live accounts within a category would be merged together in a single account. Client having multiple live accounts in multiple categories (2-step evaluation, 1-step evaluation and direct funding) would be merged segregately. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse95" aria-expanded="false" aria-controls="flush-collapse95">How often can I make withdrawals? </button></h2>
                        <div id="flush-collapse95" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">Following your successful completion of a challenge,
                                your first withdrawal can be made after 30 days. After this initial withdrawal,
                                subsequent withdrawals are processed on a biweekly basis. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse96" aria-expanded="false" aria-controls="flush-collapse96">When will I receive my first withdrawal? </button></h2>
                        <div id="flush-collapse96" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">You will receive your first withdrawal after 30 days of successfully passing a challenge. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse960" aria-expanded="false" aria-controls="flush-collapse960">I've completed Phase 1 what should I do now?
                            </button></h2>
                        <div id="flush-collapse960" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">Congratulations on passing Phase 1 of your challenge ! To proceed to the next level,
                                ensure that you have no remaining open trades. If you've met the minimum requirements for drawdown and profit targets, as well as followed the specified rules, you will receive a phase-clearing email. Within 24 hours of passing the account, you will be promoted to the next level."How long do I need to wait for the next level?
                                Congratulations on passing Phase 1 of your challenge ! To proceed to the next level,
                                ensure that you have no remaining open trades. If you've met the minimum requirements for drawdown and profit targets, as well as followed the specified rules, you will receive a phase-clearing email. Within 24 hours of passing the account, you will be promoted to the next level.

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse97" aria-expanded="false" aria-controls="flush-collapse97">When will I receive my live account? </button></h2>
                        <div id="flush-collapse97" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">You will receive your live account within 24 hours after successfully passing. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse98" aria-expanded="false" aria-controls="flush-collapse98">Is hedging allowed? </button></h2>
                        <div id="flush-collapse98" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">Yes,
                                hedging is allowed. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse980" aria-expanded="false" aria-controls="flush-collapse980">What happens if a violation is detected on my account? </button></h2>
                        <div id="flush-collapse980" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">Regrettably,
                                in the event of a violation being identified on your account,
                                the account will be suspended and will not be eligible for any forthcoming payouts. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse99" aria-expanded="false" aria-controls="flush-collapse99">If I achieve the profit target and unintentionally breach the drawdown rule,
                                can I continue? </button></h2>
                        <div id="flush-collapse99" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">Even if your account attains the profit target,
                                any breach of a trading objective will render it ineligible to progress to the next phase. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse100" aria-expanded="false" aria-controls="flush-collapse100">What percentage of the profit will I receive on the live account? </button></h2>
                        <div id="flush-collapse100" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">You will receive a profit share ranging from 75% initially,
                                with the potential to increase up to 90%. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse101" aria-expanded="false" aria-controls="flush-collapse101">What should I do if I forgot my password? </button></h2>
                        <div id="flush-collapse101" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">If you're experiencing difficulty logging in, please visit the 'Sign In' page and click on the 'Forgot Password' option.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse102" aria-expanded="false" aria-controls="flush-collapse102">When can I request a withdrawal? </button></h2>
                        <div id="flush-collapse102" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <div class="accordion-body">You can request a withdrawal fortnightly;
                                however,
                                for your first withdrawal,
                                you need to complete 30 calendar days of live account trading. </div>
                        </div>
                    </div>
                    <!-- // General// -->



                </div>
            </div>
    </section>
    <!-- Review -->
    <section class="offer pb-0">
        <div class="section-header text-center trust-color">
            <h2>Join a platform trusted by many</h2>
        </div>
        <div class="col-12 col-md-12 col-lg-10 mx-auto">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <div class="row">
                            <div class="col-12 col-md-4 mx-auto">
                                <div class="card coustom-card-height justify-content-center">
                                    <div class="offerImg"><img src="assets/funding/stars-5.svg"></div>
                                    <p><i class="fa-solid fa-quote-right fa-flip-both fa-lg" style="color: #00b67a;"></i>Very helpful and friendly ! Informative and ready to answer any questions,
                                        nothing too much trouble,
                                        would definitely recommend. <i class="fa-solid fa-quote-right fa-lg" style="color: #00b67a;"></i></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mx-auto">
                                <div class="card coustom-card-height justify-content-center">
                                    <div class="offerImg"><img src="assets/funding/stars-5.svg" /></div>
                                    <p><i class="fa-solid fa-quote-right fa-flip-both fa-lg" style="color: #00b67a;"></i>Fund add Very quick & Easy,
                                        Mail response is better. When I add my fund I do a small mistake & Amount was debited & not successfully added but I just put a mail they solved my problem within few hours & my fund added Now. <i class="fa-solid fa-quote-right fa-lg" style="color: #00b67a;"></i></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mx-auto">
                                <div class="card coustom-card-height justify-content-center">
                                    <div class="offerImg"><img src="assets/funding/stars-5.svg" /></div>
                                    <p><i class="fa-solid fa-quote-right fa-flip-both fa-lg" style="color: #00b67a;"></i>First,
                                        i'm quite scared to invest...but when i started to invest and i take profit ...i'm so happy although i read bad comment.for me if you want to take surely profit go for it. <i class="fa-solid fa-quote-right fa-lg" style="color: #00b67a;"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <div class="row">
                            <div class="col-12 col-md-4 mx-auto">
                                <div class="card coustom-card-height justify-content-center">
                                    <div class="offerImg"><img src="assets/funding/stars-5.svg"></div>
                                    <p><i class="fa-solid fa-quote-right fa-flip-both fa-lg" style="color: #00b67a;"></i>Wonderful experience of MBFX GLOBAL because the transactions are very fast as compare to others and they keep to there promises <i class="fa-solid fa-quote-right fa-lg" style="color: #00b67a;"></i></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mx-auto">
                                <div class="card coustom-card-height justify-content-center">
                                    <div class="offerImg"><img src="assets/funding/stars-5.svg" /></div>
                                    <p><i class="fa-solid fa-quote-right fa-flip-both fa-lg" style="color: #00b67a;"></i>Glad to find MBFX GLOBAL the support is exceptional overall good experience <i class="fa-solid fa-quote-right fa-lg" style="color: #00b67a;"></i></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mx-auto">
                                <div class="card coustom-card-height justify-content-center">
                                    <div class="offerImg"><img src="assets/funding/stars-5.svg" /></div>
                                    <p><i class="fa-solid fa-quote-right fa-flip-both fa-lg" style="color: #00b67a;"></i>Undoubtedly,
                                        it is one of the best trading platfrom available. Tracking my trading performance and statistics is straightforward. <i class="fa-solid fa-quote-right fa-lg" style="color: #00b67a;"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-12 col-md-4 mx-auto">
                                <div class="card coustom-card-height justify-content-center">
                                    <div class="offerImg"><img src="assets/funding/stars-5.svg" /></div>
                                    <p><i class="fa-solid fa-quote-right fa-flip-both fa-lg" style="color: #00b67a;"></i>I've had an overall superior experience with MBFX GLOBAL, encountering no trading issues. They boast top-notch infrastructure, and their staff is consistently helpful and highly professional. The most important part for me is server stability and reliability.
                                        <i class="fa-solid fa-quote-right fa-lg" style="color: #00b67a;"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mx-auto">
                                <div class="card coustom-card-height justify-content-center">
                                    <div class="offerImg"><img src="assets/funding/stars-5.svg" /></div>
                                    <p><i class="fa-solid fa-quote-right fa-flip-both fa-lg" style="color: #00b67a;"></i>The website is user-friendly,
                                        and their email customer support is highly responsive. As a newcomer,
                                        I appreciate the platform's simplicity. I've encountered no issues during my trading experience,
                                        and I highly recommend it. <i class="fa-solid fa-quote-right fa-lg" style="color: #00b67a;"></i></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mx-auto">
                                <div class="card coustom-card-height justify-content-center">
                                    <div class="offerImg"><img src="assets/funding/stars-5.svg" /></div>
                                    <p><i class="fa-solid fa-quote-right fa-flip-both fa-lg" style="color: #00b67a;"></i>I found MBFX GLOBAL One of the Best ! The interface is so cool and dashboard looks great. User friendly website,
                                        So far I liked the service. the most important thing "THE PAYOUT"I receive it without any glitches. Thanks to the MBFX GLOBAL team. <i class="fa-solid fa-quote-right fa-lg" style="color: #00b67a;"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- -->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-12 col-md-4 mx-auto">
                                <div class="card coustom-card-height justify-content-center">
                                    <div class="offerImg"><img src="assets/funding/stars-5.svg" /></div>
                                    <p><i class="fa-solid fa-quote-right fa-flip-both fa-lg" style="color: #00b67a;"></i>I was about to give up on my trading account back then but this broker had given me hope to move forward. They have helped me understand forex better and had helped. <i class="fa-solid fa-quote-right fa-lg" style="color: #00b67a;"></i></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mx-auto">
                                <div class="card coustom-card-height justify-content-center">
                                    <div class="offerImg"><img src="assets/funding/stars-5.svg" /></div>
                                    <p><i class="fa-solid fa-quote-right fa-flip-both fa-lg" style="color: #00b67a;"></i>Unbeatable trading platform ! The ultimate launchpad for traders. They provide the resources opportunities needed to soar in the financial markets. Joining was my best decision yet <i class="fa-solid fa-quote-right fa-lg" style="color: #00b67a;"></i></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mx-auto">
                                <div class="card coustom-card-height justify-content-center">
                                    <div class="offerImg"><img src="assets/funding/stars-5.svg" /></div>
                                    <p><i class="fa-solid fa-quote-right fa-flip-both fa-lg" style="color: #00b67a;"></i>Great choice of platform to trade with. Withdrawal is fast and service are good. Highly recommended. <i class="fa-solid fa-quote-right fa-lg" style="color: #00b67a;"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-12 col-md-4 mx-auto">
                                <div class="card coustom-card-height justify-content-center">
                                    <div class="offerImg"><img src="assets/funding/stars-5.svg" /></div>
                                    <p><i class="fa-solid fa-quote-right fa-flip-both fa-lg" style="color: #00b67a;"></i>They've transformed my trading game with exceptional support and a dynamic environment. Every day here feels like a step closer to financial success
                                        <i class="fa-solid fa-quote-right fa-lg" style="color: #00b67a;"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mx-auto">
                                <div class="card coustom-card-height justify-content-center">
                                    <div class="offerImg"><img src="assets/funding/stars-5.svg" /></div>
                                    <p><i class="fa-solid fa-quote-right fa-flip-both fa-lg" style="color: #00b67a;"></i>For me,
                                        learning about the forex market is a good accomplishment. Furthermore,
                                        making money is a wonderful experience. I'm happy I traded with this MBFX GLOBAL.
                                        <i class="fa-solid fa-quote-right fa-lg" style="color: #00b67a;"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mx-auto">
                                <div class="card coustom-card-height justify-content-center">
                                    <div class="offerImg"><img src="assets/funding/stars-5.svg" /></div>
                                    <p><i class="fa-solid fa-quote-right fa-flip-both fa-lg" style="color: #00b67a;"></i>I was already trading for 2 other platforms before I started trading with mbfx what really stood out for me was their genuine interest in my success of becoming a long term trader for them. Their customer service is usually fast,
                                        they reply to my emails within hours (instead of days like some others) and the fact that I can login to the dashboard and track my stats is very helpful. <i class="fa-solid fa-quote-right fa-lg" style="color: #00b67a;"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-12 col-md-4 mx-auto">
                                <div class="card coustom-card-height justify-content-center">
                                    <div class="offerImg"><img src="assets/funding/stars-5.svg" /></div>
                                    <p><i class="fa-solid fa-quote-right fa-flip-both fa-lg" style="color: #00b67a;"></i>I have been using MBFX GLOBAL services for few months now and so far I am satisfied. I gain profit from my trades and was able to withdraw smoothly. Prompt customer service,
                                        too. <i class="fa-solid fa-quote-right fa-lg" style="color: #00b67a;"></i></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mx-auto">
                                <div class="card coustom-card-height justify-content-center">
                                    <div class="offerImg"><img src="assets/funding/stars-5.svg" /></div>
                                    <p><i class="fa-solid fa-quote-right fa-flip-both fa-lg" style="color: #00b67a;"></i>Trading with MBFX GLOBAL has proven to be a hassle-free experience,
                                        and their withdrawal process is as straightforward as it gets. I've been trading with them for a few months now, and unlike some other platforms, I haven't encountered any issues. <i class="fa-solid fa-quote-right fa-lg" style="color: #00b67a;"></i></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mx-auto">
                                <div class="card coustom-card-height justify-content-center">
                                    <div class="offerImg"><img src="assets/funding/stars-5.svg" /></div>
                                    <p><i class="fa-solid fa-quote-right fa-flip-both fa-lg" style="color: #00b67a;"></i>I found MBFX GLOBAL One of the Best ! The interface is so cool and dashboard looks great. User friendly website,
                                        So far I liked the service. the most important thing "THE PAYOUT"I receive it without any glitches. Thanks to the MBFX team. <i class="fa-solid fa-quote-right fa-lg" style="color: #00b67a;"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev"><span class="visually-hidden">Previous</span></button><button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next"><span class="visually-hidden">Next</span></button>
            </div>
        </div>
    </section>
    <!-- Start up -->
    <!-- <section class="image-text">
                <div class="container">
                    <div class="row ">
                        <div class="col-11 mx-auto">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6">
                                    <div class="img-wrapper d-none d-md-block d-lg-block"><img src="assets/funding/golden-30m-isolated-on-white-260nw-2212323487-min.jpg" class="img-fluid" alt="" /></div>
                                </div>
                                <div class="col-12 col-md-6 text-sm-center text-center">
                                    <div class="section-header text-md-end">
                                        <h4 class="m-0">
                                            <h6>2014</h6>We started providing services to clients
                                        </h4>
                                        <h4 class="m-0">
                                            <h6>30M+</h6>We started providing services to clients
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>--><!-- Get in touch with Us -->
    <section class="image-text">
        <div class="container">
            <div class="row ">
                <div class="col-11 mx-auto">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <div class="section-header">
                                <h2 class="service-heading">Get in Touch <span class="text-green">With Us</span></h2>
                            </div>
                            <h4 class="form-sub-heading">We’re here to help ! Please fill out the<br>form below,
                                and we’ll get back to you<br>as soon as possible.</h4>
                            <div class="form-link-sec col-12 col-md-8 pt-4">
                                <ul>


                                    <li class="mb-3">

                                        <a href="https://www.facebook.com/mbfxglobal/?ref=pages_you_manage"><i class="fa-brands fa-2xl fa-square-facebook" style="color: #03bb78;"></i> facebook</a>

                                    </li>

                                    <li class="mb-3">

                                        <a href="https://www.instagram.com/mbfxglobal/"><i class="fa-brands fa-square-instagram fa-2xl" style="color: #03bb78;"></i> insatgram</a>

                                    </li>

                                    <li class="mb-3">

                                        <a href="https://twitter.com/mbfx_global"><i class="fa-brands fa-square-twitter fa-2xl" style="color: #03bb78;"></i> twitter</a>

                                    </li>

                                    <li class="mb-3">

                                        <a href="https://youtube.com/c/MBFXglobal"><i class="fa-brands fa-square-youtube fa-2xl" style="color: #03bb78;"></i> youtube</a>

                                    </li>



                                </ul>

                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <form class="form mt-lg-5" method="post">
                                <div class="container-fluid">
                                    <h3>Fill the form to reach us</h3>
                                    <div class="row g-3">
                                        <div class="col-6"><input type="text" placeholder="Name:" name="name" class="form-control require"></div>
                                        <div class="col-6"><input type="text" placeholder="Phone:" name="phone" class="form-control require"></div>
                                        <div class="col-12"><input type="email" placeholder="Email Address:" name="email" class="form-control require"></div>
                                        <div class="col-12"><input type="text" placeholder="Message or Inquiry" name="message" class="form-control require"></div>
                                        <div class="col-12"><textarea type="text" placeholder="Reason for Contact" name="reason" class="form-control  require"></textarea></div>
                                        <div class="col-12 text-end"><button type="submit" class="btn btn-primary mb-4"><a href="support@mbfxfunding.com">submit</a></button></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-12 mx-auto">
                    <div class="tradingSkill">
                        <div class="help-inner">

                            <div class="section-header">

                                <h2>

                                    <span>Get ready to explore the MBFX GLOBAL world <br></span>

                                    We are always ready to help you

                                </h2>

                            </div>
                            <div class="d-grid">
                                <a class="btn mb-3" href="https://trader.mbfx.co/auth/signup/challenge">Start Now</a>
                                <!-- <a href="<?php echo $signupUrl; ?>" class="btn  mbfxMobilebtn" id="appBtn">Open Live Account</a> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>


    </section>
    <!-- footer -->
    <section class="footerBottom pb-0">
        <div class="container my-4">
            <!-- <div class="row footer-top-btn col-md-4 col-lg-2 col-sm-6 col-8"><a href="<?php echo $signupUrl; ?>" class="btn btn-secondary mbfxMobilebtn" id="appBtn">Open Live Account</a></div> -->
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-12 col-lg-4 pe-md-4"><a href="index.php"><img class="logo-image" src="https://mbfx.co/assets/header/mbfx-logo.png" /></a>
                    <p>Our website provides information for general informational purposes only,
                        without any guarantees of completeness or accuracy. Your use of this information is at your own risk,
                        and MBFX GLOBAL is not liable for any losses or damages. We do not offer specific investment recommendations or advice and are not directed at residents in jurisdictions where it would violate local laws. Program fees cover operational costs. Our technical solution is powered by liquidity providers,
                        and MBFX GLOBAL Funding is not engaged in regulated activities;
                        we focus on simulated Prop Trading and Trading Education,
                        requiring no regulatory authorization.</p>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <ul class="list-group menu">
                        <li class="list-group-item list-items"><a href="https://mbfx.co/funding">Home</a></li>
                        <li class="list-group-item list-items"><a href="#reward">Affiliated</a></li>
                        <li class="list-group-item list-items"><a href="#FAQ">FAQs</a></li>
                        <li class="list-group-item list-items">Contact Us</li>

                    </ul>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <ul class="list-group mb-4 mb-md-0 menu">
                        <li class="list-group-item list-items">FAQ</li>
                        <li class="list-group-item list-items"><a href="#Progressive-faq">Progressive</a></li>
                        <li class="list-group-item list-items"><a href="#Swift-faq">Swift</a></li>
                        <li class="list-group-item list-items"><a href="#Direct-funding-faq">Direct Funding</a></li>
                        <li class="list-group-item list-items"><a href="#Affiliate-faq">Affilaite</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <ul class="list-group menu">
                        <li class="list-group-item list-items">Quick links</li>
                        <li class="list-group-item list-items"><a href="https://trader.mbfx.co/auth/signin">Traders Room</a></li>

                        <li class="list-group-item list-items">Terms of use</li>
                        <li class="list-group-item list-items"><a href="http://mbfx.co">MBFX GLOBAL Broker</a></li>
                        <li class="list-group-item list-items"><a href="https://mbfx.co/copy-trading">MBFX GLOBAL copy Trading</a></li>

                    </ul>
                </div>

            </div>
        </div>
    </section>
    <section class="footerText">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-11">
                    <div class="row">
                        <div class="col-12 col-md-2 col-lg-2 d-none">
                            <p><strong>MBFX GLOBAL LIMITED</strong></p>
                        </div>
                        <div class="col-12 col-md-2 col-lg-3  d-none">
                            <p>Registration number: 2023-00532</p>
                        </div>
                        <!-- <div class="col-12 col-md-8  col-lg-7">
                            <p>Registered address: 71-75 SHELTON ST COVENT GARDEN LONDON WC2H 9JQ</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="./js/funding.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
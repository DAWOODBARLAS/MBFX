<!DOCTYPE html>
<html lang="en">

<head> <?php include('includes/headScript.php'); ?>
  <link rel="stylesheet" href="css/information-form.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <title>Information Form</title> <?php
                                  $page = 'information-form';
                                  ?>
</head>

<body>
  <form id="information-form" name="information-form">
    <!-- Partner Information  -->
    <section class="partner-information mb-5">
      <div class="information-head">
        <h3>Partner Information</h3>
      </div>
      <div class="container">
        <div class="row mt-5">
          <div class="col-12 col-lg-6">
            <div class="row fields-control">
              <label for="firstName" class="col-lg-3 col-form-label">First Name <sup class="text-danger">*</sup>
              </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" id="firstName" name="firstName">
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="row fields-control">
              <label for="lastName" class="col-lg-3 col-form-label">Last Name <sup class="text-danger">*</sup>
              </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" id="lastName" name="lastName">
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-lg-4">
          <div class="col-12 col-lg-6">
            <div class="row fields-control">
              <label for="email" class="col-lg-3 col-form-label">Email <sup class="text-danger">*</sup>
              </label>
              <div class="col-lg-8">
                <input type="email" class="form-control" id="email" name="email">
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="row fields-control">
              <label for="contact" class="col-lg-3 col-form-label">Contact Number <sup class="text-danger">*</sup>
              </label>
              <div class="col-lg-8">
                <input class="form-control" id="phone" type="tel" name="contact" />
              </div>
            </div>
          </div>
        </div>
        <div class="row fields-control mt-5">
          <label for="benefitsDesc" class="col-12 col-lg-5 col-form-label">Please describe how you will operate the IB and benefits of your clients. <sup class="text-danger">*</sup>
          </label>
          <div class="col-12 col-lg-6">
            <textarea class="form-control" id="benefitsDesc" name="benefitsDesc"></textarea>
          </div>
        </div>
        <div class="row fields-control mt-4">
          <label for="marketStrategy" class="col-12 col-lg-5 col-form-label">Please share you strategy of marketing MBFX GLOBAL as an IB. <sup class="text-danger">*</sup>
          </label>
          <div class="col-12 col-lg-6">
            <textarea class="form-control" id="marketStrategy" name="marketStrategy"></textarea>
          </div>
        </div>
        <div class="row fields-control mt-4">
          <label for="promoteLinks" class="col-12 col-lg-5 col-form-label">Please provide links of your platforms where you will promote MBFX GLOBAL. <sup class="text-danger">*</sup>
          </label>
          <div class="col-12 col-lg-6">
            <textarea type="text" class="form-control" id="promoteLinks" name="promoteLinks"></textarea>
          </div>
        </div>
        <div class="row fields-control mt-4">
          <label for="activeClientsNo" class="col-12 col-lg-5 col-form-label">Total number of active clients <sup class="text-danger">*</sup>
          </label>
          <div class="col-12 col-lg-6">
            <input type="number" class="form-control" id="activeClientsNo" name="activeClientsNo">
          </div>
        </div>
        <div class="row fields-control mt-4">
          <label for="tradeVolume" class="col-12 col-lg-5 col-form-label">Last six month trading volume (standard lot) <sup class="text-danger">*</sup>
          </label>
          <div class="col-12 col-lg-6">
            <input type="number" class="form-control" id="tradeVolume" name="tradeVolume">
          </div>
        </div>
        <div class="row fields-control mt-4">
          <label for="clientDeposit" class="col-12 col-lg-5 col-form-label">Last six month clients deposit (USD) <sup class="text-danger">*</sup>
          </label>
          <div class="col-12 col-lg-6">
            <input type="number" class="form-control" id="clientDeposit" name="clientDeposit">
          </div>
        </div>
        <div class="row fields-control mt-4">
          <label for="rebate" class="col-12 col-lg-5 col-form-label">Last rebate drawn (USD) <sup class="text-danger">*</sup>
          </label>
          <div class="col-12 col-lg-6">
            <input type="number" class="form-control" id="rebate" name="rebate">
          </div>
        </div>
        <div class="row fields-control mt-4">
          <label for="activeBrokers" class="col-12 col-lg-5 col-form-label">List of active brokers <sup class="text-danger">*</sup>
          </label>
          <div class="col-12 col-lg-6">
            <input type="text" class="form-control" id="activeBrokers" name="activeBrokers">
          </div>
        </div>
        <div class="row fields-control mt-4">
          <label for="avgClients" class="col-12 col-lg-5 col-form-label">Average new clients monthly <sup class="text-danger">*</sup>
          </label>
          <div class="col-12 col-lg-6">
            <input type="number" class="form-control" id="avgClients" name="avgClients">
          </div>
        </div>
        <div class="row fields-control mt-4">
          <label for="avgLotSize" class="col-12 col-lg-5 col-form-label">Average lot size Monthly (standard lot) <sup class="text-danger">*</sup>
          </label>
          <div class="col-12 col-lg-6">
            <input type="number" class="form-control" id="avgLotSize" name="avgLotSize">
          </div>
        </div>
        <div class="row fields-control mt-4">
          <label for="avgDeposit" class="col-12 col-lg-5 col-form-label">Average deposit Monthly (USD) <sup class="text-danger">*</sup>
          </label>
          <div class="col-12 col-lg-6">
            <input type="number" class="form-control" id="avgDeposit" name="avgDeposit">
          </div>
        </div>
      </div>
    </section>
    <!-- Referral Information -->
    <section class="referral-information">
      <div class="information-head">
        <h3>Referral Information</h3>
      </div>
      <div class="container">
        <div class="checks-container mt-5" id="clients-attraction">
          <p class="mb-4"> How do you attract your clients? (Select all possible answers) <sup class="text-danger">*</sup>
          </p>
          <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <input type="checkbox" id="copyTrading" name="copyTrading">
                <label for="copyTrading">Copy Trading</label>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <input type="checkbox" id="eaProvider" name="eaProvider">
                <label for="eaProvider">EA Provider</label>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <input type="checkbox" id="education" name="education">
                <label for="education">Education</label>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <input type="checkbox" id="fundManagement" name="fundManagement">
                <label for="fundManagement">Fund Management</label>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <input type="checkbox" id="investment" name="insvestment">
                <label for="investment">Investment/trading advice</label>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <input type="checkbox" id="monthlyIncome" name="monthlyIncome">
                <label for="monthlyIncome">Monhtly Income</label>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <input type="checkbox" id="signalServices" name="signalServices">
                <label for="signalServices">Signal Services</label>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <input type="checkbox" id="socialMediaInfluencing" name="socialMediaInfluencing">
                <label for="socialMediaInfluencing">Social Media Influencing</label>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <input type="checkbox" id="recomendation" name="recomendation">
                <label for="recomendation">Random Recomendation</label>
              </div>
            </div>
          </div>
        </div>
        <div class="checks-container mt-4" id="clientsPlatforms">
          <p class="mb-4"> From which platform source your clients will come? (Select all possible answers) <sup class="text-danger">*</sup>
          </p>
          <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <input type="checkbox" id="financialInstitue" name="financialInstitue">
                <label for="financialInstitue">Financial Institue</label>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <input type="checkbox" id="friendsFamily" name="friendsFamily">
                <label for="friendsFamily">Friends and Family</label>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <input type="checkbox" id="socialMedia" name="socialMedia">
                <label for="socialMedia">Social Media</label>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <input type="checkbox" id="website" name="website">
                <label for="website">Website</label>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <input type="checkbox" id="mouthWord" name="mouthWord">
                <label for="mouthWord">Word of mouth</label>
              </div>
            </div>
          </div>
        </div>
        <div class="checks-container mt-4" id="clientsBackground">
          <p class="mb-4"> What is the background of majority of your clients? (Select all possible answers) <sup class="text-danger">*</sup>
          </p>
          <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <input type="checkbox" id="crypto" name="crypto">
                <label for="crypto">Crypto Traders</label>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <input type="checkbox" id="forex" name="forex">
                <label for="forex">Forex Traders</label>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <input type="checkbox" id="stock" name="stock">
                <label for="stock">Stock Traders</label>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <input type="checkbox" id="nonTraders" name="nonTraders">
                <label for="nonTraders">Non Traders</label>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <input type="checkbox" id="invBankers" name="invBankers">
                <label for="invBankers">Investment Bankers</label>
              </div>
            </div>
          </div>
        </div>
        <div class="checks-container mt-4" id="reference-regions">
          <p class="mb-4"> From which region your references will come? (Select all possible answers) <sup class="text-danger">*</sup>
          </p>
          <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <input type="checkbox" id="asia" name="asia">
                <label for="asia">Asia</label>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <input type="checkbox" id="africa" name="africa">
                <label for="africa">Africa</label>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <input type="checkbox" id="europe" name="europe">
                <label for="europe">Europe</label>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <input type="checkbox" id="southAfrica" name="southAfrica">
                <label for="southAfrica">South Africa</label>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="form-group">
                <input type="checkbox" id="centralAmerica" name="centralAmerica">
                <label for="centralAmerica">Central America</label>
              </div>
            </div>
          </div>
        </div>
        <div class="country-selct-container">
          <div class="row">
            <div class="col-12">
              <p class="m-0 mt-4">Which countries your referrals will mainly come from? (Select all possible answers) <sup class="text-danger">*</sup>
              </p>
            </div>
            <div class="col-12 col-lg-8">
              <div class="multiselect-dropdown w-100">
                <div class="dropdown-header">
                  <div class="selected-values" id="selected-values">Select All Countries</div>
                  <span class="arrow"></span>
                </div>
                <div class="dropdown-list" id="dropdown"></div>
              </div>
            </div>MBFX
          </div>
        </div>
      </div>
    </section>
    <section class="conditions mt-5">
      <div class="container">
        <h6>Conditions:</h6>
        <div class="form-group">
          <input type="checkbox" id="condition-1" name="condition-1" class="condition">
          <label for="condition-1">I agree to IB partner terms and conditions of promotional payout. ( <a class="text-danger" href="./documents/IB Partner Payout contract (1).pdf" target="_blank">Terms and Condition</a>) <sup class="text-danger">*</sup>
          </label>
        </div>
        <div class="form-group">
          <input type="checkbox" id="condition-2" name="condition-2" class="condition">
          <label for="condition-2">I will notify MBFX GLOBAL as soon as any change occur in above mentioned. <sup class="text-danger">*</sup>
          </label>
        </div>
        <div class="form-group">
          <input type="checkbox" id="condition-3" name="condition-3" class="condition">
          <label for="condition-3">The information provided in this form is not raise or assumption. <sup class="text-danger">*</sup>
          </label>
        </div>
        <div class="form-group">
          <input type="checkbox" id="condition-4" name="condition-4" class="condition">
          <label for="condition-4">I agree to receive fixed spreads as per the designated account types and acknowledge that any additional rebate would only be possible through mark-ups. <sup class="text-danger">*</sup>
          </label>
        </div>
        <div class="form-group">
          <input type="checkbox" id="condition-5" name="condition-5" class="condition">
          <label for="condition-5">I am aware and allow MBFX GLOBAL to reach out to my customers in any matter. <sup class="text-danger">*</sup>
          </label>
        </div>
        <div class="form-group">
          <input type="checkbox" id="condition-6" name="condition-6" class="condition">
          <label for="condition-6">I hereby declared that I understand all IB conditions and operating function, I agree to perform under company jurisdiction policy. <sup class="text-danger">*</sup>
          </label>
        </div>
        <!-- <button type="submit" onclick="location.href='mailto:partners@mbfx.co';" class="btn btn-danger submit-btn">Submit
        </button> -->
        <button type="submit" onclick="sendFormToEmail('partners@mbfx.co');" class="btn btn-danger submit-btn">Submit</button>

        <span id="output"></span>
      </div>
    </section>
  </form>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
  <script src="./temp/jquery-3.6.0.min.js"></script>
  <script src="./js/information-form.js"></script>
</body>

</html>
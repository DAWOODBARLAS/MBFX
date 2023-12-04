<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/headScript.php'); ?>
    <link rel="stylesheet" href="css/information-form.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <title>Information Form</title>
    <?php $page = 'information-form'; ?>
</head>

<body>
    <!-- ... (your existing HTML code) ... -->

    <!-- Additional Test Fields -->
    <div class="row fields-control mt-4">
        <label for="testField1" class="col-12 col-lg-5 col-form-label">Test Field 1</label>
        <div class="col-12 col-lg-6">
            <input type="text" class="form-control" id="testField1" name="testField1">
        </div>
    </div>

    <div class="row fields-control mt-4">
        <label for="testField2" class="col-12 col-lg-5 col-form-label">Test Field 2</label>
        <div class="col-12 col-lg-6">
            <input type="text" class="form-control" id="testField2" name="testField2">
        </div>
    </div>

    <div class="row fields-control mt-4">
        <label for="testField3" class="col-12 col-lg-5 col-form-label">Test Field 3</label>
        <div class="col-12 col-lg-6">
            <input type="text" class="form-control" id="testField3" name="testField3">
        </div>
    </div>

    <!-- ... (your existing HTML code) ... -->

    <script>
        // ... (your existing script)

        function getFormData() {
            return "First Name: " + document.getElementById("firstName").value + "\n" +
                "Last Name: " + document.getElementById("lastName").value + "\n" +
                "Email: " + document.getElementById("email").value + "\n" +
                "Contact Number: " + document.getElementById("phone").value + "\n" +
                "Benefits Description: " + document.getElementById("benefitsDesc").value + "\n" +
                "Market Strategy: " + document.getElementById("marketStrategy").value + "\n" +
                "Promote Links: " + document.getElementById("promoteLinks").value + "\n" +
                "Active Clients Number: " + document.getElementById("activeClientsNo").value + "\n" +
                "Trade Volume: " + document.getElementById("tradeVolume").value + "\n" +
                "Client Deposit: " + document.getElementById("clientDeposit").value + "\n" +
                "Rebate: " + document.getElementById("rebate").value + "\n" +
                "Active Brokers: " + document.getElementById("activeBrokers").value + "\n" +
                "Average New Clients Monthly: " + document.getElementById("avgClients").value + "\n" +
                "Average Lot Size Monthly: " + document.getElementById("avgLotSize").value + "\n" +
                "Average Deposit Monthly: " + document.getElementById("avgDeposit").value + "\n" +
                "Additional Information: " + document.getElementById("additionalInfo").value + "\n" +
                "Test Field 1: " + document.getElementById("testField1").value + "\n" +
                "Test Field 2: " + document.getElementById("testField2").value + "\n" +
                "Test Field 3: " + document.getElementById("testField3").value;
            // ... (add other fields)
        }
    </script>

    <!-- ... (your existing HTML code) ... -->




    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="./temp/jquery-3.6.0.min.js"></script>
    <script src="./js/information-form.js"></script>
</body>

</html>
<!-- onclick="location.href='mailto:partners@mbfx.co';" -->
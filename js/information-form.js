// Getting the data from the form:

// All countries - // length 252
// All countries
// length 252
const countries = [
  { name: "Afghanistan", code: "AF", phone: 93 },
  { name: "Åland Islands", code: "AX", phone: 358 },
  { name: "Albania", code: "AL", phone: 355 },
  { name: "Algeria", code: "DZ", phone: 213 },
  { name: "American Samoa", code: "AS", phone: 1684 },
  { name: "Andorra", code: "AD", phone: 376 },
  { name: "Angola", code: "AO", phone: 244 },
  { name: "Anguilla", code: "AI", phone: 1264 },
  { name: "Antarctica", code: "AQ", phone: 672 },
  { name: "Antigua & Barbuda", code: "AG", phone: 1268 },
  { name: "Argentina", code: "AR", phone: 54 },
  { name: "Armenia", code: "AM", phone: 374 },
  { name: "Aruba", code: "AW", phone: 297 },
  { name: "Australia", code: "AU", phone: 61 },
  { name: "Austria", code: "AT", phone: 43 },
  { name: "Azerbaijan", code: "AZ", phone: 994 },
  { name: "Bahamas", code: "BS", phone: 1242 },
  { name: "Bahrain", code: "BH", phone: 973 },
  { name: "Bangladesh", code: "BD", phone: 880 },
  { name: "Barbados", code: "BB", phone: 1246 },
  { name: "Belarus", code: "BY", phone: 375 },
  { name: "Belgium", code: "BE", phone: 32 },
  { name: "Belize", code: "BZ", phone: 501 },
  { name: "Benin", code: "BJ", phone: 229 },
  { name: "Bermuda", code: "BM", phone: 1441 },
  { name: "Bhutan", code: "BT", phone: 975 },
  { name: "Bolivia", code: "BO", phone: 591 },
  { name: "Caribbean Netherlands", code: "BQ", phone: 599 },
  { name: "Bosnia & Herzegovina", code: "BA", phone: 387 },
  { name: "Botswana", code: "BW", phone: 267 },
  { name: "Bouvet Island", code: "BV", phone: 55 },
  { name: "Brazil", code: "BR", phone: 55 },
  { name: "British Indian Ocean Territory", code: "IO", phone: 246 },
  { name: "Brunei", code: "BN", phone: 673 },
  { name: "Bulgaria", code: "BG", phone: 359 },
  { name: "Burkina Faso", code: "BF", phone: 226 },
  { name: "Burundi", code: "BI", phone: 257 },
  { name: "Cambodia", code: "KH", phone: 855 },
  { name: "Cameroon", code: "CM", phone: 237 },
  { name: "Canada", code: "CA", phone: 1 },
  { name: "Cape Verde", code: "CV", phone: 238 },
  { name: "Cayman Islands", code: "KY", phone: 1345 },
  { name: "Central African Republic", code: "CF", phone: 236 },
  { name: "Chad", code: "TD", phone: 235 },
  { name: "Chile", code: "CL", phone: 56 },
  { name: "China", code: "CN", phone: 86 },
  { name: "Christmas Island", code: "CX", phone: 61 },
  { name: "Cocos (Keeling) Islands", code: "CC", phone: 672 },
  { name: "Colombia", code: "CO", phone: 57 },
  { name: "Comoros", code: "KM", phone: 269 },
  { name: "Congo - Brazzaville", code: "CG", phone: 242 },
  { name: "Congo - Kinshasa", code: "CD", phone: 242 },
  { name: "Cook Islands", code: "CK", phone: 682 },
  { name: "Costa Rica", code: "CR", phone: 506 },
  { name: "Côte d’Ivoire", code: "CI", phone: 225 },
  { name: "Croatia", code: "HR", phone: 385 },
  { name: "Cuba", code: "CU", phone: 53 },
  { name: "Curaçao", code: "CW", phone: 599 },
  { name: "Cyprus", code: "CY", phone: 357 },
  { name: "Czechia", code: "CZ", phone: 420 },
  { name: "Denmark", code: "DK", phone: 45 },
  { name: "Djibouti", code: "DJ", phone: 253 },
  { name: "Dominica", code: "DM", phone: 1767 },
  { name: "Dominican Republic", code: "DO", phone: 1809 },
  { name: "Ecuador", code: "EC", phone: 593 },
  { name: "Egypt", code: "EG", phone: 20 },
  { name: "El Salvador", code: "SV", phone: 503 },
  { name: "Equatorial Guinea", code: "GQ", phone: 240 },
  { name: "Eritrea", code: "ER", phone: 291 },
  { name: "Estonia", code: "EE", phone: 372 },
  { name: "Ethiopia", code: "ET", phone: 251 },
  { name: "Falkland Islands (Islas Malvinas)", code: "FK", phone: 500 },
  { name: "Faroe Islands", code: "FO", phone: 298 },
  { name: "Fiji", code: "FJ", phone: 679 },
  { name: "Finland", code: "FI", phone: 358 },
  { name: "France", code: "FR", phone: 33 },
  { name: "French Guiana", code: "GF", phone: 594 },
  { name: "French Polynesia", code: "PF", phone: 689 },
  { name: "French Southern Territories", code: "TF", phone: 262 },
  { name: "Gabon", code: "GA", phone: 241 },
  { name: "Gambia", code: "GM", phone: 220 },
  { name: "Georgia", code: "GE", phone: 995 },
  { name: "Germany", code: "DE", phone: 49 },
  { name: "Ghana", code: "GH", phone: 233 },
  { name: "Gibraltar", code: "GI", phone: 350 },
  { name: "Greece", code: "GR", phone: 30 },
  { name: "Greenland", code: "GL", phone: 299 },
  { name: "Grenada", code: "GD", phone: 1473 },
  { name: "Guadeloupe", code: "GP", phone: 590 },
  { name: "Guam", code: "GU", phone: 1671 },
  { name: "Guatemala", code: "GT", phone: 502 },
  { name: "Guernsey", code: "GG", phone: 44 },
  { name: "Guinea", code: "GN", phone: 224 },
  { name: "Guinea-Bissau", code: "GW", phone: 245 },
  { name: "Guyana", code: "GY", phone: 592 },
  { name: "Haiti", code: "HT", phone: 509 },
  { name: "Heard & McDonald Islands", code: "HM", phone: 0 },
  { name: "Vatican City", code: "VA", phone: 39 },
  { name: "Honduras", code: "HN", phone: 504 },
  { name: "Hong Kong", code: "HK", phone: 852 },
  { name: "Hungary", code: "HU", phone: 36 },
  { name: "Iceland", code: "IS", phone: 354 },
  { name: "India", code: "IN", phone: 91 },
  { name: "Indonesia", code: "ID", phone: 62 },
  { name: "Iran", code: "IR", phone: 98 },
  { name: "Iraq", code: "IQ", phone: 964 },
  { name: "Ireland", code: "IE", phone: 353 },
  { name: "Isle of Man", code: "IM", phone: 44 },
  { name: "Israel", code: "IL", phone: 972 },
  { name: "Italy", code: "IT", phone: 39 },
  { name: "Jamaica", code: "JM", phone: 1876 },
  { name: "Japan", code: "JP", phone: 81 },
  { name: "Jersey", code: "JE", phone: 44 },
  { name: "Jordan", code: "JO", phone: 962 },
  { name: "Kazakhstan", code: "KZ", phone: 7 },
  { name: "Kenya", code: "KE", phone: 254 },
  { name: "Kiribati", code: "KI", phone: 686 },
  { name: "North Korea", code: "KP", phone: 850 },
  { name: "South Korea", code: "KR", phone: 82 },
  { name: "Kosovo", code: "XK", phone: 381 },
  { name: "Kuwait", code: "KW", phone: 965 },
  { name: "Kyrgyzstan", code: "KG", phone: 996 },
  { name: "Laos", code: "LA", phone: 856 },
  { name: "Latvia", code: "LV", phone: 371 },
  { name: "Lebanon", code: "LB", phone: 961 },
  { name: "Lesotho", code: "LS", phone: 266 },
  { name: "Liberia", code: "LR", phone: 231 },
  { name: "Libya", code: "LY", phone: 218 },
  { name: "Liechtenstein", code: "LI", phone: 423 },
  { name: "Lithuania", code: "LT", phone: 370 },
  { name: "Luxembourg", code: "LU", phone: 352 },
  { name: "Macao", code: "MO", phone: 853 },
  { name: "North Macedonia", code: "MK", phone: 389 },
  { name: "Madagascar", code: "MG", phone: 261 },
  { name: "Malawi", code: "MW", phone: 265 },
  { name: "Malaysia", code: "MY", phone: 60 },
  { name: "Maldives", code: "MV", phone: 960 },
  { name: "Mali", code: "ML", phone: 223 },
  { name: "Malta", code: "MT", phone: 356 },
  { name: "Marshall Islands", code: "MH", phone: 692 },
  { name: "Martinique", code: "MQ", phone: 596 },
  { name: "Mauritania", code: "MR", phone: 222 },
  { name: "Mauritius", code: "MU", phone: 230 },
  { name: "Mayotte", code: "YT", phone: 262 },
  { name: "Mexico", code: "MX", phone: 52 },
  { name: "Micronesia", code: "FM", phone: 691 },
  { name: "Moldova", code: "MD", phone: 373 },
  { name: "Monaco", code: "MC", phone: 377 },
  { name: "Mongolia", code: "MN", phone: 976 },
  { name: "Montenegro", code: "ME", phone: 382 },
  { name: "Montserrat", code: "MS", phone: 1664 },
  { name: "Morocco", code: "MA", phone: 212 },
  { name: "Mozambique", code: "MZ", phone: 258 },
  { name: "Myanmar (Burma)", code: "MM", phone: 95 },
  { name: "Namibia", code: "NA", phone: 264 },
  { name: "Nauru", code: "NR", phone: 674 },
  { name: "Nepal", code: "NP", phone: 977 },
  { name: "Netherlands", code: "NL", phone: 31 },
  { name: "Curaçao", code: "AN", phone: 599 },
  { name: "New Caledonia", code: "NC", phone: 687 },
  { name: "New Zealand", code: "NZ", phone: 64 },
  { name: "Nicaragua", code: "NI", phone: 505 },
  { name: "Niger", code: "NE", phone: 227 },
  { name: "Nigeria", code: "NG", phone: 234 },
  { name: "Niue", code: "NU", phone: 683 },
  { name: "Norfolk Island", code: "NF", phone: 672 },
  { name: "Northern Mariana Islands", code: "MP", phone: 1670 },
  { name: "Norway", code: "NO", phone: 47 },
  { name: "Oman", code: "OM", phone: 968 },
  { name: "Pakistan", code: "PK", phone: 92 },
  { name: "Palau", code: "PW", phone: 680 },
  { name: "Palestine", code: "PS", phone: 970 },
  { name: "Panama", code: "PA", phone: 507 },
  { name: "Papua New Guinea", code: "PG", phone: 675 },
  { name: "Paraguay", code: "PY", phone: 595 },
  { name: "Peru", code: "PE", phone: 51 },
  { name: "Philippines", code: "PH", phone: 63 },
  { name: "Pitcairn Islands", code: "PN", phone: 64 },
  { name: "Poland", code: "PL", phone: 48 },
  { name: "Portugal", code: "PT", phone: 351 },
  { name: "Puerto Rico", code: "PR", phone: 1787 },
  { name: "Qatar", code: "QA", phone: 974 },
  { name: "Réunion", code: "RE", phone: 262 },
  { name: "Romania", code: "RO", phone: 40 },
  { name: "Russia", code: "RU", phone: 70 },
  { name: "Rwanda", code: "RW", phone: 250 },
  { name: "St. Barthélemy", code: "BL", phone: 590 },
  { name: "St. Helena", code: "SH", phone: 290 },
  { name: "St. Kitts & Nevis", code: "KN", phone: 1869 },
  { name: "St. Lucia", code: "LC", phone: 1758 },
  { name: "St. Martin", code: "MF", phone: 590 },
  { name: "St. Pierre & Miquelon", code: "PM", phone: 508 },
  { name: "St. Vincent & Grenadines", code: "VC", phone: 1784 },
  { name: "Samoa", code: "WS", phone: 684 },
  { name: "San Marino", code: "SM", phone: 378 },
  { name: "São Tomé & Príncipe", code: "ST", phone: 239 },
  { name: "Saudi Arabia", code: "SA", phone: 966 },
  { name: "Senegal", code: "SN", phone: 221 },
  { name: "Serbia", code: "RS", phone: 381 },
  { name: "Serbia", code: "CS", phone: 381 },
  { name: "Seychelles", code: "SC", phone: 248 },
  { name: "Sierra Leone", code: "SL", phone: 232 },
  { name: "Singapore", code: "SG", phone: 65 },
  { name: "Sint Maarten", code: "SX", phone: 1 },
  { name: "Slovakia", code: "SK", phone: 421 },
  { name: "Slovenia", code: "SI", phone: 386 },
  { name: "Solomon Islands", code: "SB", phone: 677 },
  { name: "Somalia", code: "SO", phone: 252 },
  { name: "South Africa", code: "ZA", phone: 27 },
  { name: "South Georgia & South Sandwich Islands", code: "GS", phone: 500 },
  { name: "South Sudan", code: "SS", phone: 211 },
  { name: "Spain", code: "ES", phone: 34 },
  { name: "Sri Lanka", code: "LK", phone: 94 },
  { name: "Sudan", code: "SD", phone: 249 },
  { name: "Suriname", code: "SR", phone: 597 },
  { name: "Svalbard & Jan Mayen", code: "SJ", phone: 47 },
  { name: "Eswatini", code: "SZ", phone: 268 },
  { name: "Sweden", code: "SE", phone: 46 },
  { name: "Switzerland", code: "CH", phone: 41 },
  { name: "Syria", code: "SY", phone: 963 },
  { name: "Taiwan", code: "TW", phone: 886 },
  { name: "Tajikistan", code: "TJ", phone: 992 },
  { name: "Tanzania", code: "TZ", phone: 255 },
  { name: "Thailand", code: "TH", phone: 66 },
  { name: "Timor-Leste", code: "TL", phone: 670 },
  { name: "Togo", code: "TG", phone: 228 },
  { name: "Tokelau", code: "TK", phone: 690 },
  { name: "Tonga", code: "TO", phone: 676 },
  { name: "Trinidad & Tobago", code: "TT", phone: 1868 },
  { name: "Tunisia", code: "TN", phone: 216 },
  { name: "Turkey", code: "TR", phone: 90 },
  { name: "Turkmenistan", code: "TM", phone: 7370 },
  { name: "Turks & Caicos Islands", code: "TC", phone: 1649 },
  { name: "Tuvalu", code: "TV", phone: 688 },
  { name: "Uganda", code: "UG", phone: 256 },
  { name: "Ukraine", code: "UA", phone: 380 },
  { name: "United Arab Emirates", code: "AE", phone: 971 },
  { name: "United Kingdom", code: "GB", phone: 44 },
  { name: "United States", code: "US", phone: 1 },
  { name: "U.S. Outlying Islands", code: "UM", phone: 1 },
  { name: "Uruguay", code: "UY", phone: 598 },
  { name: "Uzbekistan", code: "UZ", phone: 998 },
  { name: "Vanuatu", code: "VU", phone: 678 },
  { name: "Venezuela", code: "VE", phone: 58 },
  { name: "Vietnam", code: "VN", phone: 84 },
  { name: "British Virgin Islands", code: "VG", phone: 1284 },
  { name: "U.S. Virgin Islands", code: "VI", phone: 1340 },
  { name: "Wallis & Futuna", code: "WF", phone: 681 },
  { name: "Western Sahara", code: "EH", phone: 212 },
  { name: "Yemen", code: "YE", phone: 967 },
  { name: "Zambia", code: "ZM", phone: 260 },
  { name: "Zimbabwe", code: "ZW", phone: 263 },
];

const form = document.getElementById("information-form");
const dropdownList = document.getElementById("dropdown");
const erroPopup = `<div class="alert alert-danger alert-position position-fixed" role="alert">Please fill out all the fields. Every field is mandatory.</div>`;
const successPopup = `<div class="alert alert-success alert-position position-fixed" role="alert">Your Form has been submitted.</div>`;

// Adding all the countries to the dropdown list
countries.forEach(
  ({ name }) =>
    (dropdownList.innerHTML += `<label class="dropdown-item"><input type="checkbox" value="${name}">${name}</label>`)
);

// form validation and getting data

const phoneInputField = document.querySelector("#phone");
const phoneInput = window.intlTelInput(phoneInputField, {
  utilsScript:
    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
});

form.addEventListener("submit", function (e) {
  e.preventDefault();

  // Data Object for validation
  const data = {
    firstName: null,
    lastName: null,
    email: null,
    contact: null,
    benefitsDesc: null,
    marketStrategy: null,
    promoteLinks: null,
    activeClientsNo: null,
    tradeVolume: null,
    clientDeposit: null,
    rebate: null,
    activeBrokers: null,
    avgClients: null,
    avgLotSize: null,
    avgDeposit: null,
    clientsAttraction: [],
    clientsPlatform: [],
    clientsBackground: [],
    referneceRegion: [],
    countries: [],
  };

  // Accessing all the dom elements that i need

  console.log(data);

  const selectedCountry = document.querySelector(".iti__selected-flag").title;

  const inputs = document.querySelectorAll("#information-form input");
  const textarea = document.querySelectorAll("#information-form textarea");
  const countryInputs = document.querySelectorAll(".dropdown-item input");
  const clientsAttraction = document.querySelectorAll(
    "#clients-attraction input"
  );
  const clientsPlatforms = document.querySelectorAll("#clientsPlatforms input");
  const clientsBackground = document.querySelectorAll(
    "#clientsBackground input"
  );
  const referenceRegions = document.querySelectorAll(
    "#reference-regions input"
  );
  const conditionInputs = document.querySelectorAll(".condition");

  // Checking if the obj has the valid name then add data othewise don't
  inputs.forEach((input) => {
    if (data.hasOwnProperty(input.name) && input.value != "") {
      data[input.name] = input.value;
    }
    if (data.hasOwnProperty(input.name) && input.name == "contact") {
      data[input.name] = `${getCode(selectedCountry) + " " + input.value}`;
    }
    if (input.value == "") {
      data[input.name] = null;
    }
  });

  textarea.forEach((ta) => {
    if (data.hasOwnProperty(ta.name) && ta.value != "") {
      data[ta.name] = ta.value;
    }
    if (ta.value == "") {
      data[ta.name] = null;
    }
  });

  // Checking data and pushing to their respectivr variable arrays
  checkPush(clientsAttraction, data.clientsAttraction);
  checkPush(clientsPlatforms, data.clientsPlatform);
  checkPush(clientsBackground, data.clientsBackground);
  checkPush(referenceRegions, data.referneceRegion);

  countryInputs.forEach((country) => {
    if (country.checked == true) {
      data.countries.push(country.value);
    }
  });

  // Checking if all the conditions are true/ If not don't move further
  if (Array.from(conditionInputs).some((input) => input.checked == false)) {
    useErrorPopup();
    return;
  }

  if (Object.values(data).some((value) => value == null)) {
    useErrorPopup();
    return;
  }

  if (
    data.countries.length == 0 ||
    data.clientsAttraction.length == 0 ||
    data.clientsPlatform.length == 0 ||
    data.clientsBackground.length == 0 ||
    data.referneceRegion.length == 0
  ) {
    useErrorPopup();
    return;
  }
  const output = $("#output");
  const submitButton = $(".submit-btn");
  let spinner = $(".spinner-border");

  spinner.removeClass("d-none");

  let form = new FormData();
  form.append("formType", "information-form");
  for (let key in data) {
    form.append(key, data[key]);
  }
  $.ajax({
    type: "POST",
    enctype: "text/html",
    url: "mailer/email.php",
    data: form,
    processData: false,
    contentType: false,
    cache: false,
    timeout: 800000,

    success: function (data) {
      if (data == "email_sent") {
        output.text("Request Sent Successfuly");
      } else {
        output.text(data);
      }

      submitButton.prop("disabled", true);
      spinner.addClass("d-none");
      submitButton.text("Submit");
    },
    error: function (e) {
      $("#output").text(e.responseText);
      submitButton.prop("disabled", false);
      spinner.addClass("d-none");
      submitButton.text("Submit");
    },
  });
});

function checkPush(arrayOfEls, arrayToSave) {
  arrayOfEls.forEach((el) => {
    if (el.checked == true) {
      arrayToSave.push(el.name);
    }
  });
}

function useErrorPopup() {
  document.body.insertAdjacentHTML("afterbegin", erroPopup);
  setTimeout(() => {
    const alert = document.querySelector(".alert.alert-danger");
    alert.remove();
  }, 2000);
}

function useSuccessPopup() {
  document.body.insertAdjacentHTML("afterbegin", successPopup);
  setTimeout(() => {
    const alert = document.querySelector(".alert.alert-success");
    alert.remove();
  }, 2000);
}

// This is the code for Dropdown- custom dropdown
let selected = [];

const dropdownHeader = document.querySelector(".dropdown-header");
const inputs = document.querySelectorAll(".dropdown-list input");

const toggleDropdown = () => {
  const dropdown = document.getElementById("dropdown");
  const header = document.querySelector(".dropdown-header");
  dropdown.style.display === "block"
    ? ((dropdown.style.display = "none"), header.classList.remove("open"))
    : ((dropdown.style.display = "block"), header.classList.add("open"));
};

function updateSelection() {
  if (this.checked) {
    selected.push(this.value);
  } else {
    selected.splice(selected.indexOf(this.value), 1);
  }
  if (selected.length > 0) {
    document.getElementById("selected-values").innerHTML = selected.join(", ");
  } else {
    document.getElementById("selected-values").innerHTML = "Select options";
  }
}

dropdownHeader.addEventListener("click", toggleDropdown);

inputs.forEach((input) => input.addEventListener("change", updateSelection));

function getCode(str) {
  return str.slice(str.indexOf("+"));
}

document.addEventListener("click", function (e) {
  e.stopPropagation();
  console.log(e.target);
  if (
    e.target.classList.contains("multiselect-dropdown") ||
    e.target.closest(".multiselect-dropdown")
  )
    return;

  const dropdown = document.getElementById("dropdown");
  const header = document.querySelector(".dropdown-header");

  (dropdown.style.display = "none"), header.classList.remove("open");
});

function sendFormToEmail(emailAddress) {
  const form = document.getElementById("information-form");
  const dropdownList = document.getElementById("dropdown");
  // ... (the rest of your existing code)

  // ... (your existing code)

  $.ajax({
    type: "POST",
    enctype: "text/html",
    url: "mailer/email.php",
    data: form,
    processData: false,
    contentType: false,
    cache: false,
    timeout: 800000,

    success: function (data) {
      if (data == "email_sent") {
        output.text("Request Sent Successfully");
      } else {
        output.text(data);
      }

      submitButton.prop("disabled", true);
      spinner.addClass("d-none");
      submitButton.text("Submit");
    },
    error: function (e) {
      $("#output").text(e.responseText);
      submitButton.prop("disabled", false);
      spinner.addClass("d-none");
      submitButton.text("Submit");
    },
  });
}

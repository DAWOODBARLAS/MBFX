$(document).ready(function () {
  particlesJS.load("particles-js", "./js/particlesjs-config.json", function () {
    console.log("callback - particles.js config loaded");
  });
  let count = 0;
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    //console.log(scroll);
    //console.log($("#aboutCompany").offset().top)
    if (scroll >= $("#aboutCompany").offset().top) {
      count++;
      if (count == 1) {
        $(".counter").counterUp({
          delay: 10,
          time: 1000,
        });
      }
    }
  });
  $("#mainSlider").owlCarousel({
    loop: true,
    margin: 0,
    items: 1,
    dots: true,
    nav: true,
    autoplay: false,
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
    responsive: {
      0: {
        items: 1,
        nav: false,
        dots: true,
        margin: 0,
      },
    },
  });

  $("#logos").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    items: 7,
    dots: false,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 2,
        nav: false,
        dots: false,
        margin: 15,
      },
      600: {
        items: 3,
        nav: false,
      },
      1000: {
        items: 7,
        nav: false,
      },
    },
  });
  function randomMarkers() {
    let wrapper = document.getElementById("wrapper"); // get wrapper reference
    //wrapper.innerHTML = "";
    let markerHTML = "";
    for (let i = 0; i < 6; i++) {
      let radomX = Math.floor(Math.random() * 60) + 20;
      let radomY = Math.floor(Math.random() * 60) + 20;
      let top = radomY + "%";
      let left = radomX + "%";
      markerHTML += `<span class='markers' style='left:${left};top:${top};display:none'></span>`;
    }
    $(".markers").fadeOut();
    setTimeout(function () {
      wrapper.innerHTML = markerHTML;
      setTimeout(function () {
        $(".markers").fadeIn();
      }, 500);
    }, 1000);
  }
  //randomMarkers()
  //setInterval(randomMarkers,5000);
  $(".sponorItem img.bg").on("load", function () {
    //console.log($(this).height());
    //$(this).parent().css("height", $(this).height());
  });

  const activeItem = () => {
    let expandWidth = "60%";
    let halfwidth = "20%";
    if ($(window).width() > 768) {
      //for desktop
      $(".sponorItem").parent().css("width", halfwidth);
      $(".sponorItem.active").parent().css("width", expandWidth);
      $(".sponorItem .onCollapsed").css("opacity", "1");
      $(".sponorItem .sponsorContent").css("opacity", "0");
      setTimeout(() => {
        $(".sponorItem.active .onCollapsed").css("opacity", "0");
        $(".sponorItem.active .sponsorContent").css("opacity", "1");
      }, 400);
    }
  };
  activeItem();
  $(".sponorItem").mouseenter(function (e) {
    if (!$(this).hasClass("active")) {
      $(".sponorItem").removeClass("active");
      $(this).addClass("active");
      activeItem();
    }
  });

  const array = [
    {
      "Client Name": "Charli Vo",
      "Account Type": "ECN Social Trading",
      "Account Size": 95037,
      "Last Month Profit": 886695.21,
      "Last Month Gain": 933,
      "Draw Down": 46,
    },
    {
      "Client Name": "Амос Владиславович",
      "Account Type": "ECN Social Trading",
      "Account Size": 14358,
      "Last Month Profit": 4020.2400000000002,
      "Last Month Gain": 28,
      "Draw Down": 64,
    },
    {
      "Client Name": "Beverly Cohen",
      "Account Type": "ECN Social Trading",
      "Account Size": 22542,
      "Last Month Profit": 7889.7,
      "Last Month Gain": 35,
      "Draw Down": 18,
    },
    {
      "Client Name": "Ahmed Ali",
      "Account Type": "Raw Spread ",
      "Account Size": 9370,
      "Last Month Profit": 2998.4,
      "Last Month Gain": 32,
      "Draw Down": 40,
    },
    {
      "Client Name": "Clémence Dumas",
      "Account Type": "ECN Social Trading",
      "Account Size": 27899,
      "Last Month Profit": 165441.07,
      "Last Month Gain": 593,
      "Draw Down": 46,
    },
    {
      "Client Name": "Jacque Mac",
      "Account Type": "Raw Spread ",
      "Account Size": 9976,
      "Last Month Profit": 23244.08,
      "Last Month Gain": 233,
      "Draw Down": 32,
    },
    {
      "Client Name": "Hashim Holding",
      "Account Type": "Raw Spread ",
      "Account Size": 6493,
      "Last Month Profit": 194.79000000000002,
      "Last Month Gain": 3,
      "Draw Down": 28,
    },
    {
      "Client Name": "Крюков Святослав",
      "Account Type": "ECN Social Trading",
      "Account Size": 14242,
      "Last Month Profit": 1139.36,
      "Last Month Gain": 8,
      "Draw Down": 30,
    },
    {
      "Client Name": "Muhammad Hassan",
      "Account Type": "ECN Social Trading",
      "Account Size": 33006,
      "Last Month Profit": 15182.76,
      "Last Month Gain": 46,
      "Draw Down": 28,
    },
    {
      "Client Name": "Prasoon Mitra",
      "Account Type": "ECN Social Trading",
      "Account Size": 71557,
      "Last Month Profit": 57245.600000000006,
      "Last Month Gain": 80,
      "Draw Down": 61,
    },
    {
      "Client Name": "Corinne Jourdan",
      "Account Type": "Raw Spread ",
      "Account Size": 4581,
      "Last Month Profit": 549.72,
      "Last Month Gain": 12,
      "Draw Down": 41,
    },
    {
      "Client Name": "Suzanne Mcdermott",
      "Account Type": "ECN Social Trading",
      "Account Size": 15520,
      "Last Month Profit": 5121.599999999999,
      "Last Month Gain": 33,
      "Draw Down": 34,
    },
    {
      "Client Name": "Aayushi Usman",
      "Account Type": "Raw Spread ",
      "Account Size": 9081,
      "Last Month Profit": 5630.22,
      "Last Month Gain": 62,
      "Draw Down": 76,
    },
    {
      "Client Name": "Семен Ильясович",
      "Account Type": "Raw Spread ",
      "Account Size": 3368,
      "Last Month Profit": 2424.96,
      "Last Month Gain": 72,
      "Draw Down": 64,
    },
    {
      "Client Name": "Ozan Mccullough",
      "Account Type": "Raw Spread ",
      "Account Size": 3825,
      "Last Month Profit": 3480.75,
      "Last Month Gain": 91,
      "Draw Down": 24,
    },
    {
      "Client Name": "Talha Ahmad",
      "Account Type": "ECN Social Trading",
      "Account Size": 23105,
      "Last Month Profit": 3465.75,
      "Last Month Gain": 15,
      "Draw Down": 59,
    },
    {
      "Client Name": "Sam Jaramillo",
      "Account Type": "ECN Social Trading",
      "Account Size": 48352,
      "Last Month Profit": 112660.15999999999,
      "Last Month Gain": 233,
      "Draw Down": 5,
    },
    {
      "Client Name": "Kunti Johal",
      "Account Type": "ECN Social Trading",
      "Account Size": 63386,
      "Last Month Profit": 16480.36,
      "Last Month Gain": 26,
      "Draw Down": 55,
    },
    {
      "Client Name": "Virginie Le Lejeune",
      "Account Type": "ECN Social Trading",
      "Account Size": 91505,
      "Last Month Profit": 37517.049999999996,
      "Last Month Gain": 41,
      "Draw Down": 62,
    },
    {
      "Client Name": "Kaleb Mcnamara",
      "Account Type": "ECN Social Trading",
      "Account Size": 50888,
      "Last Month Profit": 42237.04,
      "Last Month Gain": 83,
      "Draw Down": 52,
    },
    {
      "Client Name": "Farhan Shaw",
      "Account Type": "Raw Spread ",
      "Account Size": 7261,
      "Last Month Profit": 5808.8,
      "Last Month Gain": 80,
      "Draw Down": 25,
    },
    {
      "Client Name": "Марфа Михайловна",
      "Account Type": "Raw Spread ",
      "Account Size": 8183,
      "Last Month Profit": 2127.58,
      "Last Month Gain": 26,
      "Draw Down": 77,
    },
    {
      "Client Name": "Ellena Kirkpatrick",
      "Account Type": "ECN Social Trading",
      "Account Size": 17089,
      "Last Month Profit": 12133.189999999999,
      "Last Month Gain": 71,
      "Draw Down": 74,
    },
    {
      "Client Name": "Usman ismail",
      "Account Type": "ECN Social Trading",
      "Account Size": 62910,
      "Last Month Profit": 30825.9,
      "Last Month Gain": 49,
      "Draw Down": 15,
    },
    {
      "Client Name": "Thelma Castillo",
      "Account Type": "ECN Social Trading",
      "Account Size": 20717,
      "Last Month Profit": 13673.22,
      "Last Month Gain": 66,
      "Draw Down": 12,
    },
    {
      "Client Name": "Jiya Bobal",
      "Account Type": "ECN Social Trading",
      "Account Size": 84038,
      "Last Month Profit": 108409.02,
      "Last Month Gain": 129,
      "Draw Down": 19,
    },
    {
      "Client Name": "Maurice Gilbert",
      "Account Type": "ECN Social Trading",
      "Account Size": 24412,
      "Last Month Profit": 7323.6,
      "Last Month Gain": 30,
      "Draw Down": 7,
    },
    {
      "Client Name": "Lily Sanders",
      "Account Type": "Raw Spread ",
      "Account Size": 8296,
      "Last Month Profit": 3650.24,
      "Last Month Gain": 44,
      "Draw Down": 69,
    },
    {
      "Client Name": "Кононова Раиса",
      "Account Type": "Raw Spread ",
      "Account Size": 7756,
      "Last Month Profit": 3024.84,
      "Last Month Gain": 39,
      "Draw Down": 22,
    },
    {
      "Client Name": "Fay Mcneill",
      "Account Type": "Raw Spread ",
      "Account Size": 3519,
      "Last Month Profit": 774.18,
      "Last Month Gain": 22,
      "Draw Down": 8,
    },
    {
      "Client Name": "Rashid  fatima",
      "Account Type": "ECN Social Trading",
      "Account Size": 35757,
      "Last Month Profit": 19666.35,
      "Last Month Gain": 55,
      "Draw Down": 64,
    },
    {
      "Client Name": "Elsie-May Bevan",
      "Account Type": "ECN Social Trading",
      "Account Size": 31776,
      "Last Month Profit": 9215.039999999999,
      "Last Month Gain": 29,
      "Draw Down": 26,
    },
    {
      "Client Name": "Юлия Николаевна",
      "Account Type": "ECN Social Trading",
      "Account Size": 20021,
      "Last Month Profit": 4805.04,
      "Last Month Gain": 24,
      "Draw Down": 56,
    },
    {
      "Client Name": "Nathanael Boyer",
      "Account Type": "Raw Spread ",
      "Account Size": 6736,
      "Last Month Profit": 3637.44,
      "Last Month Gain": 54,
      "Draw Down": 55,
    },
    {
      "Client Name": "Urmi Nayar",
      "Account Type": "Raw Spread ",
      "Account Size": 6548,
      "Last Month Profit": 6155.120000000001,
      "Last Month Gain": 94,
      "Draw Down": 44,
    },
    {
      "Client Name": "Zeeshan Saif",
      "Account Type": "Raw Spread ",
      "Account Size": 3014,
      "Last Month Profit": 1567.28,
      "Last Month Gain": 52,
      "Draw Down": 78,
    },
    {
      "Client Name": "Lilliana Coffey",
      "Account Type": "ECN Social Trading",
      "Account Size": 17043,
      "Last Month Profit": 7158.06,
      "Last Month Gain": 42,
      "Draw Down": 53,
    },
    {
      "Client Name": "Yisroel Drew",
      "Account Type": "ECN Social Trading",
      "Account Size": 17004,
      "Last Month Profit": 6801.599999999999,
      "Last Month Gain": 40,
      "Draw Down": 69,
    },
    {
      "Client Name": "Капустина Антонина",
      "Account Type": "ECN Social Trading",
      "Account Size": 19391,
      "Last Month Profit": 2326.92,
      "Last Month Gain": 12,
      "Draw Down": 50,
    },
    {
      "Client Name": "Yara O'Neill",
      "Account Type": "ECN Social Trading",
      "Account Size": 35549,
      "Last Month Profit": 27372.73,
      "Last Month Gain": 77,
      "Draw Down": 27,
    },
    {
      "Client Name": "Aahil Crane",
      "Account Type": "ECN Social Trading",
      "Account Size": 40450,
      "Last Month Profit": 16989,
      "Last Month Gain": 42,
      "Draw Down": 26,
    },
    {
      "Client Name": "Milana Russell",
      "Account Type": "Raw Spread ",
      "Account Size": 3839,
      "Last Month Profit": 1228.48,
      "Last Month Gain": 32,
      "Draw Down": 50,
    },
    {
      "Client Name": "Alain Picard",
      "Account Type": "Raw Spread ",
      "Account Size": 4228,
      "Last Month Profit": 1183.8400000000001,
      "Last Month Gain": 28,
      "Draw Down": 60,
    },
    {
      "Client Name": "Abbigail Devlin",
      "Account Type": "Raw Spread ",
      "Account Size": 5648,
      "Last Month Profit": 8076.639999999999,
      "Last Month Gain": 143,
      "Draw Down": 45,
    },
    {
      "Client Name": "Usama Malik",
      "Account Type": "ECN Social Trading",
      "Account Size": 15878,
      "Last Month Profit": 15242.880000000001,
      "Last Month Gain": 96,
      "Draw Down": 72,
    },
    {
      "Client Name": "Jobin Gera",
      "Account Type": "Raw Spread ",
      "Account Size": 7468,
      "Last Month Profit": 5302.280000000001,
      "Last Month Gain": 71,
      "Draw Down": 49,
    },
    {
      "Client Name": "Garfield Watson",
      "Account Type": "Raw Spread ",
      "Account Size": 5210,
      "Last Month Profit": 2240.3,
      "Last Month Gain": 43,
      "Draw Down": 13,
    },
    {
      "Client Name": "Нестеров Евстигней",
      "Account Type": "ECN Social Trading",
      "Account Size": 10327,
      "Last Month Profit": 8158.33,
      "Last Month Gain": 79,
      "Draw Down": 47,
    },
    {
      "Client Name": "Nieve Woodcock",
      "Account Type": "ECN Social Trading",
      "Account Size": 42775,
      "Last Month Profit": 32081.25,
      "Last Month Gain": 75,
      "Draw Down": 80,
    },
    {
      "Client Name": "Benoît Francois",
      "Account Type": "ECN Social Trading",
      "Account Size": 40472,
      "Last Month Profit": 31972.88,
      "Last Month Gain": 79,
      "Draw Down": 39,
    },
    {
      "Client Name": "Jagoda Ramirez",
      "Account Type": "ECN Social Trading",
      "Account Size": 40322,
      "Last Month Profit": 11290.16,
      "Last Month Gain": 28,
      "Draw Down": 11,
    },
    {
      "Client Name": "Kamran Muzammal",
      "Account Type": "ECN Social Trading",
      "Account Size": 13969,
      "Last Month Profit": 419.07,
      "Last Month Gain": 3,
      "Draw Down": 29,
    },
    {
      "Client Name": "Jun Lane",
      "Account Type": "Raw Spread ",
      "Account Size": 6798,
      "Last Month Profit": 679.8000000000001,
      "Last Month Gain": 10,
      "Draw Down": 36,
    },
    {
      "Client Name": "Michèle Pascal",
      "Account Type": "Raw Spread ",
      "Account Size": 7494,
      "Last Month Profit": 6220.0199999999995,
      "Last Month Gain": 83,
      "Draw Down": 28,
    },
    {
      "Client Name": "Cassian Mcgill",
      "Account Type": "Raw Spread ",
      "Account Size": 8428,
      "Last Month Profit": 6995.24,
      "Last Month Gain": 83,
      "Draw Down": 76,
    },
    {
      "Client Name": "Евдокимова Маргарита",
      "Account Type": "Raw Spread ",
      "Account Size": 5991,
      "Last Month Profit": 1018.4699999999999,
      "Last Month Gain": 17,
      "Draw Down": 66,
    },
    {
      "Client Name": "Elwood Mackie",
      "Account Type": "ECN Social Trading",
      "Account Size": 17201,
      "Last Month Profit": 8600.5,
      "Last Month Gain": 50,
      "Draw Down": 71,
    },
    {
      "Client Name": "Torin Patterson",
      "Account Type": "ECN Social Trading",
      "Account Size": 30150,
      "Last Month Profit": 2110.5,
      "Last Month Gain": 7,
      "Draw Down": 7,
    },
    {
      "Client Name": "Namita Hegde",
      "Account Type": "ECN Social Trading",
      "Account Size": 37080,
      "Last Month Profit": 33742.8,
      "Last Month Gain": 91,
      "Draw Down": 40,
    },
    {
      "Client Name": "Hassam Shahzaib",
      "Account Type": "ECN Social Trading",
      "Account Size": 42584,
      "Last Month Profit": 2555.04,
      "Last Month Gain": 6,
      "Draw Down": 65,
    },
    {
      "Client Name": "Jules de Ollivier",
      "Account Type": "Raw Spread ",
      "Account Size": 8733,
      "Last Month Profit": 2270.58,
      "Last Month Gain": 26,
      "Draw Down": 70,
    },
    {
      "Client Name": "Scarlett-Rose Love",
      "Account Type": "ECN Social Trading",
      "Account Size": 10383,
      "Last Month Profit": 39663.06,
      "Last Month Gain": 382,
      "Draw Down": 70,
    },
    {
      "Client Name": "Kerrie Miles",
      "Account Type": "Raw Spread ",
      "Account Size": 9331,
      "Last Month Profit": 1119.72,
      "Last Month Gain": 12,
      "Draw Down": 60,
    },
    {
      "Client Name": "Latika Dar",
      "Account Type": "ECN Social Trading",
      "Account Size": 44836,
      "Last Month Profit": 23314.72,
      "Last Month Gain": 52,
      "Draw Down": 57,
    },
    {
      "Client Name": "Семен Валентинович",
      "Account Type": "Raw Spread ",
      "Account Size": 5361,
      "Last Month Profit": 3431.04,
      "Last Month Gain": 64,
      "Draw Down": 69,
    },
    {
      "Client Name": "Miranda Guy",
      "Account Type": "ECN Social Trading",
      "Account Size": 21781,
      "Last Month Profit": 5009.63,
      "Last Month Gain": 23,
      "Draw Down": 13,
    },
    {
      "Client Name": "Arun Sachdeva",
      "Account Type": "Raw Spread ",
      "Account Size": 4832,
      "Last Month Profit": 3189.12,
      "Last Month Gain": 66,
      "Draw Down": 61,
    },
    {
      "Client Name": "Jorja Barrow",
      "Account Type": "ECN Social Trading",
      "Account Size": 16988,
      "Last Month Profit": 14439.8,
      "Last Month Gain": 85,
      "Draw Down": 79,
    },
    {
      "Client Name": "André Gonzalez",
      "Account Type": "Raw Spread ",
      "Account Size": 3521,
      "Last Month Profit": 3168.9,
      "Last Month Gain": 90,
      "Draw Down": 8,
    },
    {
      "Client Name": "Bianca Norman",
      "Account Type": "ECN Social Trading",
      "Account Size": 37443,
      "Last Month Profit": 23214.66,
      "Last Month Gain": 62,
      "Draw Down": 38,
    },
    {
      "Client Name": "Sama Kim",
      "Account Type": "Raw Spread ",
      "Account Size": 6419,
      "Last Month Profit": 1540.56,
      "Last Month Gain": 24,
      "Draw Down": 25,
    },
    {
      "Client Name": "Maurice Allain",
      "Account Type": "Raw Spread ",
      "Account Size": 7409,
      "Last Month Profit": 5334.4800000000005,
      "Last Month Gain": 72,
      "Draw Down": 44,
    },
    {
      "Client Name": "Trishna Sibal",
      "Account Type": "Raw Spread ",
      "Account Size": 5343,
      "Last Month Profit": 480.87,
      "Last Month Gain": 9,
      "Draw Down": 71,
    },
    {
      "Client Name": "Kaydee Juarez",
      "Account Type": "ECN Social Trading",
      "Account Size": 34852,
      "Last Month Profit": 12895.24,
      "Last Month Gain": 37,
      "Draw Down": 40,
    },
    {
      "Client Name": "Muhammad Rohail",
      "Account Type": "Raw Spread ",
      "Account Size": 8511,
      "Last Month Profit": 8085.45,
      "Last Month Gain": 95,
      "Draw Down": 45,
    },
    {
      "Client Name": "Воронцова Людмила",
      "Account Type": "ECN Social Trading",
      "Account Size": 41638,
      "Last Month Profit": 32477.64,
      "Last Month Gain": 78,
      "Draw Down": 40,
    },
    {
      "Client Name": "Amisha Lennon",
      "Account Type": "ECN Social Trading",
      "Account Size": 11460,
      "Last Month Profit": 2635.7999999999997,
      "Last Month Gain": 23,
      "Draw Down": 53,
    },
    {
      "Client Name": "Calum Houston",
      "Account Type": "ECN Social Trading",
      "Account Size": 14823,
      "Last Month Profit": 5484.509999999999,
      "Last Month Gain": 37,
      "Draw Down": 20,
    },
    {
      "Client Name": "Grégoire Lefebvre",
      "Account Type": "Raw Spread ",
      "Account Size": 3243,
      "Last Month Profit": 713.46,
      "Last Month Gain": 22,
      "Draw Down": 31,
    },
    {
      "Client Name": "Isobel Dalton",
      "Account Type": "ECN Social Trading",
      "Account Size": 44386,
      "Last Month Profit": 3107.02,
      "Last Month Gain": 7,
      "Draw Down": 16,
    },
    {
      "Client Name": "Frédéric Vallet",
      "Account Type": "Raw Spread ",
      "Account Size": 4533,
      "Last Month Profit": 3218.43,
      "Last Month Gain": 71,
      "Draw Down": 49,
    },
    {
      "Client Name": "Celine Hooper",
      "Account Type": "ECN Social Trading",
      "Account Size": 61124,
      "Last Month Profit": 52566.64,
      "Last Month Gain": 86,
      "Draw Down": 41,
    },
    {
      "Client Name": "Luqman Zia",
      "Account Type": "Raw Spread ",
      "Account Size": 7091,
      "Last Month Profit": 9643.76,
      "Last Month Gain": 136,
      "Draw Down": 60,
    },
    {
      "Client Name": "Inika Narayan",
      "Account Type": "ECN Social Trading",
      "Account Size": 30243,
      "Last Month Profit": 21472.53,
      "Last Month Gain": 71,
      "Draw Down": 32,
    },
    {
      "Client Name": "Yasmin Friedman",
      "Account Type": "Raw Spread ",
      "Account Size": 6739,
      "Last Month Profit": 5795.54,
      "Last Month Gain": 86,
      "Draw Down": 24,
    },
    {
      "Client Name": "Софрон Владиленович",
      "Account Type": "Raw Spread ",
      "Account Size": 5980,
      "Last Month Profit": 777.4,
      "Last Month Gain": 13,
      "Draw Down": 56,
    },
    {
      "Client Name": "Rebekka Jeffery",
      "Account Type": "ECN Social Trading",
      "Account Size": 20727,
      "Last Month Profit": 1036.3500000000001,
      "Last Month Gain": 5,
      "Draw Down": 26,
    },
    {
      "Client Name": "Arham Peck",
      "Account Type": "ECN Social Trading",
      "Account Size": 30128,
      "Last Month Profit": 13858.88,
      "Last Month Gain": 46,
      "Draw Down": 74,
    },
    {
      "Client Name": "Muhammad Ali",
      "Account Type": "Raw Spread ",
      "Account Size": 6453,
      "Last Month Profit": 4323.51,
      "Last Month Gain": 67,
      "Draw Down": 44,
    },
    {
      "Client Name": "Rocco Goodwin",
      "Account Type": "ECN Social Trading",
      "Account Size": 14932,
      "Last Month Profit": 5823.48,
      "Last Month Gain": 39,
      "Draw Down": 65,
    },
    {
      "Client Name": "Andre Swanson",
      "Account Type": "ECN Social Trading",
      "Account Size": 51009,
      "Last Month Profit": 22443.96,
      "Last Month Gain": 44,
      "Draw Down": 40,
    },
    {
      "Client Name": "Louis Bodin",
      "Account Type": "ECN Social Trading",
      "Account Size": 30128,
      "Last Month Profit": 1506.3999999999999,
      "Last Month Gain": 5,
      "Draw Down": 24,
    },
    {
      "Client Name": "Nabiha James",
      "Account Type": "Raw Spread ",
      "Account Size": 7462,
      "Last Month Profit": 4253.34,
      "Last Month Gain": 57,
      "Draw Down": 50,
    },
    {
      "Client Name": "Charles Renard",
      "Account Type": "ECN Social Trading",
      "Account Size": 13911,
      "Last Month Profit": 834.6600000000001,
      "Last Month Gain": 6,
      "Draw Down": 9,
    },
    {
      "Client Name": "Saleem Awan",
      "Account Type": "Raw Spread ",
      "Account Size": 5552,
      "Last Month Profit": 1276.96,
      "Last Month Gain": 23,
      "Draw Down": 65,
    },
    {
      "Client Name": "Monica Boyd",
      "Account Type": "ECN Social Trading",
      "Account Size": 18376,
      "Last Month Profit": 13046.96,
      "Last Month Gain": 71,
      "Draw Down": 18,
    },
    {
      "Client Name": "Клавдия Никифоровна",
      "Account Type": "ECN Social Trading",
      "Account Size": 26848,
      "Last Month Profit": 15303.36,
      "Last Month Gain": 57,
      "Draw Down": 38,
    },
    {
      "Client Name": "Malik Mudasir",
      "Account Type": "Raw Spread ",
      "Account Size": 4515,
      "Last Month Profit": 2979.9,
      "Last Month Gain": 66,
      "Draw Down": 39,
    },
    {
      "Client Name": "Océane Grondin",
      "Account Type": "ECN Social Trading",
      "Account Size": 18816,
      "Last Month Profit": 6585.599999999999,
      "Last Month Gain": 35,
      "Draw Down": 44,
    },
    {
      "Client Name": "Bill Owens",
      "Account Type": "ECN Social Trading",
      "Account Size": 80668,
      "Last Month Profit": 1613.36,
      "Last Month Gain": 2,
      "Draw Down": 65,
    },
  ];
  const renderTable = () => {
    const getRandom = (arr, n) => {
      let result = new Array(n),
        len = arr.length,
        taken = new Array(len);
      if (n > len)
        throw new RangeError("getRandom: more elements taken than available");
      while (n--) {
        const x = Math.floor(Math.random() * len);
        result[n] = arr[x in taken ? taken[x] : x];
        taken[x] = --len in taken ? taken[len] : len;
      }
      result.sort((a, b) => {
        return b["Last Month Profit"] - a["Last Month Profit"];
      });
      return result;
    };

    const randomArray = getRandom(array, 7);
    const table = document.querySelector("#dataTable tbody");

    table.innerHTML = "";
    for (let i = 0; i < randomArray.length; i++) {
      const newbody = `<tr class = "tableRow" >
        <td>${randomArray[i]["Client Name"]}</td>
        <td>${randomArray[i]["Account Type"]}</td>
        <td>$${randomArray[i]["Account Size"]}</td>
        <td>$${randomArray[i]["Last Month Profit"]
          .toFixed(2)
          .toString()
          .replace(/\B(?=(\d{3})+(?!\d))/g, ",")}</td>
        <td>${randomArray[i]["Last Month Gain"]}%</td>
        <td>${randomArray[i]["Draw Down"]}</td>
      </tr>`;
      table.insertAdjacentHTML("beforeend", newbody);
    }
  };
  setInterval(renderTable, 5000);

});

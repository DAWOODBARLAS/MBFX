$(document).ready(function () {

     

  // if($(window).width() >= 768){

  //     $('.nav-item.dropdown').on('mouseover',function(){

  //        $('.nav-item.dropdown').removeClass('show')

  //        $('.nav-item.dropdown .dropdown-menu').removeClass('show') 

  //        $(this).addClass('show')

  //        $(this).find('.dropdown-menu').addClass('show')

  //     })

      

  //     $('.nav-item.dropdown').on('mouseleave',function(){

  //        $('.nav-item.dropdown').removeClass('show')

  //        $('.nav-item.dropdown .dropdown-menu').removeClass('show') 

  //     })

  // }

  function loadImages(){

    	let lazyImages = document.querySelectorAll('.lazyImage')

    	lazyImages.forEach((lazyImage)=>{

    		if(lazyImage.getAttribute('data-src')!=null){

    			lazyImage.src = lazyImage.getAttribute('data-src')

    		}

    		

    	})

    }

  setTimeout(loadImages,1000)    

  $(".lazy").Lazy();

  AOS.init();

  $("[data-target]").click(function () {

    const target = $(this).attr("data-target");

    if ($(target).length > 0) {

      $("html, body").animate(

        {

          scrollTop: $(target).offset().top,

        },

        400

      );

    }

  });



  $(".calculator .card").on("click", function () {

    $(".calculator .card").removeClass("active");

    $(this).addClass("active");

    $(".calculator .collapse").removeClass("show");

  });



  function activeAwards() {

    const target = $(".filterBtns button.active").attr("data-target");

    // $(".filterItems .item").slideUp("fast");

    $(".filterItems .item").css({ transform: "scale(0)" });

    setTimeout(() => {

      $(".filterItems .item").fadeOut("fast");

      $(".filterItems").find(`.${target}`).fadeIn("fast");

    }, 100);

    setTimeout(() => {

      $(".filterItems").find(`.${target}`).css({ transform: "scale(1)" });

    }, 300);

  }

  activeAwards();

  $(".filterBtns button").click(function () {

    $(".filterBtns button").removeClass("active");

    $(this).addClass("active");

    activeAwards();

  });

  // const awardsCarousel = (selector) => {

  //   $(selector).owlCarousel({

  //     loop: true,

  //     margin: 10,

  //     nav: false,

  //     dots: true,

  //     autoplay: true,

  //     autoplayTimeout: 2000,

  //     autoplayHoverPause: true,

  //     lazyLoad: true,

  //     responsive: {

  //       0: {

  //         items: 2,

  //         nav: false,

  //         dots: true,

  //         margin: 15,

  //       },

  //       600: {

  //         items: 3,

  //         nav: false,

  //       },

  //       1000: {

  //         items: 6,

  //         nav: false,

  //         margin: 40,

  //       },

  //     },

  //   });

  // };



  // awardsCarousel(".payment_logos_2016");

  // awardsCarousel(".payment_logos_2017");

  // awardsCarousel(".payment_logos_2018");

  // awardsCarousel(".payment_logos_2019");

  // awardsCarousel(".payment_logos_2020");

  // awardsCarousel(".payment_logos_2021");

  // awardsCarousel(".payment_logos_2022");



  function myArrow(size = "26") {

    const left = `<svg xmlns="http://www.w3.org/2000/svg" style="width:${size}px;height:${size}"  height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">

      <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>

    </svg>`;



    const right = `<svg xmlns="http://www.w3.org/2000/svg" style="width:${size}px;height:${size}"  fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">

      <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>

    </svg>`;



    $(".owl-prev").html(left);

    $(".owl-next").html(right);

  }



  myArrow();



  function formValidator(form) {

    var countEmplyEle = 0;

    function checker(ele) {

      if (ele.val() == "") {

        ele.addClass("input-danger");

        ++countEmplyEle;

      } else {

        ele.removeClass("input-danger");

      }



      if (ele.attr("type") == "email") {

        if (validateEmail(ele.val())) {

          ele.removeClass("input-danger");

        } else {

          ele.addClass("input-danger");

        }

      }

    }

    $(form)

      .find(".require")

      .keyup(function () {

        checker($(this));

      });



    $(form)

      .find(".require")

      .each(function () {

        checker($(this));

      });

    return countEmplyEle;

  }

  function validateEmail(email) {

    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    return re.test(String(email).toLowerCase());

  }



  //

  const inputLen = $("form").find('.form-control').length-1

  $(`form .form-control:eq(${inputLen})`).parent().append("<div class='output mt-3 text-success'></div>")

  $("[type=submit]").click(function (event) {

    event.preventDefault();

    const submitButton = $(this);

    const formEle = $(this).closest("form");

    const output = formEle.find('.output')

    console.log(formValidator(formEle))

    if (formValidator(formEle) == 0) {

      var form = formEle[0];

      var data = new FormData(form);

      data.append("domain", "MBFX");

      // disabled the submit button

      submitButton.prop("disabled", true);

      submitButton.text("Sending..");

      $.ajax({

        type: "POST",

        enctype: "multipart/form-data",

        url: "mailer/email.php",

        data: data,

        processData: false,

        contentType: false,

        cache: false,

        timeout: 800000,



        success: function (data) {

          if (data == "email_sent") {

            output.text("Email Sent Successfuly");

          } else {

            output.text(data);

          }



          console.log("SUCCESS : ", data);

          submitButton.prop("disabled", false);

          submitButton.text("Submit");

          

        },

        error: function (e) {

          $("#output").text(e.responseText);

          submitButton.prop("disabled", false);

          submitButton.text("Submit");

        },

      });

    }

  });

});


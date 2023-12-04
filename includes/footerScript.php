<?php if ($development == true) { ?>
  <script src="./temp/jquery-3.6.0.min.js"></script>
  <script>
    setTimeout(function () { $('#loader').fadeOut() }, 3000)
  </script>
  <script src="./temp/jquery.lazy.min.js"></script>
  <script src="./temp/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
  <script src="./temp/owl.carousel.min.js"></script>
<?php } else { ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>
    setTimeout(function () { $('#loader').fadeOut() }, 3000)
  </script>
  <script script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.11/jquery.lazy.min.js"
    integrity="sha512-eviLb3jW7+OaVLz5N3B5F0hpluwkLb8wTXHOTy0CyNaZM5IlShxX1nEbODak/C0k9UdsrWjqIBKOFY0ELCCArw=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php } ?>


<?php
if ($page == 'home') {
  echo '<script src="./js/particles.min.js"></script>';
}
if ($page == 'trading') {
  echo '<script src="./js/trading.js"></script>';
}

?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="./js/site.js" defer></script>

<?php
if ($page != 'share_header') {
  ?>
  <script type="text/javascript">
      // disbale these 2 plugins ,requested by ayesha date jan 2023
      // $(document).ready(function(){
      //     setTimeout(function(){
      //         //messenger
      //         (function(d, src, c) { var t=d.scripts[d.scripts.length - 1],s=d.createElement('script');s.id='la_x2s6df8d';s.async=true;s.src=src;s.onload=s.onreadystatechange=function(){var rs=this.readyState;if(rs&&(rs!='complete')&&(rs!='loaded')){return;}c(this);};t.parentElement.insertBefore(s,t.nextSibling);})(document,
      //         'https://mbfx.ladesk.com/scripts/track.js',
      //         function(e){ LiveAgent.createButton('s4dgudg1', e); });
      //         //call plugin
      //         (function(d, src, c) { var t=d.scripts[d.scripts.length - 1],s=d.createElement('script');s.id='la_x2s6df8d';s.async=true;s.src=src;s.onload=s.onreadystatechange=function(){var rs=this.readyState;if(rs&&(rs!='complete')&&(rs!='loaded')){return;}c(this);};t.parentElement.insertBefore(s,t.nextSibling);})(document, 'https://mbfx.ladesk.com/scripts/track.js', function(e){ LiveAgent.createButton('uevlx1a0', e); });
      //     },3000)
      // })
  </script>
  
  <!--Disable code at 9 march 2023, asked by ayesha-->
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    // var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    // (function () {
    //   var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
    //   s1.async = true;
    //   s1.src = 'https://embed.tawk.to/62d840bc37898912e95ecd0a/1g8ebpojc';
    //   s1.charset = 'UTF-8';
    //   s1.setAttribute('crossorigin', '*');
    //   s0.parentNode.insertBefore(s1, s0);
    //   const element = document.getElementById('liveChat');
    //   console.log(element)
    // })();
  </script>
  <!--End of Tawk.to Script-->
  
  <!--Code placed 9 march 2023, asked by ayesha-->
  <script type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "5fda86ce962e28bd09ce207c79b1496ccce7ca08f00cfcf756d10d6d973400759b3a1d3d90618aa5cbf1a11a2cb1115d", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.eu/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script>
  
  <style>
    .wa {
      position: fixed;
      animation: zoom-in-zoom-out 1s ease infinite;
      right: 33px;
      bottom: 94px;
      display: none;
      height: 45px;
      width: 45px;
      border-radius: 100px;
      z-index: 199999999;
    }
    .wa:hover {
      animation: none;
    }
    .wa img {
      width: 100%;
      height: 100%;
    }

    @keyframes zoom-in-zoom-out {
      0% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.3);
      }

      60% {
        transform: scale(1);
      }

      70% {
        transform: scale(1);
      }

      80% {
        transform: scale(1);
      }

      90% {
        transform: scale(1);
      }

      100% {
        transform: scale(1);
      }
    }
  </style>

  <a href="https://wa.me/message/H5UZC7FCDSSOD1" class="wa" target="_new">
    <img src="./assets/footer/WhatsApp.svg.png">
  </a>
  <?php
} ?>
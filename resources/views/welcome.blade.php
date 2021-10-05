<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PIVS - Pusat Informasi Vaksinasi Singkawang</title>

    <!-- Primary Meta Tags -->
<meta name="title" content="Play - Free Open Source HTML Bootstrap Template by UIdeck">
<meta name="description" content="Play - Free Open Source HTML Bootstrap Template by UIdeck Team">

    <!--====== Favicon Icon ======-->
    <link
      rel="shortcut icon"
      href="{{asset('assets/images/favicon.svg')}}"
      type="image/svg')}}"
    />

    <!-- ===== All CSS files ===== -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/lineicons.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/ud-styles.css')}}" />
  </head>
  <body>
    <!-- ====== Header Start ====== -->
    @section('Header')
        @include('header')
    @show
    <!-- ====== Header End ====== -->

    <!-- ====== Hero Start ====== -->
    @section('Hero')
        @include('hero')
    @show
    <!-- ====== Hero End ====== -->

    <!-- ====== Features Start ====== -->
    @section('Features')
        @include('features')
    @show
    <!-- ====== Features End ====== -->

    <!-- ====== About Start ====== -->
    @section('About')
        @include('about')
    @show
    <!-- ====== About End ====== -->

    <!-- ====== Pricing Start ====== -->
    @section('Pricing')
        @include('pricing')
    @show
    <!-- ====== Pricing End ====== -->

    <!-- ====== Testimonials Start ====== -->
    <!-- @section('Testimonials')
        @include('testimonials')
    @show -->
    <!-- ====== Testimonials End ====== -->

    <!-- ====== Team Start ====== -->
    @section('Team')
        @include('team')
    @show
    <!-- ====== Team End ====== -->

    <!-- ====== Contact Start ====== -->
    <!-- @section('Contact')
        @include('contact')
    @show -->
    <!-- ====== Contact End ====== -->

    <!-- ====== FAQ Start ====== -->
    @section('FAQ')
        @include('faq')
    @show
    <!-- ====== FAQ End ====== -->

    <!-- ====== Footer Start ====== -->
    @section('Footer')
        @include('footer')
    @show
    <!-- ====== Footer End ====== -->

    <!-- ====== Back To Top Start ====== -->
    <a href="javascript:void(0)" class="back-to-top">
      <i class="lni lni-chevron-up"> </i>
    </a>
    <!-- ====== Back To Top End ====== -->

    <!-- ====== All Javascript Files ====== -->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script type='text/javascript'> var divElement = document.getElementById('viz1633444245207'); 
    var vizElement = divElement.getElementsByTagName('object')[0];                    
    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='1000px';vizElement.style.height='1427px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='1000px';vizElement.style.height='1427px';} 
    else { vizElement.style.width='100%';vizElement.style.height='2327px';}                     
    var scriptElement = document.createElement('script');                    
    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    
    vizElement.parentNode.insertBefore(scriptElement, vizElement);                
    </script>
    <script>
      // ==== for menu scroll
      const pageLink = document.querySelectorAll(".ud-menu-scroll");

      pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
          e.preventDefault();
          document.querySelector(elem.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
            offsetTop: 1 - 60,
          });
        });
      });

      // section menu active
      function onScroll(event) {
        const sections = document.querySelectorAll(".ud-menu-scroll");
        const scrollPos =
          window.pageYOffset ||
          document.documentElement.scrollTop ||
          document.body.scrollTop;

        for (let i = 0; i < sections.length; i++) {
          const currLink = sections[i];
          const val = currLink.getAttribute("href");
          const refElement = document.querySelector(val);
          const scrollTopMinus = scrollPos + 73;
          if (
            refElement.offsetTop <= scrollTopMinus &&
            refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
          ) {
            document
              .querySelector(".ud-menu-scroll")
              .classList.remove("active");
            currLink.classList.add("active");
          } else {
            currLink.classList.remove("active");
          }
        }
      }

      window.document.addEventListener("scroll", onScroll);
    </script>
  </body>
</html>

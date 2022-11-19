<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preyantechnosys.com/html/famado/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Nov 2022 04:58:09 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template">
<meta name="description" content="Famado Baby and Older Care Taker HTML Template">
<meta name=”keywords” content="Famado-Baby and Old Care Html template,Famado-Baby and old Care Taker WordPress Theme, themes & template, html5 template, WordPress theme, unlimited colors available, ui/ux,ui/ux design, best html template, html template, html, JavaScript, best css theme,css3, elementor theme, latest premium themes 2023, latest premium templates 2023, preyan technosys Pvt.Ltd,cymol themes, themetech mount,multi-theme, website theme and template, woocommerce, bootstrap template, web templates, responsive theme,services,web design and development, business, company,oldage,childcare,petcare service, charity business, landing pages, landscapers, latest ui/ux design, seo friendly, landing pages, charity maintenance, pet care clinic, babysitting services, childcare centre, day care prices, childcare facilities, baby sitting, professional babysitter, babysitting near me ,charity business, pet care, pet shop, pet accessories, home care, old age house template">  
<meta name="author" content="https://www.cymolthemes.com/">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
  @yield('title')
</title>
  @include('frontend.layouts.header') 
</head>
<body>

    <!-- page start -->
    <div class="page">
        <!-- header start -->
         @include('frontend.layouts.nav')
        <!-- header end -->


        @include('frontend.layouts.slidder')
        
   
        <!-- site-main start -->
        <div class="site-main">

         @yield('content')


        </div><!-- site-main end-->

        <!-- footer start -->
         @include('frontend.layouts.footer')
        <!-- footer end -->

        <!-- back-to-top start -->
        <a id="totop" href="#top">
            <i class="icon-angle-up"></i>
        </a>
        <!-- back-to-top end -->

    </div><!-- page end -->


    <!-- Javascript -->
    @include('frontend.layouts.script')
   
    <!-- Javascript end-->

</body>

<!-- Mirrored from preyantechnosys.com/html/famado/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Nov 2022 04:59:55 GMT -->
</html>



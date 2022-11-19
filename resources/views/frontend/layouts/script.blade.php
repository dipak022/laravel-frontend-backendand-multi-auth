
<script src="{{asset('frontend/')}}/js/jquery-3.6.0.min.js"></script>
<script src="{{asset('frontend/')}}/js/jquery-migrate-3.3.2.min.js"></script>
<script src="{{asset('frontend/')}}/js/bootstrap.bundle.js"></script> 
<script src="{{asset('frontend/')}}/js/aos.js"></script>
<script src="{{asset('frontend/')}}/js/jquery-validate.js"></script> 
<script src="{{asset('frontend/')}}/js/jquery.prettyPhoto.js"></script>
<script src="{{asset('frontend/')}}/js/slick.min.js"></script>
<script src="{{asset('frontend/')}}/js/jquery-waypoints.js"></script>    
<script src="{{asset('frontend/')}}/js/numinate.min.js"></script>
<script src="{{asset('frontend/')}}/js/imagesloaded.min.js"></script>
<script src="{{asset('frontend/')}}/js/jquery-isotope.js"></script>
<script src="{{asset('frontend/')}}/js/circle-progress.min.js"></script>
<script src="{{asset('frontend/')}}/js/main.js"></script>

<!-- Revolution Slider -->    
<script src="{{asset('frontend/')}}/revolution/js/rbtools.min.js"></script>
<script src="{{asset('frontend/')}}/revolution/js/rs6.min.js"></script>
<script src="{{asset('frontend/')}}/revolution/js/slider.js"></script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <script>
  @if(Session::has('message'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
    }
  @endif
</script>









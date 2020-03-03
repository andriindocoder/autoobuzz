
<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="{{ asset('frontend/assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/vendors.min.js') }}"></script>

<!-- include custom script for site  -->
<script src="{{ asset('frontend/assets/js/script.js') }}"></script>



<!-- bxSlider Javascript file -->
<script src="{{ asset('frontend/assets/plugins/bxslider/jquery.bxslider.min.js') }}"></script>
<script>
    $('.bxslider').bxSlider({
        pagerCustom: '#bx-pager',
        adaptiveHeight: true
    });
</script>
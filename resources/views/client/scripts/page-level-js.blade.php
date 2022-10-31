  <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
  <script src="{{ asset('metronic/plugins/fancybox/source/jquery.fancybox.pack.js') }}" type="text/javascript"></script><!-- pop up -->
  <script src="{{ asset('metronic/plugins/owl.carousel/owl.carousel.min.js') }}" type="text/javascript"></script><!-- slider for products -->

  <script src="{{ asset('metronic/corporate/scripts/layout.js') }}" type="text/javascript"></script>
  <script src="{{ asset('metronic/pages/scripts/bs-carousel.js') }}" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function() {
        Layout.init();    
        Layout.initOWL();
        Layout.initTwitter();
        //Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
        //Layout.initNavScrolling(); 
    });
  </script>
  <!-- END PAGE LEVEL JAVASCRIPTS -->
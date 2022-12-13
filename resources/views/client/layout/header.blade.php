 <!-- BEGIN HEADER -->
 <div class="header">
  <div class="container">
    <a class="site-logo" href="/">
      <img src="../klassy/images/CasalcoLogo-7.png" width="120">
    </a>

    <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>
    @if(!Request()->is('membership-application-form') && !Request()->is('express-loan-application') && !Request()->is('lad-loan-application') && !Request()->is('special-loan-application') && !Request()->is('regular-loan-application'))
      @include('client.layout.navigation')
    @endif
  </div>
</div>
<!-- Header END -->


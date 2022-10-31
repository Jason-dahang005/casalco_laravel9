<!-- BEGIN SLIDER -->
<div class="page-slider margin-bottom-40">
  <div id="carousel-example-generic" class="carousel slide carousel-slider">
      <!-- Indicators -->
      <ol class="carousel-indicators carousel-indicators-frontend">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      @include('client.home.slide-wrapper')

      <!-- Controls -->
      <a class="left carousel-control carousel-control-shop carousel-control-frontend" href="#carousel-example-generic" role="button" data-slide="prev">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
      </a>
      <a class="right carousel-control carousel-control-shop carousel-control-frontend" href="#carousel-example-generic" role="button" data-slide="next">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
      </a>
  </div>
</div>
<!-- END SLIDER -->
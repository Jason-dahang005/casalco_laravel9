<!-- BEGIN NAVIGATION -->
<div class="header-navigation pull-right font-transform-inherit">
  <ul>
    <li class="{{ (request()->is('/')) ? 'active' : '' }}">
      <a href="/">
        Home
      </a>
    </li>
    <li class="{{ (request()->is('about-us')) ? 'active' : '' }}">
      <a href="about-us">
        About Us
      </a>
    </li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">Loan</a>
      <ul class="dropdown-menu">
        <li><a href="">(LAD) Loan Against Deposit</a></li>
        <li><a href="/regular-loans-information">Regular Loan</a></li>
        <li><a href="portfolio-3.html">Express Loan</a></li>
        <li><a href="portfolio-2.html">Special Loan</a></li>
      </ul>
    </li>

    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">Services</a>
      <ul class="dropdown-menu">
        <li><a href="portfolio-4.html">Regular & Special Loan Application Form</a></li>
        <li><a href="/express-loan-application-form" target="_blank">LAD & Express Loan Application Form</a></li>
      </ul>
    </li>




    {{-- <li><a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes&amp;utm_source=download&amp;utm_medium=banner&amp;utm_campaign=metronic_frontend_freebie" target="_blank">Admin theme</a></li> --}}

    <li class="{{ (request()->is('membership-information')) ? 'active' : '' }}">
      <a href="membership-information">Membership</a>
    </li>

    <!-- BEGIN TOP SEARCH -->
    {{-- <li class="menu-search">
      <span class="sep"></span>
      <i class="fa fa-search search-btn"></i>
      <div class="search-box">
        <form action="#">
          <div class="input-group">
            <input type="text" placeholder="Search" class="form-control">
            <span class="input-group-btn">
              <button class="btn btn-primary" type="submit">Search</button>
            </span>
          </div>
        </form>
      </div>
    </li> --}}
    <!-- END TOP SEARCH -->
  </ul>
</div>
<!-- END NAVIGATION -->

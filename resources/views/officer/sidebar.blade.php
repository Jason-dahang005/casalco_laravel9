<nav id="sidebar">
  <div class="sidebar_blog_1">
    <div class="sidebar-header">
      <div class="logo_section">
        <a href="/officer/officer/dashboard"><img class="logo_icon img-responsive" src="../pluto/images/logo/logo_icon.png" alt="#" /></a>
      </div>
    </div>
    <div class="sidebar_user_info">
      <div class="icon_setting"></div>
      <div class="user_profle_side">
        <div class="user_img"><img class="img-responsive" src="../pluto/images/layout_img/user1.png" alt="#" /></div>
        <div class="user_info">
        <h6>{{ Auth::user()->username }}</h6>
        <p><span class="online_animation"></span> Online</p>
        </div>
      </div>
    </div>
  </div>
  <div class="sidebar_blog_2">
    <ul class="list-unstyled components">
      <li class="">
        <a href="/officer/dashboard"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
      </li>
      <li>
        <a href="/products"><i class="fa fa-list red_color"></i><span>Product Loans</span></a>
      </li>
      <li>
        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-folder-open orange_color"></i> <span>Applications</span></a>
        <ul class="collapse list-unstyled" id="element">
          <li><a href="/officer/membership-application">> <span>Membership Applications</span></a></li>
          <li><a href="/officer/loan">> <span>Loan Applications</span></a></li>
        </ul>
      </li>

      <li>
        <a href="#element1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-list-alt purple_color"></i> <span>Reports</span></a>
        <ul class="collapse list-unstyled" id="element1">
          <li><a href="/officer/pre-approved-membership"><span>Pre-approve Membership</span></a></li>
          <li><a href="/officer/pre-approved-loans"><span>Pre-approve Loan Applications</span></a></li>
          <li><a href="declined-loan-applications"><span>Declined Loan Applications</span></a></li>
        </ul>
      </li>
    </ul>
  </div>
 </nav>

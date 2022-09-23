@extends('client.index')
@section('titlel', 'Home')
@section('client_content')

<!-- ***** Main Banner Area Start ***** -->
<div id="top">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-4">
						<div class="left-content">
							<div class="inner-content">
								<!-- <h4>CASALCO</h4>
								<h6>THE BEST EXPERIENCE</h6> -->
                                <img src="../klassy/images/Logo-4.png" alt="">
								<div class="main-white-button scroll-to-section">
									<a href="/membership-information">Become A Member</a>
								</div>
							</div>
						</div>
          </div>
          <div class="col-lg-8">
						<div class="main-banner header-text">
							<div class="Modern-Slider">
								<!-- Item -->
								<div class="item">
									<div class="img-fill">
										<video width="100%" controls muted autoplay loop> 
                                            <source src="../klassy/images/Casalco-video.mp4" type="video/mp4"> 
                                            
                                        </video> 
									</div>
								</div>
								<!-- // Item -->
                                <!-- Item -->
								<div class="item">
									<div class="img-fill">
										<img src="../klassy/images/Casalco-1.jpg" alt="">
									</div>
								</div>
								<!-- // Item -->
								<!-- Item -->
								<div class="item">
									<div class="img-fill">
										<img src="../klassy/images/Casalco-4.jpg" alt="">
									</div>
								</div>
								<!-- // Item -->
								<!-- Item -->
								<div class="item">
									<div class="img-fill">
										<img src="../klassy/images/Casalco-3.jpg" alt="">
									</div>
								</div>
								<!-- // Item -->
								<!-- Item -->
								<!-- <div class="item">
									<div class="img-fill">
										<img src="../klassy/images/Casalco-5.jpg" alt="">
									</div>
								</div> -->
								<!-- // Item -->
								<!-- Item -->
								<div class="item">
									<div class="img-fill">
										<img src="../klassy/images/Casalco-6.jpg" alt="">
									</div>
								</div>
								<!-- // Item -->
								<!-- Item -->
								<div class="item">
									<div class="img-fill">
										<img src="../klassy/images/Casalco-7.jpg" alt="">
									</div>
								</div>
								<!-- // Item -->
							</div>
						</div>
          </div>
      </div>
  </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Menu Area Starts ***** -->
{{-- <section class="section" id="menu">
  <div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="section-heading">
					<h6>Our Menu</h6>
					<h2>Our selection of cakes with quality taste</h2>
				</div>
			</div>
		</div>
  </div>
  <div class="menu-item-carousel">
		<div class="col-lg-12">
			<div class="owl-menu-item owl-carousel">
				<div class="item">
				<div class='card card1'>
					<div class="price"><h6>$14</h6></div>
					<div class='info'>
						<h1 class='title'>Chocolate Cake</h1>
						<p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
						<div class="main-text-button">
							<div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
  </div>
</section> --}}
<!-- ***** Menu Area Ends ***** -->

<!-- ***** Chefs Area Starts ***** -->
<section class="section" id="chefs">
  <div class="container">
		<div class="row">
			<div class="col-lg-4 offset-lg-4 text-center">
				<div class="section-heading">
					<h6>Our Loans</h6>
					<h2>We offer the best product for you</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="chef-item">
					<div class="thumb">
						<div class="overlay"></div>
						<img src="../klassy/images/RegularLoan.png" alt="Chef #1">
					</div>
					<div class="down-content">
						<h4>Regular Loans</h4>
						<span>Appliance Loan</span> <br>
                        <span>Commercial Loan</span> <br>
                        <span>Provident Loan</span> <br>
                        <span>Regular Loan</span>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="chef-item">
					<div class="thumb">
						<div class="overlay"></div>
						<!-- <ul class="social-icons">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li>
						</ul> -->
						<img src="../klassy/images/ExpressLoan.jpg" alt="Chef #2">
					</div>
					<div class="down-content">
						<h4>Express Loans</h4>
						<span>Grocery Loan</span> <br>
                        <span>Pettycash Loan</span> <br>
                        <span>Fasrcash Loan</span> <br>
                        <span>Insacash Loan</span>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="chef-item">
					<div class="thumb">
						<div class="overlay"></div>
						<!-- <ul class="social-icons">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google"></i></a></li>
						</ul> -->
						<img src="../klassy/images/RegularLoan.png" alt="Chef #3">
					</div>
					<div class="down-content">
						<h4>Special Loans</h4>
						<span>Midyear & Christmas Promo Loan</span> <br>
                        <span>Educational Loan</span> <br>
                        <span>Multi-Purpose Loan</span> <br>
                        <span>Privilege Loan</span>
					</div>
				</div>
			</div>
		</div>
  </div>
</section>
<!-- ***** Chefs Area Ends ***** -->



<!-- ***** Menu Area Starts ***** -->
 <section class="section" id="offers">
  <div class="container">
      <div class="row">
          <div class="col-lg-4 offset-lg-4 text-center">
              <div class="section-heading">
                  <h6>Our</h6>
                  <h2>Clients</h2>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-12">
              <div class="row" id="tabs">
                  <div class="col-lg-12">
                      <div class="heading-tabs">
                          <div class="row">
                              <div class="col-lg-6 offset-lg-3">
                                  <!-- <ul>
                                    <li><a href='#tabs-1'><img src="../klassy/images/CU-Logo.jpg" alt="">Breakfast</a></li>
                                    <li><a href='#tabs-2'><img src="../klassy/images/CUBEd.jpg" alt="">Lunch</a></a></li>
                                    <li><a href='#tabs-3'><img src="../klassy/images/cumc-logo-heading-svg.svg" alt="">Dinner</a></a></li>
                                  </ul> -->
                                    <section class="section" id="about">
                                        <div class="row">
                                            <div class="col-4">
                                                <img src="../klassy/images/CU-Logo.jpg" alt="">
                                            </div>
                                            <div class="col-4">
                                                <img src="../klassy/images/CUBEd.jpg" alt="">
                                            </div>
                                            <div class="col-4">
                                                <img src="../klassy/images/cumc-logo-heading-svg.svg" alt="">
                                            </div>
                                        </div>
                                    </section>
                              </div>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
    </section>
                  {{-- <div class="col-lg-12">
                      <section class='tabs-content'>
                          <article id='tabs-1'>
                              <div class="row">
                                  <div class="col-lg-6">
                                      <div class="row">
                                          <div class="left-list">
                                              <div class="col-lg-12">
                                                  <div class="tab-item">
                                                      <img src="../klassy/images/tab-item-01.png" alt="">
                                                      <h4>Fresh Chicken Salad</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                      <div class="price">
                                                          <h6>$10.50</h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-12">
                                                  <div class="tab-item">
                                                      <img src="../klassy/images/tab-item-02.png" alt="">
                                                      <h4>Orange Juice</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                      <div class="price">
                                                          <h6>$8.50</h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-12">
                                                  <div class="tab-item">
                                                      <img src="../klassy/images/tab-item-03.png" alt="">
                                                      <h4>Fruit Salad</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                      <div class="price">
                                                          <h6>$9.90</h6>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                      <div class="row">
                                          <div class="right-list">
                                              <div class="col-lg-12">
                                                  <div class="tab-item">
                                                      <img src="../klassy/images/tab-item-04.png" alt="">
                                                      <h4>Eggs Omelette</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                      <div class="price">
                                                          <h6>$6.50</h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-12">
                                                  <div class="tab-item">
                                                      <img src="../klassy/images/tab-item-05.png" alt="">
                                                      <h4>Dollma Pire</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                      <div class="price">
                                                          <h6>$5.00</h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-12">
                                                  <div class="tab-item">
                                                      <img src="../klassy/images/tab-item-06.png" alt="">
                                                      <h4>Omelette & Cheese</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                      <div class="price">
                                                          <h6>$4.10</h6>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </article>  
                          <article id='tabs-2'>
                              <div class="row">
                                  <div class="col-lg-6">
                                      <div class="row">
                                          <div class="left-list">
                                              <div class="col-lg-12">
                                                  <div class="tab-item">
                                                      <img src="../klassy/images/tab-item-04.png" alt="">
                                                      <h4>Eggs Omelette</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                      <div class="price">
                                                          <h6>$14</h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-12">
                                                  <div class="tab-item">
                                                      <img src="../klassy/images/tab-item-05.png" alt="">
                                                      <h4>Dollma Pire</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                      <div class="price">
                                                          <h6>$18</h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-12">
                                                  <div class="tab-item">
                                                      <img src="../klassy/images/tab-item-06.png" alt="">
                                                      <h4>Omelette & Cheese</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                      <div class="price">
                                                          <h6>$22</h6>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                      <div class="row">
                                          <div class="right-list">
                                              <div class="col-lg-12">
                                                  <div class="tab-item">
                                                      <img src="../klassy/images/tab-item-01.png" alt="">
                                                      <h4>Fresh Chicken Salad</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                      <div class="price">
                                                          <h6>$10</h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-12">
                                                  <div class="tab-item">
                                                      <img src="../klassy/images/tab-item-02.png" alt="">
                                                      <h4>Orange Juice</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                      <div class="price">
                                                          <h6>$20</h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-12">
                                                  <div class="tab-item">
                                                      <img src="../klassy/images/tab-item-03.png" alt="">
                                                      <h4>Fruit Salad</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                      <div class="price">
                                                          <h6>$30</h6>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </article>  
                          <article id='tabs-3'>
                              <div class="row">
                                  <div class="col-lg-6">
                                      <div class="row">
                                          <div class="left-list">
                                              <div class="col-lg-12">
                                                  <div class="tab-item">
                                                      <img src="../klassy/images/tab-item-05.png" alt="">
                                                      <h4>Eggs Omelette</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                      <div class="price">
                                                          <h6>$14</h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-12">
                                                  <div class="tab-item">
                                                      <img src="../klassy/images/tab-item-03.png" alt="">
                                                      <h4>Orange Juice</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                      <div class="price">
                                                          <h6>$18</h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-12">
                                                  <div class="tab-item">
                                                      <img src="../klassy/images/tab-item-02.png" alt="">
                                                      <h4>Fruit Salad</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                      <div class="price">
                                                          <h6>$10</h6>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                      <div class="row">
                                          <div class="right-list">
                                              <div class="col-lg-12">
                                                  <div class="tab-item">
                                                      <img src="../klassy/images/tab-item-06.png" alt="">
                                                      <h4>Fresh Chicken Salad</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                      <div class="price">
                                                          <h6>$8.50</h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-12">
                                                  <div class="tab-item">
                                                      <img src="../klassy/images/tab-item-01.png" alt="">
                                                      <h4>Dollma Pire</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                      <div class="price">
                                                          <h6>$9</h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-12">
                                                  <div class="tab-item">
                                                      <img src="../klassy/images/tab-item-04.png" alt="">
                                                      <h4>Omelette & Cheese</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                      <div class="price">
                                                          <h6>$11</h6>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </article>   
                      </section>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section> --}}
<!-- ***** Chefs Area Ends ***** --> 

@endsection
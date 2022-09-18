@extends('client.index')
@section('titlel', 'Membership Information')
@section('client_content')

<section class="section" id="chefs">
  <div class="container">
    <div class="row">
			<div class="col-lg-12 offset-lg-12 text-center">
				<div class="section-heading">
					<h6>Membership Information</h6>
				</div>
			</div>
		</div>
    <div class="row">
      <div class="col-lg-6 col-md-12 col-12">
        <div class="card px-5 py-3">
          <div class="section-heading">
            <h2 class="text-center">Membership Eligibility</h2>
            <div class="px-4">
              <p class="mb-2"><i class="fa fa-check text-danger border border-danger p-1"></i> Must be a Filipino citizen</p>
              <p class="mb-2"><i class="fa fa-check text-danger border border-danger p-1"></i> Must be 18 years old and above (legal age)</p>
              <p class="mb-2"><i class="fa fa-check text-danger border border-danger p-1"></i> Must be an employee of Capitol University, Capitol University Medical Center, Caitol University Basic Education
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-12">
        <div class="card px-5 py-3">
          <div class="section-heading">
            <h2 class="text-center">Membership Requirements</h2>
            <div class="px-4">
              <p class="mb-2"><i class="fa fa-check text-danger border border-danger p-1"></i> Must be a Filipino citizen</p>
              <p class="mb-2"><i class="fa fa-check text-danger border border-danger p-1"></i> Must be 18 years old and above (legal age)</p>
              <p class="mb-2"><i class="fa fa-check text-danger border border-danger p-1"></i> Must be an employee of Capitol University, Capitol University Medical Center, Caitol University Basic Education
              </p>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>

<section class="section" id="offers">
  <div class="container">
      <div class="row">
          <div class="col-lg-12 offset-lg-12 text-center">
              <div class="section-heading">
                  <h6>Complete the following steps</h6>
              </div>
              <div class="">
                <a href="/membership-application" id="membership-button">Become A Member</a>
              </div>
          </div>
      </div>
  </div>
</section>


@endsection
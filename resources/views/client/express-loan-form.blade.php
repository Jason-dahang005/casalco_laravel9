@extends('client.index')

@section('client_content')

<div class="contact-form">
		<form action="{{ url('/membership-application') }}" method="POST" enctype="multipart/form-data">
		
			<div class="row pt-5">
				<div class="col-lg-2">
						
				</div>

				<div class="col-lg-8 border">
					<div class="row">
					<div class="col-lg-12">
						<h4 class="pt-5 justify-content-center">Casalco Express Loan Pre-Application Form</h4>
						<hr class="line">
						<!-- <h5 class ="font-weight-bold">Personal Information</h5>
						<p class="font-weight-500">We require your personal information to ensure calidty of you memnbership application</p> -->
						<!-- <hr> -->
						
					</div>
				
				
				
					@csrf	
				<div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="name" type="text" id="name" placeholder="Name of Member">
						<span class="text-danger">@error('name')
								{{ $message }}
							@enderror </span>
					</fieldset>
				</div>
				
				<!-- <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="suffix" type="text" id="suffix" placeholder="Date">
					</fieldset>
				</div> -->
				
				<div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="acc_no" type="text" id="acc_no" placeholder="Account No.">
						<span class="text-danger">@error('acc_no')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-12">
					<fieldset>
						<input name="present_address" type="text" id="present_address" placeholder="Present Address">
						<span class="text-danger">@error('present_address')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-12">
					<fieldset>
						<input name="permanent_address" type="text" id="permanent_address" placeholder="Permanent Address">
						<span class="text-danger">@error('permanent_address')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<select name="loan_type" id="loan_type">
						<option value="" disabled selected >Types of Loan Applied</option>
						<option value="PLC">PCL</option>
						<option value="FLC">FLC</option>
						<option value="ICL">ICL</option>
						<option value="BLD">BLD</option>
						
					</select>
					<span class="text-danger">@error('loan_type')
						{{ $message }}
					@enderror </span>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="emp" type="text" id="emp" placeholder="Employer">
						<span class="text-danger">@error('emp')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="emp_address" type="text" id="emp_address" placeholder="Empoyer Address">
						<span class="text-danger">@error('emp_address')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="email" type="email" id="email" placeholder="Email Address">
						<span class="text-danger">@error('email')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="amount" type="text" id="amount" placeholder="Amount Applied">
						<span class="text-danger">@error('amount')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="mode_payment" type="text" id="mode_payment" placeholder="Mode of Payments">
						<span class="text-danger">@error('mode_payment')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				
                <div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="term_applied" type="text" id="term_applied" placeholder="Term Applied">
						<span class="text-danger">@error('term_applied')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="phone_no" type="text" id="phone_no" placeholder="Phone No.">
						<span class="text-danger">@error('phone_no')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="tin" type="text" id="tin" placeholder="TIN No.">
						<span class="text-danger">@error('tin')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="fb_acc" type="text" id="fb_acc" placeholder="FB account name">
						<span class="text-danger">@error('fb_acc')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                

					
					
				<div class="col-lg-12 pb-3">
					<fieldset>
						
					<button type="submit" id="form-submit" class="main-button-icon w-25 mt-5 ">Validate</button>
					<!-- <a class="btn btn-primary main-button-icon w-25 mt-5 " href="#" role="button">Validate</a> -->
					</fieldset>
				</div> 
			
				
				</div>
				
				</div>
			</div>
		</form>
</div>

@endsection
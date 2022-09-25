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
						<h4 class="pt-5 justify-content-center font-weight-bold">CAPITOL SAVING & LOANS COOPERATIVE, INC</h4>
                        <h6 class="pt-3 justify-content-center">Regular/Special Loan Form for CASALCO Members</h6>
						<hr class="line">
						<h5 class ="font-weight-bold">Personal Information</h5>
						    {{-- <p class="font-weight-500">We require your personal information to ensure calidty of you memnbership application</p>  --}}
						 <hr> 
						
					</div>
				
				
				
					@csrf	
				<div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Name of Member</label>
						<input name="Fname" type="text" id="Fname" placeholder="Provide Name">
						<span class="text-danger">@error('Fname')
								{{ $message }}
							@enderror </span>
					</fieldset>
				</div>
				
				
				<div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Age</label>
						<input name="occupation" type="text" id="occupation" placeholder="Provide Age">
						<span class="text-danger">@error('occupation')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Birthdate</label>
						<input name="occupation" type="date" id="occupation" placeholder="Birthdate">
						<span class="text-danger">@error('occupation')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Present Address</label>
						<input name="educ" type="text" id="educ" placeholder="Provide Address">
						<span class="text-danger">@error('educ')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                	
				<div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Permanent Address</label>
						<input name="occupation" type="text" id="occupation" placeholder="Provide Address">
						<span class="text-danger">@error('occupation')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Email</label>
						<input name="email" type="email" id="email" placeholder="Example@example.com">
						<span class="text-danger">@error('email')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">FB account Name</label>
						<input name="NumDependents" type="text" id="NumDependents" placeholder="FB account name">
						<span class="text-danger">@error('NumDependents')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Employer</label>
						<input name="occupation" type="text" id="occupation" placeholder="Employer">
						<span class="text-danger">@error('occupation')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Cellphone No.</label>
						<input name="occupation" type="text" id="occupation" placeholder="09xxxxxxxxx">
						<span class="text-danger">@error('occupation')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Legnth of Service</label>
						<input name="occupation" type="text" id="occupation" placeholder="Ex. 2 years">
						<span class="text-danger">@error('occupation')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">SSS number</label>
						<input name="occupation" type="text" id="occupation" placeholder="Enter your social security number; i.e 00-000000-0">
						<span class="text-danger">@error('occupation')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>

                <div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Employmen Status</label>
						<input name="occupation" type="text" id="occupation" placeholder="Employment Status">
						<span class="text-danger">@error('occupation')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">CASALCO ID no.</label>
						<input name="occupation" type="text" id="occupation" placeholder="ex. 20xx-xxxx">
						<span class="text-danger">@error('occupation')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Present Position</label>
						<input name="occupation" type="text" id="occupation" placeholder="Present Position">
						<span class="text-danger">@error('occupation')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">TIN number</label>
						<input name="occupation" type="text" id="occupation" placeholder="Enter your TIN; i.e. 000-000-000">
						<span class="text-danger">@error('occupation')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Name of Spouse</label>
						<input name="occupation" type="text" id="occupation" placeholder="Provide Name">
						<span class="text-danger">@error('occupation')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-4 col-sm-12">
                    <label for="First Name" class="form-label">Civil Status</label>
					<select name="civilStatus" id="civilStatus">
						<option value="" disabled selected >Seclect</option>
						<option value="Single">Single</option>
						<option value="Married">Married</option>
						<option value="Divorce">Divorced</option>
						<option value="Siparated">Siparated</option>
						<option value="Widowed">Widowed</option>
					</select>
					<span class="text-danger">@error('civilStatus')
						{{ $message }}
					@enderror </span>
				</div>
				
				<div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">Occupation</label>
						<input name="religion" type="text" id="religion" placeholder="Occupation">
						<span class="text-danger">@error('religion')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
                        <label for="First Name" class="form-label">No. of Children</label>
						<input name="contactNum" type="text" id="contactNum" placeholder="No. of Children">
						<span class="text-danger">@error('contactNum')
							{{ $message }}
						@enderror </span>
					</fieldset>
                    
				</div>
                <div class="col-lg-12">
                    <hr>
                </div>
                <div class="col-lg-12">
                    <h5 class ="font-weight-bold">Credit Assestment List</h5>
                    <hr>	
                </div>
                <div class="col-lg-6 col-sm-12">
                    <h5 class ="font-weight-bold text-danger pb-3">MONTHLY INCCOME</h5>
                    
                </div>
                <div class="col-lg-6 col-sm-12">
                    <h5 class ="font-weight-bold text-danger pb-3">EXPENSES/MONTH</h5>
                    
                </div>
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="NumDependents" type="text" id="NumDependents" placeholder="Borrower Income">
						<span class="text-danger">@error('NumDependents')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="NumDependents" type="text" id="NumDependents" placeholder="Food & Subsistence">
						<span class="text-danger">@error('NumDependents')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                
				<div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="NumDependents" type="text" id="NumDependents" placeholder="Other Income">
						<span class="text-danger">@error('NumDependents')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="NumDependents" type="text" id="NumDependents" placeholder="Education Bill">
						<span class="text-danger">@error('NumDependents')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="NumDependents" type="text" id="NumDependents" placeholder="Spouse Income">
						<span class="text-danger">@error('NumDependents')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="NumDependents" type="text" id="NumDependents" placeholder="Electric Bill">
						<span class="text-danger">@error('NumDependents')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="NumDependents" type="text" id="NumDependents" placeholder="Types of Loan Applied">
						<span class="text-danger">@error('NumDependents')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="NumDependents" type="text" id="NumDependents" placeholder="Water Bill">
						<span class="text-danger">@error('NumDependents')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="NumDependents" type="text" id="NumDependents" placeholder="Amount Applied">
						<span class="text-danger">@error('NumDependents')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="NumDependents" type="text" id="NumDependents" placeholder="Transportation">
						<span class="text-danger">@error('NumDependents')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="NumDependents" type="text" id="NumDependents" placeholder="Term Applied">
						<span class="text-danger">@error('NumDependents')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="NumDependents" type="text" id="NumDependents" placeholder="Allowances">
						<span class="text-danger">@error('NumDependents')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-6 col-sm-12">
					<select name="civilStatus" id="civilStatus">
						<option value="" disabled selected >Mode of Payment</option>
						<option value="Single">SALARY DED.</option>
						<option value="Married">PERSONAL</option>
						
					</select>
					<span class="text-danger">@error('civilStatus')
						{{ $message }}
					@enderror </span>
				</div>
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="NumDependents" type="text" id="NumDependents" placeholder="Others">
						<span class="text-danger">@error('NumDependents')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="NumDependents" type="text" id="NumDependents" placeholder="Co-maker History">
						<span class="text-danger">@error('NumDependents')
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
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
						<input name="Fname" type="text" id="Fname" placeholder="Name of Member">
						<span class="text-danger">@error('Fname')
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
						<input name="dob" type="text" id="dob" placeholder="Account No.">
						<span class="text-danger">@error('dob')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-12">
					<fieldset>
						<input name="Bplace" type="text" id="Bplace" placeholder="Present Address">
						<span class="text-danger">@error('Bplace')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-12">
					<fieldset>
						<input name="address" type="text" id="suffix" placeholder="Perrmanent Address">
						<span class="text-danger">@error('address')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<select name="unit" id="unit">
						<option value="" disabled selected >Types of Loan Applied</option>
						<option value="CU(main)">PCL</option>
						<option value="CUMC">FLC</option>
						<option value="CUBE">ICL</option>
						<option value="Support Zebra">BLD</option>
						
					</select>
					<span class="text-danger">@error('unit')
						{{ $message }}
					@enderror </span>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="occupation" type="text" id="occupation" placeholder="Employer">
						<span class="text-danger">@error('occupation')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="educ" type="text" id="educ" placeholder="Empoyer Address">
						<span class="text-danger">@error('educ')
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
						<input name="religion" type="text" id="religion" placeholder="Amount Applied">
						<span class="text-danger">@error('religion')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="contactNum" type="text" id="contactNum" placeholder="Mode of Payments">
						<span class="text-danger">@error('contactNum')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
				
                <div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="NumDependents" type="text" id="NumDependents" placeholder="Term Applied">
						<span class="text-danger">@error('NumDependents')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                
				<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="NumDependents" type="text" id="NumDependents" placeholder="Phone No.">
						<span class="text-danger">@error('NumDependents')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="NumDependents" type="text" id="NumDependents" placeholder="TIN No.">
						<span class="text-danger">@error('NumDependents')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                <div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="NumDependents" type="text" id="NumDependents" placeholder="FB account name">
						<span class="text-danger">@error('NumDependents')
							{{ $message }}
						@enderror </span>
					</fieldset>
				</div>
                
				<!-- <div class="col-lg-12">
						<h5 class ="font-weight-bold">Spouse Personal Information</h5>
						<hr>	
				</div>
					
					<div class="col-lg-8 col-sm-12">
					<fieldset>
						<input name="spouseFname" type="text" id="spouseFname" placeholder="Full Name">
						<span class="text-danger">@error('spouseFname')
							{{ $message }}
						@enderror </span>
					</fieldset>
					</div>
					<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="spouseAge" type="text" id="spouseAge" placeholder="Age">
						<span class="text-danger">@error('spouseAge')
							{{ $message }}
						@enderror </span>
					</fieldset>
					</div>
					<div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="spouseOcc" type="text" id="spouseOcc" placeholder="Occupation">
						<span class="text-danger">@error('spouseOcc')
							{{ $message }}
						@enderror </span>
					</fieldset>
					</div>
					<div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="spouseMI" type="text" id="spouseMI" placeholder="Monthly Income">
						<span class="text-danger">@error('spouseMI')
							{{ $message }}
						@enderror </span>
					</fieldset>
					</div>
					<div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="spouseEmplrName" type="text" id="spouseEmplrName" placeholder="Employer's Name">
						<span class="text-danger">@error('spouseEmplrName')
							{{ $message }}
						@enderror </span>
					</fieldset>
					</div>
					<div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="spouseConNum" type="text" id="spouseConNum" placeholder="Contact Number">
						<span class="text-danger">@error('spouseConNum')
							{{ $message }}
						@enderror </span>
					</fieldset>
					</div>
					<div class="col-lg-12">
						<h5 class ="font-weight-bold">Nomination of Benificiary</h5>
						<hr>	
					</div>
					<div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="benName" type="text" id="benName" placeholder="Full Name">
						<span class="text-danger">@error('benName')
							{{ $message }}
						@enderror </span>
					</fieldset>
					</div>
					<div class="col-lg-6 col-sm-12">
					<fieldset>
						<input name="benRelation" type="text" id="benRelation" placeholder="Relationship">
						<span class="text-danger">@error('benRelation')
							{{ $message }}
						@enderror </span>
					</fieldset>
					</div>
					<div class="col-lg-8 col-sm-12">
					<fieldset>
						<input name="benAddress" type="text" id="benAddress" placeholder="Address">
						<span class="text-danger">@error('benAddress')
							{{ $message }}
						@enderror </span>
					</fieldset>
					</div>
					<div class="col-lg-4 col-sm-12">
					<fieldset>
						<input name="benAge" type="text" id="benAge" placeholder="Age">
						<span class="text-danger">@error('benAge')
							{{ $message }}
						@enderror </span>
					</fieldset>
					</div>
					
					<div class="col-lg-12">
						<p >Mother's Maiden Name</p>
							
					</div>
					<div class="col-lg-4 col-sm-12">
						<fieldset>
							<input name="benMothersLname" type="text" id="benMothersLname" placeholder="Last Name">
							<span class="text-danger">@error('benMothersLname')
								{{ $message }}
							@enderror </span>
						</fieldset>
					</div>
					<div class="col-lg-4 col-sm-12">
						<fieldset>
							<input name="benMothersFname" type="text" id="benMothersFname" placeholder="First Name">
							<span class="text-danger">@error('benMothersFname')
								{{ $message }}
							@enderror </span>
						</fieldset>
					</div>
					<div class="col-lg-4 col-sm-12">
						<fieldset>
							<input name="benMothersMname" type="text" id="benMothersMname" placeholder="Middle Name">
							<span class="text-danger">@error('benMothersMname')
								{{ $message }}
							@enderror </span>
						</fieldset>
					</div>
					<div class="col-lg-12 pb-3">
					<fieldset>
						<button type="submit" id="form-submit" class="main-button-icon w-25 mr-5">Add a Benificiary</button>
						<a class="button" href="#" role="button">Add a Benificiary</a>
					</fieldset>
					
				</div> 
					<div class="col-lg-12">
						<h5 class ="font-weight-bold mt-2">Government ID Number</h5>
						<p class="font-weight-500">The fields below are optional but we encourageyou to provide the information</p>
						<hr>	
					</div>
					<div class="col-lg-4 col-sm-12">
						<fieldset>
							<input name="TIN" type="text" id="TIN" placeholder="Tax Identification Number">
							<span class="text-danger">@error('TIN')
								{{ $message }}
							@enderror </span>
						</fieldset>
					</div>
					<div class="col-lg-4 col-sm-12">
						<fieldset>
							<input name="SSSnum" type="text" id="SSSnum" placeholder="SSS Number">
							<span class="text-danger">@error('SSSnum')
								{{ $message }}
							@enderror </span>
						</fieldset>
					</div>
					<div class="col-lg-12">
						<h5 class ="font-weight-bold">Attach File</h5>
						<hr>	
					</div>
					<div class="col-lg-12">
						<fieldset>
						<label class="form-label" for="selfiepic">Attach Selfie Picture</label>
						<input type="file" class="w-28 mt-2" name="selfiepic" id="selfiepic" >
						<input type="file" class="form-control" id="customFile" name="selfiepic" onchange="previewFile(this)">
						
							<img src="" alt="" id="previewImg" style="max-width: 130px; margin-top: 20px;">
						
						</fieldset>
					</div>
					<div class="col-lg-12">
					<img src="" alt="" id="previewImg" style="max-width: 130px; margin-top: 20px;">
					</div>
					
					<div class="col-lg-12">
						<fieldset>
						<label class="form-label" for="empIDpic">Attach Employee ID</label>
						<input type="file" class="w-28 mt-2" name="empIDpic" id="empIDpic" >
						</fieldset>
					</div> -->

					
					
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
@extends('client.layout.index2')
@section('title', 'Online Loan Application Form')
@section('client_content')
1
<div class="h-100 d-flex align-items-center justify-content-center">
  <div class="mem-bg">
    @include('client.loan.express.header-text')
    <form  action="{{ url('/membership-application') }}" method="POST" enctype="multipart/form-data" class="this-form">
      <div class="content-form-page">
      @csrf
      <div class="row">
      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>NAME</small><span class="asterisk">*</span>
          <input type="text" class="form-control" required name="name" placeholder="ENTER NAME">
          <small class="text-danger">@error('name') {{ $message }}@enderror</small>
        </div>
      </div>

      <input type="hidden" class="form-control" name="membership_type" value="0">

      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>ACCOUNT NUMBER</small><span class="asterisk">*</span>
          <input type="text" class="form-control" required name="acc_id" placeholder="ENTER ACCOUNT NUMBER">
          <small class="text-danger">@error('acc_id') {{ $message }}@enderror</small>
        </div>
      </div>

       <div class="col-lg-4 col-md-4">
      <div class="form-group">
        <small>LOAN CATEGORIES</small><span class="asterisk">*</span>
        <select required name="mode_payment" id="mode_payment" class="form-control" id="select-condition">
          <option value="" disabled selected >SELECT CATEGORIES</option>
          <option value="EXPRESS LOAN">EXPRESS LOAN</option>
          <option value="LAD">LAD(LOAN AGAINS DEPOSIT)</option>

        </select>
        <small class="text-danger">@error('mode_payment') {{ $message }}@enderror</small>
      </div>
      </div>


      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>ADDRESS</small><span class="asterisk">*</span>
          <input type="text" class="form-control" required name="present_address" placeholder="ENTER ADDRESS">
          <small class="text-danger">@error('present_address') {{ $message }}@enderror</small>
        </div>
      </div>

      <!-- <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>SUFFIX</small>
          <input type="text" class="form-control" name="suffix" placeholder="ENTER SUFFIX">
        </div>
      </div> -->

      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>TYPES OF LOAN APPLIED</small><span class="asterisk">*</span>
          <select required name="loan_type" id="loan_type" class="form-control">
                        <option value="" disabled selected >Types of Loan Applied</option>
						<option value="Grocery Loan">Grocery Loan</option>
						<option value="PettyCash">PettyCash</option>
						<option value="FastCash">FastCash</option>
						<option value="InstaCash">InstaCash</option>
						<option value="Health Insurace">Health Insurace</option>
						<option value="Birthday Loan">Birthday Loan</option>
          </select>
          <small class="text-danger">@error('loan_type') {{ $message }}@enderror</small>
        </div>
      </div>

      <!-- <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>BIRTH DATE</small><span class="asterisk">*</span>
          <input type="date" class="form-control" required name="dob">
          <small class="text-danger">@error('dob') {{ $message }}@enderror</small>
        </div>
      </div>
   -->
      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>EMPLOYER</small><span class="asterisk">*</span>
          <input type="text" class="form-control" required name="emp" required name="birth_place" placeholder="ENTER BIRTH PLACE">
          <small class="text-danger">@error('emp') {{ $message }}@enderror</small>
        </div>
      </div>


      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>EMPLOYER ADDRESS</small><span class="asterisk">*</span>
          <input type="text" class="form-control" required name="emp_address" placeholder="ENTER ADDRESS">
          <small class="text-danger">@error('emp_address') {{ $message }}@enderror</small>
        </div>
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>EMAIL</small><span class="asterisk">*</span>
          <input type="email" class="form-control" required name="email" placeholder="ENTER OCCUPATION">
          <small class="text-danger">@error('email') {{ $message }}@enderror</small>
        </div>
      </div>


<!--
      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>UNIT</small><span class="asterisk">*</span>
          <select required name="unit" id="unit" class="form-control">
            <option value="" disabled selected >SELECT UNIT</option>
            <option value="CU(main)">CU(main)</option>
            <option value="CUMC">CUMC</option>
            <option value="CUBE">CUBE</option>
            <option value="Associate">ASSOCIATE</option>
          </select>
          <small class="text-danger">@error('unit') {{ $message }}@enderror</small>
        </div>
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>EDUCATIONAL ATTAINMENT</small><span class="asterisk">*</span>
          <select required name="educ" id="educ" required name="educational_attainment" class="form-control">
            <option value="" disabled selected >SELECT EDUCATIONAL ATTAINMENT</option>
            <option value="Doctor's">Doctor's</option>
            <option value="Master's">Master's</option>
            <option value="College Graduate">College Graduate</option>
            <option value="Undergraduate">Undergraduate</option>
          </select>
          <small class="text-danger">@error('educational attainment') {{ $message }}@enderror</small>
        </div>
      </div> -->

      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>AMOUNT APPLIED</small><span class="asterisk">*</span>
          <input type="amount" required name="amount" class="form-control" required name="monthly_income" placeholder="ENTER MONTHLY INCOME">
          <small class="text-danger">@error('monthly income') {{ $message }}@enderror</small>
        </div>
      </div>

      <div class="col-lg-4 col-md-4">
      <div class="form-group">
        <small>MODE OF PAYMENT</small><span class="asterisk">*</span>
        <select required name="mode_payment" id="mode_payment" class="form-control">
          <option value="" disabled selected >SELECT MODE OF PAYMENT</option>
          <option value="SEMI-MONTHLY">SEMI-MONTHLY</option>
          <option value="MONTHLY">MONTHLY</option>

        </select>
        <small class="text-danger">@error('mode_payment') {{ $message }}@enderror</small>
      </div>
    </div>

      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>TERM APPLIED</small><span class="asterisk">*</span>
          <input type="text" class="form-control" required name="religion" placeholder="ENTER RELIGION">
          <small class="text-danger">@error('religion') {{ $message }}@enderror</small>
        </div>
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>CONTACT NUMBER</small><span class="asterisk">*</span>
          <input type="text" class="form-control" required name="term_applied" placeholder="ENTER CONTACT NUMBER">
          <small class="text-danger">@error('term_applied') {{ $message }}@enderror</small>
        </div>
      </div>



      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>TIN NUMBER</small><span class="asterisk">*</span>
          <input type="text" class="form-control" name="tin" placeholder="TIN">
          <small class="text-danger">@error("tin") {{ $message }}@enderror</small>
        </div>
      </div>

      <div class="col-lg-4 col-md-4">
      <div class="form-group">
        <small>FB ACCOUNT NAME</small><span class="asterisk">*</span>
        <input type="TEXT" class="form-control" required name="fb_acc" placeholder="ENTER FB ACCOUNT NAME">
        <small class="text-danger">@error('email') {{ $message }}@enderror</small>
      </div>
    </div>

    </div>


        <div class="line"></div>
        <br>
        <div class="row">
          <div class="col-12 col-lg-4 col-md-4"></div>
          <div class="col-12 col-lg-4 col-md-4">
            <button class="submit_btn" type="submit">SUBMIT APPLICATION</button>
          </div>
          <div class="col-12 col-lg-4 col-md-4"></div>
        </div>
      </div>
    </form>
  </div>
</div>



$( "#select-condition" ).change(function() {
  if(this.value == 'LAD'){
    $('#loan_type').removeClass( "hide" );

  }else if(this.value == 'EXPRESS LOAN'){
    $('#loan_type').addClass( "hide" );

  }
  else{
    $('#loan_type').removeClass( "show" ).addClass("hide");

  }
});
@endsection

    <div class="personal-info-text">
    <h3>Personal Information</h3>
    </div>
    <div class="line"></div>
    <div class="col-lg-4">

        @if (Request::is('regular-loan-application'))
            <input type="text" name="application_type" value="regular">
        @elseif (Request::is('special-loan-application'))
            <input type="text" name="application_type" value="special">
        @endif

        <input type="text" name="member" value="{{ $loan->id }}">

        <div class="form-group">
            <small>Name of Member</small>
            <input type="text" name="name_of_member" class="form-control" placeholder="ENTER NAME OF MEMBER" value="@auth {{ $loan->first_name }} {{ $loan->middle_name }} {{ $loan->last_name }} @endauth">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <small>Age</small>
            <input type="text" name="age" class="form-control" placeholder="ENTER AGE" value="@auth {{ $years }} @endauth">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <small>Date of Birth</small>
            <input type="text" name="date_of_birth" class="form-control" placeholder="ENTER DATE OF BIRTH" value="@auth {{ $loan->dob }} @endauth">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <small>Present Address</small>
            <input type="text" name="present_address" class="form-control" placeholder="ENTER PRESENT ADDRESS" value="@auth {{ $loan->address }} @endauth">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <small>Permanent Address</small>
            <input type="text" name="permanent_address" class="form-control" placeholder="ENTER PERMANENT ADDRESS">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <small>Email Address</small>
            <input type="text" name="email_address" class="form-control" placeholder="ENTER EMAIL ADDRESS" value="@auth {{ $loan->email }} @endauth">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <small>Facbook Account</small>
            <input type="text" name="fb_account" class="form-control" placeholder="ENTER FACEBOOK ACCOUNT">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <small>Cellphone No.</small>
            <input type="text" name="cell_num" class="form-control" placeholder="ENTER CELLPHONE NO." value="@auth {{ $loan->contact_number }} @endauth">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <small>SSS Number</small>
            <input type="text" name="sss_num" class="form-control" placeholder="ENTER SSS NUMBER" value="@auth {{ $loan->SSSnum }} @endauth">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <small>CASALCO ID No.</small>
            <input type="text" name="casalco_num" class="form-control" placeholder="ENTER CASALCO ID NO." value="@auth {{ $loan->acc_id }} @endauth">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <small>TIN Number</small>
            <input type="text" name="tin_num" class="form-control" placeholder="ENTER TIN NUMBER" value="@auth {{ $loan->TIN }} @endauth">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <small>Civil Status</small>
            <input type="text" name="civil_status" class="form-control" placeholder="ENTER CIVIL STATUS" value="@auth {{ $loan->civilStatus }} @endauth">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <small>No. of children</small>
            <input type="text" name="children_num" class="form-control" placeholder="ENTER NO. OF CHILDREN" value="@auth {{ $loan->Dependents }} @endauth">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <small>Employer</small>
            <input type="text" name="employer" class="form-control" placeholder="ENTER EMPLOYER">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <small>Length of service</small>
            <input type="text" name="service_length" class="form-control" placeholder="ENTER LENGTH OF SERVICE">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <small>Employment Status</small>
            <input type="text" name="employment_status" class="form-control" placeholder="ENTER CURRENT EMPLOYMENT STATUS">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <small>Present Position</small>
            <input type="text" name="position" class="form-control" placeholder="ENTER PRESENT POSITION (IF APPLICABLE)">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <small>Name of Spouse</small>
            <input type="text" name="spouse_name" class="form-control" placeholder="ENTER SPOUSE NAME" value="@auth {{ empty($loan->spouse_name) ? 'ENTER SPOUSE NAME' : 'no'  }} @endauth">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <small>Occupation</small>
            <input type="text" name="occupation" class="form-control" placeholder="ENTER CURRENT OCCUPATION" value="@auth {{ $loan->Occu }} @endauth">
        </div>
    </div>

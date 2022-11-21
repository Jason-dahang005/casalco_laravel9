@extends('officer.index')
@section('title', 'Loan Application List')
@section('officer_content')

@foreach($membership as $m) 
<div>
  <div>
     <div class="modal-content">
        <!-- Modal Header -->

        <div class=" text-center border">

           <h4 class="modal-title">CASALCO Registry Form</h4>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-sm">

              </div>
              <div class="col-sm">

              </div>
              <div class="col-sm">
                <img src="{{ asset($m->selfie_pic)}}" width = '100' height = '100' class = "img img-responsive" />
              </div>
            </div>
          </div>
          <h4>Personal Information</h4>

          <div class="border border-danger"></div>
          <div class="row pt-3">
            <div class="col-lg-4">

              <div class="form-group">
              <label for="First Name" class="form-label">First Name</label>
                <input type="text" class="form-control" disabled placeholder="First Name" value="{{ $m->first_name }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Middle Name</label>
                <input type="text" class="form-control" disabled placeholder="Middle Name" value="{{ $m->middle_name }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Last Name</label>
                <input type="text" class="form-control" disabled placeholder="Last Name" value="{{ $m->last_name }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Suffix</label>
                <input type="text" class="form-control" disabled placeholder="Suffix" value="{{ $m->suffix }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Gender</label>
                <input type="text" class="form-control" disabled placeholder="Gender" value="{{ $m->gender }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Birthday</label>
                <input type="text" class="form-control" disabled placeholder="birthday" value="{{ $m->dob }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Birth Place</label>
                <input type="text" class="form-control" disabled placeholder="Birth Place" value="{{ $m->Bplace }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Address</label>
                <input type="text" class="form-control" disabled placeholder="Address" value="{{ $m->address }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Unit</label>
                <input type="text" class="form-control" disabled placeholder="Unit" value="{{ $m->unit }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Occupation</label>
                <input type="text" class="form-control" disabled placeholder="Occupation" value="{{ $m->Occu }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Educ. Attainment</label>
                <input type="text" class="form-control" disabled placeholder="Educ. Attainment" value="{{ $m->educ }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Monthly Income</label>
                <input type="text" class="form-control" disabled placeholder="Monthly Income" value="{{ $m->MI }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Civil Status</label>
                <input type="text" class="form-control" disabled placeholder="Civil Status" value="{{ $m->civilStatus }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Religion</label>
                <input type="text" class="form-control" disabled placeholder="Religion" value="{{ $m->religion }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Contact Number</label>
                <input type="text" class="form-control" disabled placeholder="Contact Number" value="{{ $m->contact_number }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Email Address</label>
              <label for="First Name" class="form-label">Gender</label>
                <input type="text" class="form-control" disabled placeholder="Email Address" value="{{ $m->email }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">No. of Dependents</label>
                <input type="text" class="form-control" disabled placeholder="No. of Dependents" value="{{ $m->Dependents }}">
              </div>
            </div>
          </div>

          @if (!empty($m->spouse))
          <div class="pt-3 pb-2">
            <h5 class ="font-weight-bold">Spouse Personal Information</h5>
          </div>
          <div class="border border-danger"></div>
          <div class="row pt-3">
            <div class="col-lg-8">
              <div class="form-group">
              <label for="First Name" class="form-label">Full Name</label>
                <input type="text" class="form-control" disabled placeholder="Full Name" value="{{ $m->spouse->spouseFname }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Age</label>
                <input type="text" class="form-control" disabled placeholder="Age" value="{{ $m->spouse->spouseAge }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">Occupation</label>
                <input type="text" class="form-control" disabled placeholder="Occupation" value="{{ $m->spouse->spouseOcc }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">Monthly Income</label>
                <input type="text" class="form-control" disabled placeholder="Monthly Income" value="{{ $m->spouse->spouseMI }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">Employeer's Name</label>
                <input type="text" class="form-control" disabled placeholder="Employeer's Name" value="{{ $m->spouse->spouseEmplrName }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">Contact No.</label>
                <input type="text" class="form-control" disabled placeholder="Contact No." value="{{ $m->spouse->spouseConNum }}">
              </div>
            </div>
          </div>
          @endif

          @foreach ($m->ben as $b)
          <div class="pt-3 pb-2">
            <h5 class ="font-weight-bold">Nomination of Benificiary</h5>
          </div>
          <div class="border border-danger"></div>
          <div class="row pt-3">
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">Full Name</label>
                <input type="text" class="form-control" disabled placeholder="Full Name" value="{{ $b->benName }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">Relationship</label>
                <input type="text" class="form-control" disabled placeholder="Relationship" value="{{ $b->benRelation }}">
              </div>
            </div>
            <div class="col-lg-8">
              <div class="form-group">
              <label for="First Name" class="form-label">Address</label>
                <input type="text" class="form-control" disabled placeholder="Address" value="{{ $b->benAddress }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Age</label>
                <input type="text" class="form-control" disabled placeholder="Age" value="{{ $b->benAge }}">
              </div>
            </div>
            {{-- <div class="col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Employeer's Name">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Contact No.">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Employeer's Name">
              </div>
            </div> --}}
          </div>
          @endforeach
          <div class="pt-3 pb-2">
            <h5 class ="font-weight-bold">Government ID's</h5>
          </div>
          <div class="border border-danger"></div>
          <div class="row pt-3">
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">TIN</label>
                <input type="text" class="form-control" disabled placeholder="TIN" value="{{ $m->TIN }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="First Name" class="form-label">SSS No.</label>
                <input type="text" class="form-control" disabled placeholder="SSS" value="{{ $m->SSSnum }}">
              </div>
            </div>
          </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <form action="{{ route('membership-application.update', $m->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" value="1" name="is_approved">
            <button type="submit" class="btn btn-success w-100">Pre-Approve</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </form>
        </div>
     </div>
  </div>
</div>
@endforeach




@endsection

@extends('admin.index')
@section('title', 'Membership')
@section('admin_content')

<table class="table table-bordered table-striped table-sm" id="example2">
	<thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Unit</th>
      <th>Date Pre-Approved</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($membership as $m)
        <tr>
        <td>{{ $m->Fname }}</td>
        <td>{{ $m->Lname }}</td>
        <td>{{ $m->unit }}</td>
        <td>{{ $m->updated_at }}</td>
        <td>

            @if($m->is_approved)
                <span class="badge badge-info">Pre-approved</span>
           
            @endif
        </td>
        <td>
            <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal{{ $m->id }}">Details</button>
        </td>
        </tr>
    @endforeach
  </tbody>
</table>

@foreach($membership as $m)
<div class="modal fade" id="myModal{{ $m->id }}">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
     <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
           <h4 class="modal-title">CASALCO Membership Application Form</h4>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
            <div class="col-4">
              <h4>Personal Information</h4>
              
            </div>
            <div class="col-4">
              <input type="text" class="form-control" placeholder="Account No">
              
            </div>
            <div class="col-4">
              <input type="text" class="form-control" placeholder="OR No">
            </div>
          </div>
          <div class="border border-danger"></div>
          <div class="row pt-3">
            <div class="col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="First Name" value="{{ $m->Fname }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Middle Name" value="{{ $m->Mname }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Last Name" value="{{ $m->Lname }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Suffix" value="{{ $m->Fname }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Gender" value="{{ $m->gender }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="birthday" value="{{ $m->dob }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Birth Place" value="{{ $m->Bplace }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Address" value="{{ $m->address }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Unit" value="{{ $m->unit }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Occupation" value="{{ $m->occuaption }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Educ. Attainment" value="{{ $m->educ }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Monthly Income" value="{{ $m->MI }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Civil Status" value="{{ $m->civilStatus }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Religion" value="{{ $m->religion }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Contact NUmber" value="{{ $m->contactNum }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Email Address" value="{{ $m->enail }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="No. of Dependents" value="{{ $m->NumDependents }}">
              </div>
            </div>
          </div>

          <div class="pt-3 pb-2">
            <h5 class ="font-weight-bold">Spouse Personal Information</h5>
          </div>
          <div class="border border-danger"></div>
          <div class="row pt-3">
            <div class="col-lg-8">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Full Name" value="{{ $m->spouseFname }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Age" value="{{ $m->spouseAge }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Occupation" value="{{ $m->spouseOcc }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Monthly Income" value="{{ $m->spouseMI }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Employeer's Name" value="{{ $m->spouseEmplrName }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Contact No." value="{{ $m->spouseConNum }}">
              </div>
            </div>
          </div>
          <div class="pt-3 pb-2">
            <h5 class ="font-weight-bold">Nomination of Benificiary</h5>
          </div>
          <div class="border border-danger"></div>
          <div class="row pt-3">
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Full Name" value="{{ $m->benName }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Relationship" value="{{ $m->benRelation }}">
              </div>
            </div>
            <div class="col-lg-8">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Address" value="{{ $m->benAddress }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="Age" value="{{ $m->benAge }}">
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
          <div class="pt-3 pb-2">
            <h5 class ="font-weight-bold">Government ID's</h5>
          </div>
          <div class="border border-danger"></div>
          <div class="row pt-3">
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control" disabled placeholder="TIN" value="{{ $m->TIN }}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
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
            <input type="hidden" value="2" name="is_approved">
            <button type="submit" class="btn btn-success w-100">Approve</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </form>
        </div>
     </div>
  </div>
</div>
@endforeach

@endsection
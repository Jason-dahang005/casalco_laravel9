@extends('admin.index')
@section('title', 'Loan Application')
@section('admin_content')



<table class="table table-bordered table-striped table-sm" id="example2">
	<thead>
    <tr>
      <th>Name</th>
      <th>Account Number</th>
      <th>Loan Catergry</th>
      <th>Loan Type</th>
      <th>Amount</th>
      <th>Date Applied</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($loan as $l)
    @foreach ($l->express as $e )
   
        <tr>
        <td>{{ $e->name }}</td>
        <td>{{ $e->acc_id }}</td>
        <td>
          @if ($e->loan_cat == 0)
            <span class="badge badge-info">Express Loan</span>
          @else
            <span class="badge badge-info">Regular Loan</span>
          
          @endif
        </td>
        <td>
          @if ($e->loanApp_type == 0)
            <span class="badge badge-info">Online</span>
          @else
            <span class="badge badge-info">Walk-in</span>
          @endif
        </td>
        <td>{{ $e->amount }}</td>
        <td>{{ $e->created_at }}</td>
        <td>
            @if($l->is_approved)
              <span class="badge badge-info">Pre-approved</span>
            @endif
        </td>
        <td>
          
            <button class="btn btn-success" data-toggle="modal" data-target="#myModal{{ $l->id }}">Details</button>
          
        </td>
        </tr>
           
    @endforeach
    @endforeach
  </tbody>
</table>

@foreach($loan as $l)
@foreach ($l->express as $e )
<div class="modal fade" id="myModal{{ $l->id }}">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
     <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
           <h4 class="modal-title">CASALCO Loan Application Form</h4>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <h4>Express Loan</h4>
          <div class="border border-danger"></div>
          <div class="row pt-3">
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">First Name</label>
                <input type="text" class="form-control" disabled placeholder="First Name" value="{{ $e->name }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Middle Name</label>
                <input type="text" class="form-control" disabled placeholder="Middle Name" value="{{ $e->acc_id }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Last Name</label>
                <input type="text" class="form-control" disabled placeholder="Last Name" value="{{ $e->present_address }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Suffix</label>
                <input type="text" class="form-control" disabled placeholder="Suffix" value="{{ $e->permanent_address }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Gender</label>
                <input type="text" class="form-control" disabled placeholder="Gender" value="{{ $e->loan_type }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Birthday</label>
                <input type="text" class="form-control" disabled placeholder="birthday" value="{{ $e->emp }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Birth Place</label>
                <input type="text" class="form-control" disabled placeholder="Birth Place" value="{{ $e->emp_address }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Address</label>
                <input type="text" class="form-control" disabled placeholder="Address" value="{{ $e->email }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Unit</label>
                <input type="text" class="form-control" disabled placeholder="Unit" value="{{ $e->amount }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Occupation</label>
                <input type="text" class="form-control" disabled placeholder="Occupation" value="{{ $e->mode_payment }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Educ. Attainment</label>
                <input type="text" class="form-control" disabled placeholder="Educ. Attainment" value="{{ $e->term_applied }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Monthly Income</label>
                <input type="text" class="form-control" disabled placeholder="Monthly Income" value="{{ $e->phone_no }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Civil Status</label>
                <input type="text" class="form-control" disabled placeholder="Civil Status" value="{{ $e->tin }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Religion</label>
                <input type="text" class="form-control" disabled placeholder="Religion" value="{{ $e->fb_acc }}">
              </div>
            </div>
            

        
        <!-- Modal footer -->
        <div class="modal-footer">
          <form action="{{ route('loan.update', $l->id) }}" method="POST">
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
  </div>
@endforeach
@endforeach

@endsection
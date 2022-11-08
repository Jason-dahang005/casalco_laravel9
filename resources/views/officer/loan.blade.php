@extends('officer.index')
@section('title', 'Loan Application List')
@section('officer_content')




<!-- <button class="btn btn-sm btn-success mb-2" data-toggle="modal" data-target="#myModal01">Add Walk-in</button> -->

<!-- <div class="btn-group">
  <button type="button" class="btn btn-success mb-2 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Add Walk-in
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal02" >Express Loan</a>
    <a class="dropdown-item" href="#">Regular/Special Loan</a>
  </div>
</div> -->

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
            <span class="badge badge-info">LAD</span>
          
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
            @if($l->is_approved==0)
              <span class="badge badge-info">Pending</span>
            @endif
        </td>
        <td>
          
            <button class="btn btn-success" data-toggle="modal" data-target="#myModal{{ $l->id }}">Details</button>
          
        </td>
        </tr>
           
    @endforeach
    @endforeach

    @foreach ($loan as $l)
    @foreach ($l->regularSpecial as $u )
   
        <tr>
        <td>{{ $u->name }}</td>
        <td>{{ $u->acc_id }}</td>
        <td>
          @if ($u->loan_cat == 0)
            <span class="badge badge-info">Regular Loan</span>
          @else
            <span class="badge badge-info">Special Loan</span>
          
          @endif
        </td>
        <td>
          @if ($u->loanApp_type == 0)
            <span class="badge badge-info">Online</span>
          @else
            <span class="badge badge-info">Walk-in</span>
          @endif
        </td>
        <td>{{ $u->monthlyI->amount }}</td>
        <td>{{ $u->created_at }}</td>
        <td>
            @if($l->is_approved==0)
              <span class="badge badge-info">Pending</span>
            @endif
        </td>
        <td>
          
            <button class="btn btn-success" data-toggle="modal" data-target="#myModal101{{ $u->id }}">Details</button>
          
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
          <h4>Express Loan/LAD</h4>
          <div class="border border-danger"></div>
          <div class="row pt-3">
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Name</label>
                <input type="text" class="form-control" disabled placeholder="" value="{{ $e->name }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Account Number</label>
                <input type="text" class="form-control" disabled placeholder="" value="{{ $e->acc_id }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Present Address</label>
                <input type="text" class="form-control" disabled placeholder="" value="{{ $e->present_address }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Permanent Address</label>
                <input type="text" class="form-control" disabled placeholder="Suffix" value="{{ $e->permanent_address }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Loan Type</label>
                <input type="text" class="form-control" disabled placeholder="" value="{{ $e->loan_type }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Employer</label>
                <input type="text" class="form-control" disabled placeholder="birthday" value="{{ $e->emp }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Employer Address</label>
                <input type="text" class="form-control" disabled placeholder="Birth Place" value="{{ $e->emp_address }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Email</label>
                <input type="text" class="form-control" disabled placeholder="Address" value="{{ $e->email }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Amount</label>
                <input type="text" class="form-control" disabled placeholder="Unit" value="{{ $e->amount }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Mode of Payments</label>
                <input type="text" class="form-control" disabled placeholder="Occupation" value="{{ $e->mode_payment }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Term Applied</label>
                <input type="text" class="form-control" disabled placeholder="Educ. Attainment" value="{{ $e->term_applied }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Phone No.</label>
                <input type="text" class="form-control" disabled placeholder="Monthly Income" value="{{ $e->phone_no }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">TIN</label>
                <input type="text" class="form-control" disabled placeholder="Civil Status" value="{{ $e->tin }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">FB account</label>
                <input type="text" class="form-control" disabled placeholder="Religion" value="{{ $e->fb_acc }}">
              </div>
            </div>
            

        
        <!-- Modal footer -->
        <div class="modal-footer">
          <form action="{{ route('loan.update', $l->id) }}" method="POST">
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
</div>
</div>
@endforeach
@endforeach



@foreach($loan as $l)
@foreach ($l->regularSpecial as $u )
<div class="modal fade" id="myModal101{{ $u->id }}">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
     <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
           <h4 class="modal-title">CASALCO Loan Application Form</h4>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <h4>Regular/Special Loan</h4>
          <div class="border border-danger"></div>
          <div class="row pt-3">
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">First Name</label>
                <input type="text" class="form-control" disabled placeholder="First Name" value="{{ $u->name }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Middle Name</label>
                <input type="text" class="form-control" disabled placeholder="Middle Name" value="{{ $u->acc_id }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Last Name</label>
                <input type="text" class="form-control" disabled placeholder="Last Name" value="{{ $u->present_address }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Suffix</label>
                <input type="text" class="form-control" disabled placeholder="Suffix" value="{{ $u->permanent_address }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Gender</label>
                <input type="text" class="form-control" disabled placeholder="Gender" value="{{ $u->loan_type }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Employee</label>
                <input type="text" class="form-control" disabled placeholder="birthday" value="{{ $u->emp }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Birth Place</label>
                <input type="text" class="form-control" disabled placeholder="Birth Place" value="{{ $u->emp_address }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Address</label>
                <input type="text" class="form-control" disabled placeholder="Address" value="{{ $u->email }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Unit</label>
                <input type="text" class="form-control" disabled placeholder="Unit" value="{{ $u->amount }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Occupation</label>
                <input type="text" class="form-control" disabled placeholder="Occupation" value="{{ $u->mode_payment }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Educ. Attainment</label>
                <input type="text" class="form-control" disabled placeholder="Educ. Attainment" value="{{ $u->term_applied }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Monthly Income</label>
                <input type="text" class="form-control" disabled placeholder="Monthly Income" value="{{ $u->phone_no }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Civil Status</label>
                <input type="text" class="form-control" disabled placeholder="Civil Status" value="{{ $u->tin }}">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Religion</label>
                <input type="text" class="form-control" disabled placeholder="Religion" value="{{ $u->fb_acc }}">
              </div>
            </div>
            

        
        <!-- Modal footer -->
        <div class="modal-footer">
          <form action="{{ route('loan.update', $l->id) }}" method="POST">
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
</div>
</div>
@endforeach
@endforeach




<div class="modal fade" id="myModal02">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
     <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
           <h4 class="modal-title">CASALCO Loan Application Form</h4>
        </div>
        <!-- Modal body -->
        <form action="{{ url('/officer/loan') }}" method="POST">
            @csrf
        <div class="modal-body">
          <h4>Express Loan</h4>
         
          <input  type="hidden" value="1" name="loanApp_type">
         
          <div class="border border-danger"></div>
          <div class="row pt-3">
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name" >
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Account ID</label>
                <input type="text" class="form-control" name="acc_id" placeholder="Account ID">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Present Address</label>
                <input type="text" class="form-control" name="present_address" placeholder="Present Address" >
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Permanent Address</label>
                <input type="text" class="form-control" name="permanent_address" placeholder="Permanent Address">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Loan Type</label>
              <select name="loan_type" id="loan_type" class ="form-control">
                <option value="" disabled selected >Types of Loan Applied</option>
                <option value="Grocery Loan">Grocery Loan</option>
                <option value="PettyCash">PettyCash</option>
                <option value="FastCash">FastCash</option>
                <option value="InstaCash">InstaCash</option>
                <option value="Health Insurace">Health Insurace</option>
                <option value="Birthday Loan">Birthday Loan</option>
                
              </select>
              </div>
              <input  type="hidden" value="{{ Auth::user()->id }}" name="user_id">
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Employee</label>
                <input type="text" class="form-control" name="emp" placeholder="Employee">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Employee Address</label>
                <input type="text" class="form-control" name="emp_address" placeholder="Employee Address" >
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email" >
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Amount</label>
                <input type="text" class="form-control" name="amount" placeholder="Amount" >
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Mode of Payment</label>
                <input type="text" class="form-control" name="mode_payment" placeholder="Mode of Payment">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Term Applied</label>
                <input type="text" class="form-control" name="term_applied" placeholder="Term Applied" >
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Phone No.</label>
                <input type="text" class="form-control" name="phone_no" placeholder="Phone No.">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">TIN</label>
                <input type="text" class="form-control" name="tin" placeholder="TIN" >
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="First Name" class="form-label">Fb Account</label>
                <input type="text" class="form-control" name="fb_acc" placeholder="Fb Account" >
              </div>
            </div>
            

        
        <!-- Modal footer -->
        <div class="modal-footer">
          
           
           
            <button type="submit" class="btn btn-success w-100 mb-4 mt-4">Submit</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </form>
        </div>
     </div>
  </div>
</div>
</div>






@endsection
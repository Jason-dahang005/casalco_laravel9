@extends('admin.index')
@section('title', 'Loan')
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
      {{-- <th>Actions</th> --}}
    </tr>
  </thead>
  <tbody>
    @foreach ($loan as $l)
        <tr>
        <td>{{ $l->name }}</td>
        <td>{{ $l->acc_id }}</td>
        <td>
          @if ($l->loan_cat == 0)
            <span class="badge badge-info">Express Loan</span>
          @else
            <span class="badge badge-info">Regular Loan</span>
          
          @endif
        </td>
        <td>
          @if ($l->loanApp_type == 0)
            <span class="badge badge-info">Online</span>
          @else
            <span class="badge badge-info">Walk-in</span>
          @endif
        </td>
        <td>{{ $l->amount }}</td>
        <td>{{ $l->created_at }}</td>
        <td>
            @if($l->is_approved)
              <span class="badge badge-info">Approved</span>
            @endif
        </td>
        {{-- <td>
          
            <button class="btn btn-success" data-toggle="modal" data-target="#myModal{{ $l->id }}">Details</button>
          
        </td> --}}
        </tr>
    @endforeach
  </tbody>
</table>

@endsection
@extends('client.index')
@section('titlel', 'Loans')
@section('client_content')

<div id="top">

  <table class="table table-bordered table-striped table-sm" id="#example2" ">
	<thead>
    <tr>
      <th>Name</th>
      <th>Account Number</th>
      <th>Loan Category</th>
      <th>Loan Type</th>
      <th>Amount</th>
      <th>Date Applied</th>
      <th>Status</th>
    </tr>
  </thead>
        <tbody>
            @foreach ($history as $l )
            @foreach ( $l->express as $s )
                
            
            <tr>

                <td>{{$s->name}}</td>
                <td>{{$s->acc_id}}</td>
                <td>
                    @if ($s->loan_cat == 0)
                    <span class="badge badge-info">Express Loan</span>
                  @else
                    <span class="badge badge-info">Loan Agains Deposit-LAD</span>
                  
                  @endif
                </td>
                
                <td>{{$s->loan_type}}</td>
                <td>{{$s->amount}}</td>
              
                <td>{{$s->created_at}}</td>
                <td> @if($l->is_approved == 0)
                    <span class="badge badge-secondary">Pending</span>
                    @elseif (($l->is_approved == 1))
                    <span class="badge badge-primary">Pre-Approved</span>
                    @else
                    <span class="badge badge-success">Approved</span>
                  @endif
                </td>





            </tr>
            @endforeach
            @endforeach
        </tbody>
        <tbody>
          @foreach ($history as $l )
          @foreach ( $l->regularSpecial as $s )
              
          
          <tr>

              <td>{{$s->name}}</td>
              <td>{{$s->acc_id}}</td>
              <td>
                  @if ($s->loan_cat == 0)
                  <span class="badge badge-info">Regular Loan</span>
                @else
                  <span class="badge badge-info">Special Loan</span>
                
                @endif
              </td>
              <td>{{$s->monthlyI->loan_type}}</td>
              <td>{{$s->monthlyI->amount}}</td>
            
              <td>{{$s->created_at}}</td>
              <td> @if($l->is_approved == 0)
                  <span class="badge badge-secondary">Pending</span>
                  @elseif (($l->is_approved == 1))
                  <span class="badge badge-primary">Pre-Approved</span>
                  @else
                  <span class="badge badge-success">Approved</span>
                @endif
              </td>





          </tr>
          @endforeach
          @endforeach
      </tbody>
</table>
</div>

@endsection
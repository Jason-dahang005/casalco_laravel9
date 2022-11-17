@extends('client.layout.index2')
@section('title', 'Express Loan Application Form')
@section('client_content')

<div class="h-100 d-flex align-items-center justify-content-center">
    <div class="mem-bg">
        <div class="header-text">
            <ul>
              <li>Please fill-out all the fillable forms below. &#40;Asterisk &#40;*&#41; indicates required field&#41;</li>
              <li>To qualify for membership, you must be at least 18 years old.</li>
            </ul>
          </div>
            @include('client.loan.express.express-loan-form')
    </div>
</div>

@endsection

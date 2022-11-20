@extends('client.layout.index2')
@section('title', 'Express Loan Application Form')
@section('client_content')

<div class="h-100 d-flex align-items-center justify-content-center">
    <div class="mem-bg">
        
            @include('client.loan.express.express-loan-form')
    </div>
</div>

@endsection

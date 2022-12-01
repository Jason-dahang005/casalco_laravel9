@extends('client.layout.index2')
@section('title', 'LAD Loan Application Form')
@section('client_content')

<div class="h-100 d-flex align-items-center justify-content-center">
    <div class="mem-bg">
        @include('client.loan_application.express-lad-form')
    </div>
</div>

@endsection

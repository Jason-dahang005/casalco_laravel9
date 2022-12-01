@extends('client.layout.index2')
@section('title', 'Express Loan Application Form')
@section('client_content')

<div class="h-100 d-flex align-items-center justify-content-center">
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{  Session::get('success') }}
        </div>
            @endif
    <div class="mem-bg">
        @include('client.loan_application.express-lad-form')
    </div>
</div>

@endsection

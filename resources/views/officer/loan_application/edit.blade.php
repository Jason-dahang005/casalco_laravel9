@extends('officer.index')
@section('title', 'CASALCO Loan Application')
@section('officer_content')

   {{ $loanApplication->express->employer }}

@endsection

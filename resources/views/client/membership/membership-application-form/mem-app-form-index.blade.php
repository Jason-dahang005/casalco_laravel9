@extends('client.layout.index2')
@section('title', 'Online Membership Application Form')
@section('client_content')

<div class="h-100 d-flex align-items-center justify-content-center">
  <div class="mem-bg">
    @include('client.membership.membership-application-form.header-text')

    @include('client.membership.membership-application-form.personal-info-form')
  </div>
</div>

@endsection
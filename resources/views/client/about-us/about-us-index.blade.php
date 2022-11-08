@extends('client.layout.index2')
@section('title', 'About Us')
@section('client_content')

<!-- BEGIN SIDEBAR & CONTENT -->
<div class="row margin-bottom-40">
  <!-- BEGIN CONTENT -->
  <div class="col-md-12 col-sm-12">
    <h1>About Us</h1>
    <div class="content-page">
      <div class="row margin-bottom-30">
        <!-- BEGIN INFO BLOCK -->               
        @include('client.about-us.vision')
        <!-- END INFO BLOCK -->   
      </div>
      <div class="row margin-bottom-30">
        <!-- BEGIN INFO BLOCK -->
        @include('client.about-us.mission')
        <!-- END INFO BLOCK --> 
      </div>

    </div>
    <!-- END CONTENT PAGE -->
  </div>
  <!-- END CONTENT -->
  
</div>
<!-- END SIDEBAR & CONTENT -->
  
@endsection
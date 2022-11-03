@extends('client.layout.index2')
@section('title', 'Create an account')
@section('client_content')

	@include('auth.components.register.breadcrumb')
	<!-- BEGIN SIDEBAR & CONTENT -->
	<div class="row margin-bottom-40">
		@include('auth.components.register.sidebar')

		@include('auth.components.register.content')
	</div>
	<!-- END SIDEBAR & CONTENT -->
	
@endsection
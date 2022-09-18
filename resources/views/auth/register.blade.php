@extends('client.index')

@section('client_content')
<div id="top">
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4">
			<div class="contact-form">
				<form method="POST" action="{{ route('register') }}">
					@csrf
					<div class="row border py-5 px-4">
						<div class="col-lg-12">
							<div class="py-3">
								<div class="text-center">
									<h4>REGISTER</h4>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<fieldset>
									<label for="">Name</label>
								<input name="name" type="text" id="name" placeholder="Your name">
								@error('name')<span class="text-danger"><strong>{{ $message }}</strong></span>@enderror
							</fieldset>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<fieldset>
									<label for="">Email</label>
								<input name="email" type="email" id="email" placeholder="Your Email Address">
								@error('email')<span class="text-danger"><strong>{{ $message }}</strong></span>@enderror
							</fieldset>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<fieldset>
									<label for="">Password</label>
								<input name="password" type="password" id="password" placeholder="Your Password">
								@error('password')<span class="text-danger"><strong>{{ $message }}</strong></span>@enderror
							</fieldset>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<fieldset>
									<label for="">Confirm Password</label>
								<input name="password_confirmation" type="password" id="password-confirm" placeholder="Your Password">
								@error('password')<span class="text-danger"><strong>{{ $message }}</strong></span>@enderror
							</fieldset>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<fieldset>
								<button type="submit">LOGIN</button>
							</fieldset>
							</div>
						</div>
						<div class="col-12">
							<div class="text-right">
								<p>Already registered? <a href="/login">Login here</a></p>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col-lg-4"></div>
	</div>
</div>
{{-- <div id="top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
    
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection

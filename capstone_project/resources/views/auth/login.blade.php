@extends('client.index')

@section('client_content')
<div id="top">
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4">
			<div class="contact-form">
				<form method="POST" action="{{ route('login') }}">
					@csrf
					<div class="row border py-5 px-4">
						<div class="col-lg-12">
							<div class="py-3">
								<div class="text-center">
									<h4>LOGIN</h4>
								</div>
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
								<button type="submit">LOGIN</button>
							</fieldset>
							</div>
						</div>
						<div class="col-12">
							<div class="text-right">
								<p>Don't have an account? <a href="/register">Register here</a></p>
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
                    <div class="card-header">{{ __('Login') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
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
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
    
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
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

@extends('layouts.app')

@section('content')
    <section class="login white-bg o-hidden scrollbar">
        <div class="container-fluid p-0">
            <div class="row row-eq-height no-gutter height-100vh">
                <div class="col-md-6 parallax" style="background-image: url({{asset('images/login.jpg')}});">
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="vertical-align full-width">
                        <div class="login-14">
                            <h1>Reset Password</h1>
                            <div class="pb-50 clearfix white-bg">
                                <form method="POST" action="{{ route('password.request') }}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <div class="section-field mb-20">
                                        <label class="mb-10" for="email">Email Address*</label>
                                        <input id="email" class="form-control" type="email" value="{{ $email or old('email') }}" placeholder="Email Address" name="email" required>
                                        @if($errors->has('email'))
                                            <div class="text-danger">
                                                <strong>{{$errors->first('email')}}</strong>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="section-field mb-20">
                                        <label class="mb-10" for="password">Password*</label>
                                        <input id="password" class="form-control" type="password" placeholder="Password" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="section-field mb-20">
                                        <label class="mb-10" for="password-confirm">Confirm Password*</label>
                                        <input id="password-confirm" class="form-control" type="password" placeholder="Password" name="password_confirmation" required>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="text-danger">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <button type="submit" class="button btn-block">
                                        <span>Reset Password</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

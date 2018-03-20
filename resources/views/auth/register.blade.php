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
                            <h1>Sign Up</h1>
                            @if(session()->has('message'))
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <i class="fa fa-check-circle"></i> <?php echo session()->pull('message') ?>
                                </div>
                            @endif
                            <div class="pb-50 clearfix white-bg">
                                <form method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}
                                    <div class="section-field mb-20">
                                        <label class="mb-10" for="name">Full name* </label>
                                        <input id="name" class="form-control" required type="text" value="{{old('name')}}" placeholder="Full name" name="name">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="section-field mb-20">
                                        <label class="mb-10" for="email">Email Address* </label>
                                        <input type="email" id="email" required placeholder="Email" value="{{old('email')}}" class="form-control" name="email">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="section-field mb-20">
                                        <label class="mb-10" for="password">Password* </label>
                                        <input id="password" class="form-control" required type="password" placeholder="Password" name="password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="section-field mb-20">
                                        <label class="mb-10" for="password-confirm">Confirm Password* </label>
                                        <input id="password-confirm" class="form-control" required type="password" placeholder="Confirm Password" name="password_confirmation">
                                    </div>
                                    <button type="submit" class="button btn-block">
                                        <span>Signup</span>
                                    </button>
                                </form>
                                <p class="mt-20 mb-0 text-center">Already have an account? <a href="{{url('login')}}"> Sign in</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

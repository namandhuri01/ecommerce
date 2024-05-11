@extends('includes.header')
@section('title', 'Password Reset' )

@section('content')
    <div role="main" class="main">
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Reset Password</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="container mb-4 p-4">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5 col-xl-4 mb-5 mb-md-0">
                    <div class="bg-primary rounded p-5">
                        <span class="top-sub-title text-color-light-2">MEMBERS</span>
                        <h2 class="text-color-light font-weight-bold text-4 mb-4"> Password Reset</h2>
    
                        <form method="POST" action="{{ route('password.email') }}" id="shopLoginSignIn">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                        
                                <div class="col-md-12">
                                    <label class="text-color-light" for="email">EMAIL ADDRESS:</label>
                                    <input type="email" value="" maxlength="100" class="rounded-0 bg-light-5 border-0 py-2 px-3 text-1 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="signUpEmail" placeholder="E-mail" required>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-dark   btn-v-3 btn-h-3 font-weight-bold">Reset Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
@endsection

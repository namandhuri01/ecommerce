@extends('includes.header')
@section('title', 'Login | Register')
@section('content')
{{-- TODO: Temprory form field  --}}
<div role="main" class="main">
        <section class="page-header mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Shop</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="font-weight-bold">Login</h1>

                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-5 col-xl-4 mb-5 mb-md-0">
                        <div class="bg-primary rounded p-5">
                            <span class="top-sub-title text-color-light-2">ALREADY A MEMBER?</span>
                            <h2 class="text-color-light font-weight-bold text-4 mb-4">Sign In</h2>

                            <form method="POST" action="/login" id="shopLoginSignIn">
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="form-group col mb-2">
                                        <label class="text-color-light-2" for="shopLoginSignInEmail">EMAIL / USERNAME</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="john.doe@example.com" autofill="" required >
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="text-color-light-2" for="shopLoginSignInPassword">PASSWORD</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="form-group col">
                                        <div class="form-check checkbox-custom checkbox-custom-transparent checkbox-default">
                                            <input class="form-check-input" type="checkbox" id="shopLoginSignInRemember">
                                            <label class="form-check-label text-color-light-2" for="shopLoginSignInRemember">
                                                  Remember me
                                            </label>
                                          </div>
                                    </div>
                                      <div class="form-group col text-right">
                                          <a href="/password/reset" class="forgot-pw text-color-light-2 d-block">Forgot password?</a>
                                      </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col text-right">
                                        <button type="submit" class="btn btn-dark btn-rounded btn-v-3 btn-h-3 font-weight-bold">SIGN IN</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-7 col-xl-8 pt-3">
                        <span class="top-sub-title">NEW USER</span>
                        <h2 class="font-weight-bold text-4 mb-1">Don't have an account? Register Now!</h2>
                        <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
                        <form id="shopLoginRegister" method="POST" action="/register">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <label class="text-color-dark" for="name">NAME:</label>
                                    <input type="text" class="form-control bg-light-5 border-0 rounded" id="name" name="name" placeholder="John Doe" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="text-color-dark" for="email">EMAIL ADDRESS:</label>
                                    <input type="email" class="form-control bg-light-5 border-0 rounded" id="email" name="email" placeholder="John.doe@example.com" required >
                                </div>
                            </div>
                            <div class="form-row">
                                
                                <div class="form-group col-lg-6">
                                    <label class="text-color-dark" for="phone">PHONE:</label>
                                    <input type="tel" class="form-control bg-light-5 border-0 rounded" id="phone" name="phone" placeholder="phone" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="text-color-dark" for="password">PASSWORD:</label>
                                    <input type="password" class="form-control bg-light-5 border-0 rounded" id="password" name="password" placeholder="Password" required>
                                </div>
                                
                            </div>
                
                            <div class="form-row">
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-primary btn-rounded btn-v-3 btn-h-3 font-weight-bold">REGISTER NOW</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
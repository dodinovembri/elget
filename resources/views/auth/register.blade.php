@extends('layouts.auth')

@section('content')

<div class="signup-panel">
    <svg-to-inline path="http://themepixels.me/cassie/assets/svg/direction.svg" class-Name="svg-bg"></svg-to-inline>

    <div class="signup-sidebar">
        <div class="signup-sidebar-body">
            <a href="dashboard-one.html" class="sidebar-logo mg-b-40"><span>ELGET</span></a>
            <h4 class="signup-title">Create New Account!</h4>
            <h5 class="signup-subtitle">It's free and only takes a minute.</h5>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="signup-form">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                            </div>
                        </div><!-- col -->
                    </div><!-- row -->

                    <div class="row mg-b-5">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                        </div><!-- col -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>WhatsApp Number</label>
                                <input type="text" name="whatsapp_number" class="form-control" placeholder="Enter your whatsapp number" required>
                            </div>
                        </div><!-- col -->
                    </div><!-- row -->
                    <div class="row mg-b-5">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                            </div>
                        </div><!-- col -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Enter your password" required>
                            </div>
                        </div><!-- col -->
                    </div><!-- row -->

                    <div class="form-group mg-b-30">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="agree">
                            <label class="custom-control-label tx-sm" for="agree">I have read and agree to your <a href="">Terms of Use</a> and <a href="">Privacy Policy</a></label>
                        </div>
                    </div><br>
                    <div class="form-group d-flex mg-b-0">
                        <button type="submit" class="btn btn-brand-01 btn-uppercase btn-block">Create New Account</button>
                    </div>

                </div>
            </form>
            <p class="mg-t-auto mg-b-0 tx-color-03">Already have an account? <a href="page-signin.html">Signin</a></p>
        </div><!-- signup-sidebar-body -->
    </div><!-- signup-sidebar -->
</div><!-- signup-panel -->
@endsection
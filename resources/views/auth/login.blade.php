@extends('layouts.master')

@section('content')   
<style type="text/css">
    body { background: url("{{ asset('img/bg-login.jpg') }}") !important; }
</style>
        <div class="container-fluid-full">
        <div class="row-fluid">
                    
            <div class="row-fluid">
                <div class="login-box">
                    <div class="icons">
                        <a href="index.html"><i class="halflings-icon home"></i></a>
                        <a href="#"><i class="halflings-icon cog"></i></a>
                    </div>
                    <h2>Login to your account</h2>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        <fieldset>
                            
                            <div class="input-prepend" title="Usuario" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <span class="add-on"><i class="halflings-icon user"></i></span>
                                <input class="input-large span10" id="email" type="email" class="form-control" name="email"
                                 placeholder="Usuario" value="{{ old('email') }}"/>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="clearfix"></div>

                            <div class="input-prepend" title="Password" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <span class="add-on"><i class="halflings-icon lock"></i></span>
                                <input class="input-large span10" name="password" id="password" type="password" placeholder="type password"/>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="clearfix"></div>
                            
                            <label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

                            <div class="button-login">  
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <div class="clearfix"></div>
                    </form>
                    <hr>
                    <h3>Forgot Password?</h3>
                    <p>
                        No problem, <a href="{{ url('/password/reset') }}">click here</a> to get a new password.
                    </p>    
                </div><!--/span-->
            </div><!--/row-->
            

    </div><!--/.fluid-container-->
    
        </div><!--/fluid-row-->
    
 @endsection
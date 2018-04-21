@extends('layouts.app') @section('content')





                <div class="login-clean">
                    <form style="margin-top:114px;" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <h2 class="sr-only">Login Form</h2>
                        <h2 class="text-uppercase text-center" style="font-size:18px;font-weight:bold;">S&#39;authentifier</h2>
                        <div class="illustration"></div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label>-->

                           
                                <!-- col-md-6-->
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus> @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                           
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                             <!-- col-md-6-->
                                <input id="password" type="password" class="form-control" name="password" required> @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                           
                        </div>

                      <!--  <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old( 'remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>-->

                        <div class="form-group">
                         
                            <button class="btn btn-primary btn-block" type="submit" style="background-color:#448ccb;">S'authentifier</button>

                            
                                <a href="{{ route('password.request') }}" class="forgot">vous avez oublié votre mot de pass ?</a></form>
                            </form>
                        </div>
                  
</div>

@endsection
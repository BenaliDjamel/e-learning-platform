@extends('layouts.app') @section('content')



<div class="login-clean">
    <form style="margin-top:50px;padding-top:10px;" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <h2 class="sr-only">Login Form</h2>
        <h2 class="text-uppercase" style="text-align:center;font-size:18px;font-weight:bold;">Inscription</h2>

        <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">


            <input id="nom" type="text" class="form-control" placeholder="Nom" name="nom" value="{{ old('nom') }}" required autofocus> @if ($errors->has('nom'))
            <span class="help-block">
                <strong>{{ $errors->first('nom') }}</strong>
            </span>
            @endif

        </div>


        <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">


            <input id="prenom" type="text" placeholder="Prenom" class="form-control" name="prenom" value="{{ old('prenom') }}" required
                autofocus> @if ($errors->has('prenom'))
            <span class="help-block">
                <strong>{{ $errors->first('prenom') }}</strong>
            </span>
            @endif

        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


            <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required> @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif

        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


            <input id="password" type="password" placeholder="Mot de passe" class="form-control" name="password" required> @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif

        </div>

        <div class="form-group">


            <input id="password-confirm" type="password" placeholder="Confirmer mot de passe" class="form-control" name="password_confirmation"
                required>

        </div>

        <div class="form-group" style="font-weight:normal;">
            <button class="btn btn-primary btn-block" type="submit" style="background-color:#fe5e3a;">S'inscrire</button>
        </div>
        <a href="{{ route('login') }}" class="forgot">vous avez déjà un compte ? s'authentifier maintenant</a>

    </form>

</div>
@endsection
@extends('layouts.app')

@section('body-class', 'signup-page') 
@section('titulo', 'LOGIN')

@section('content')
<div class="header header-filter" style="background-image: url('{{asset('img/city.jpg')}}'); background-size: cover; background-position: top center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="card card-signup">
                            <form class="form" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="header header-primary text-center">
                                    <h4>Iniciar Sesion</h4>
                                    <!--<div class="social-line">
                                        <a href="#pablo" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>-->
                                </div>
                                <p class="text-divider">Ingresa Tus Datos</p>
                                <div class="content">
                                    
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email...">
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <input type="password" placeholder="Password..." id="password" type="password" class="form-control" name="password" required />
                                    </div>                            
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                            Recordarme
                                        </label>
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-simple btn-primary btn-lg">Ingresar</a>
                                </div>
                                <div class="footer text-center">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Olvidaste Tu Contraseña?
                                </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            

        </div>
@endsection

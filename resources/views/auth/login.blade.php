@extends('layouts.main')

@section('title', 'Inicio')

@section('description', '')

@section('styles')

<style>
 body {
    background: url('{{ asset('img/slide1.jpg') }}')no-repeat center center fixed;
    background-size: cover;
}   
</style>


@endsection

@section('content')

<div class="row">
    <div class="col s12 m4 col-center mt-50">

        <form class="card col s12" method="POST" action="{{url('/login')}}">
                {{ csrf_field() }}
                
                <p class="center-align mb-15">BIENVENIDO</p>

                <div class="divider mb-15"></div>

                <div class="card-content">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required autofocus>
                            <label for="email">Ingresa tu email</label>     
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock_outline</i>
                            <input id="password" type="password" class="validate" name="password" required>
                            <label for="password" class="validate">Contraseña</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6 nopadding">                            
                            <a class="blue-text center-align waves-effect waves-light btn-flat btn-block" href="{{ url('/register') }}">Registrarse</a>
                        </div>
                        <div class="input-field col s6 nopadding">                            
                            <input type="submit" class="blue waves-effect waves-teal btn btn-block">
                        </div>                      
                    </div>
                </div>
                <div class="divider"></div>
                <div class="row  mb-0">
                    <div class="mt-10 mb-15 center-align">
                        <a class="red-text underline" href="!#">Olvide mi contraseña</a>
                    </div>
                </div>
            </form>

    </div>
</div>

@endsection
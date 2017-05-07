@extends('layouts.main')

@section('title', 'Inicio')

@section('description', '')

@section('content')

<div class="row">
    <div class="col s12 m4 col-center mt-50">

        <form class="card  col s12" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}

            <p class="card-title center-align">Registro | Bienvenido</p>
            
            <div class="card-content">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}" required autofocus>
                        <label for="email">Ingres tu Nombre</label>     
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required autofocus>
                        <label for="email">Ingres tu email</label>     
                    </div>
                </div>
                        
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock_outline</i>
                        <input id="password" type="password" class="validate" name="password" required>
                        <label for="password" class="validate">Password</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock_outline</i>
                        <input id="password_confirm" type="password" class="validate" name="password_confirmation" required>
                        <label for="password" class="validate">Confirme Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s5 col-center">                            
                        <button type="submit" class="waves-effect waves-light btn pull-right">
                            Registrar
                        </button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>

@endsection
@extends('layouts.main')

@section('title', 'Registro')

@section('description', '')

@section('styles')

<style>
 body {
    background: url('{{ asset('img/slide1.jpg') }}')no-repeat center center fixed;
    background-size: cover;
}
.input-field .prefix {
    top: 15px;
    font-size: 1.5rem;
}
.input-field .prefix ~ input,
.input-field .prefix ~ textarea,
.input-field .prefix ~ label,
.input-field .prefix ~ .validate ~ label,
.input-field .prefix ~ .autocomplete-content {
    margin-left: 2.5rem;
}
</style>
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>

@endsection

@section('content')

<div class="row">
    <div class="col s12 m4 col-center mt-50">

        <h5 class="mt-30 mb-30 raleway quote"><B>REGISTRO</B> </h5>
        <form class="card col s12 pt-30" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}

       
                    <div class="input-field mt-0 col s12">
                        <i class="fa fa-user prefix"></i>
                        <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}" required autofocus>
                        <label for="name">Nombre(s)</label>     
                    </div>
                    <div class="input-field mt-0 col s12">
                        <i class="fa fa-user prefix"></i>
                        <input id="last_name" type="text" class="validate" name="last_name" value="{{ old('last_name') }}" required >
                        <label for="last_name">Apellido Paterno</label>     
                    </div>
                    <div class="input-field mt-0 col s12">
                        <i class="fa fa-user prefix"></i>
                        <input id="second_lname" type="text" class="validate" name="second_lname" value="{{ old('second_lname') }}" required >
                        <label for="second_lname">Apellido Materno</label>     
                    </div>

                    <div class="input-field mt-0 col s12">
                        <i class="fa fa-envelope prefix"></i>
                        <input id="register_email" type="email" class="validate" name="email" value="{{ old('email') }}" required >
                        <label for="email">Ingres tu email</label>     
                    </div>

                    <div class="input-field mt-0 col s12">
                        <i class="fa fa-phone prefix"></i>
                        <input id="tel" type="tel" class="validate" name="tel" value="{{ old('tel') }}" required>
                        <label for="tel">Teléfono</label>     
                    </div>
               
                    <div class="input-field mt-0 col s12">
                        <i class="fa fa-lock prefix"></i>
                        <input id="register_password" type="password" class="validate" name="password" required>
                        <label for="password" class="validate">Password</label>
                    </div>
             
                    <div class="input-field mt-0 col s12">
                        <i class="fa fa-lock prefix"></i>
                        <input id="password_confirm" type="password" class="validate" name="password_confirmation" required>
                        <label for="password" class="validate">Confirme Password</label>
                    </div>
              
                <div class="col s12 mb-30">
                    <p><i>(*) Todos los campos son requeridos</i></p>
                </div>
                <div class="row">
                    <div class="input-field col s5 col-center">                            
                        <button type="submit" class="waves-effect waves-light btn pull-right">
                            Registrar
                        </button>
                    </div>
                </div>

        </form>

    </div>
</div>

@endsection
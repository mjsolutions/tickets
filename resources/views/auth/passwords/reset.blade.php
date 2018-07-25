@extends('layouts.main')

@section('title', 'Cambiar contraseña')

@section('description', '')

<!-- Main Content -->
@section('content')

<div class="image-header bg-5 overlay overlay-5">
    <div class="row white-text">
        <h4>Cambiar contraseña</h4>
        <div class="divider"></div>
    </div>
</div>

<div class="container">
    <div class="row mt-100">
        <div class="col s10 m8 col-center mb-30">

            <div class="row">
                <h5 class="mt-30 raleway quote">Cambiar contraseña</h5>
                <p><i>* ingresa el email de la cuenta con que te registraste.</i></p>
            </div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            {!! Form::open(['url' => 'password/reset', 'method' => 'POST', 'id' => 'contactForm'])!!}

                {!! Form::hidden('token', $token) !!}

                <div class="input-field col m12 s12">

                    {!! Form::label('email','Direccion de email') !!}
                    @if ($errors->has('email'))
                    {!! Form::email('email', old('email', $email), ['class' => 'validate invalid', 'required']) !!}
                    <span class="helper-text" data-error="{{ $errors->first('email') }}" data-success="right">{{ $errors->first('email') }}</span>
                    @else
                    {!! Form::email('email', old('email', $email), ['class' => 'validate', 'required']) !!}         
                    @endif

                </div>

                <div class="input-field col m12 s12">

                    {!! Form::label('password','Nueva contraseña') !!}
                    @if ($errors->has('password'))
                    {!! Form::password('password', ['class' => 'validate invalid', 'required']) !!}
                    <span class="helper-text" data-error="{{ $errors->first('password') }}" data-success="right">{{ $errors->first('password') }}</span>
                    @else
                    {!! Form::password('password', ['class' => 'validate', 'required']) !!}         
                    @endif

                </div>

                <div class="input-field col m12 s12">

                    {!! Form::label('password-confirm','Confirma nueva contraseña') !!}
                    @if ($errors->has('password_confirmation'))
                    {!! Form::password('password_confirmation', ['class' => 'validate invalid', 'id' => 'password-confirm', 'required']) !!}
                    <span class="helper-text" data-error="{{ $errors->first('password_confirmation') }}" data-success="right">{{ $errors->first('password_confirmation') }}</span>
                    @else
                    {!! Form::password('password_confirmation', ['class' => 'validate', 'id' => 'password-confirm', 'required']) !!}         
                    @endif

                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Cambiar Password
                        </button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

@extends('layouts.main')

@section('title', 'Recuperación de contraseña')

@section('description', '')

<!-- Main Content -->
@section('content')

<div class="image-header bg-5 overlay overlay-5">
    <div class="row white-text">
        <h4>Recuperar contraseña</h4>
        <div class="divider"></div>
    </div>
</div>

<div class="container">
    <div class="row mt-100">
        <div class="col s10 m8 col-center mb-30">

                <div class="row">
                    <h5 class="mt-30 raleway quote">Recuperar contraseña</h5>
                </div>

                @if (session('status'))
                    <div class="col z-depth-2 p-30 indigo">
                
                        <h5 class="center-align white-text">{{ session('status') }}</h5>
                        <div class="divider col-center col s10"></div>
                        <p class="center-align white-text"><i>* El email puede tardar algunos minutos.</i></p>
                
                    </div>
                @else
                    <p><i>* ingresa el email de la cuenta con que te registraste.</i></p>

                    {!! Form::open(['url' => '/password/email', 'method' => 'POST', 'id' => 'contactForm'])!!}

                        <div class="row">
                            
                            <div class="input-field col m12 s12">
            
                                {!! Form::label('email','Email') !!}
                                @if ($errors->has('email'))
                                {!! Form::email('email', old('email'), ['class' => 'validate invalid', 'required']) !!}
                                <span class="helper-text" data-error="{{ $errors->first('email') }}" data-success="right">{{ $errors->first('email') }}</span>
                                @else
                                {!! Form::email('email', old('email'), ['class' => 'validate', 'required']) !!}         
                                @endif
                
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Enviar enlace para cambiar la contraseña
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}

                @endif



        </div>
    </div>
</div>
@endsection

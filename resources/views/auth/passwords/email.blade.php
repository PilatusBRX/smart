@extends('layouts.app')

@section('content')

        <div class="container">
                <div class="row"><h3>Criar nova senha</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="input-field col s6">

                                <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}"  required>
                                <lable>E-mail</lable>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div><br>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn blue-grey darken-2">
                                    {{ __('Enviar senha') }}
                                </button>
                                <br>
                                <p>Você receberá uma nova senha no e-mail informado</p>
                                <br><br><br><br><br><br><br><br><br><br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

@endsection

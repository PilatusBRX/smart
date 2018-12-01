@extends('layouts.app')

@section('content')
<br><b></b>

<div class="container" >

    <div class="row"><h3>Cadastre-se</h3></div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

              <div class="input-field col s6">

                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                     <label>Nome</label>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

          <div class="input-field col s6">

                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                     <label>E-mail</label>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
            </div>



          <div class="input-field col s6">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                     <label>Senha</label>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            </div>


          <div class="input-field col s6">

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                 <label>Confirmar senha</label>
         </div><br>



            <div class="form-group row mb-0">
                    <button  type="submit" class="btn blue-grey darken-2">
                        {{ __('Cadastrar-se') }}
                    </button>
            </div>

        </form>
</div>


@endsection

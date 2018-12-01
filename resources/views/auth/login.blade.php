@include('layouts.header')

<div class="container">
                <div class="row"><h3 style="">Login</h3></div><br><br>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

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

                    <p>
                        <label>
                             <input type="checkbox" name="remember" id="remember">
                             <span>Lembrar-me</span>
                        </label>
                    </p>


                    <br><br>

                    <div class="input-field col s8">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn blue-grey darken-2">
                                {{ __('Entar') }}
                            </button>

                            <a class="btn blue-grey darken-2" href="{{ route('password.request') }}">
                                {{ __('Esqueceu a senha ?') }}
                            </a>
                        </div>
                    </div><!--Forgot Your Password?-->
            </form>
    </div>
    <br><br><br><br><br>
    @include('layouts.footer')

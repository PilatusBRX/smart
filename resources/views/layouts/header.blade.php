<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Smart!</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
  <link rel="stylesheet" href="/css/link.css">

  <style>
      .icon-block {
        padding: 0 15px;
      }
      .icon-block .material-icons {
          font-size: inherit;
      }

  </style>
</head>
<body>

     <nav class="blue-grey darken-2">
         <div class="container">
             <div class="nav-wrapper">
               <a  href="/" class="brand-logo "><i style="font-size: 44px;" class="material-icons">all_inclusive</i> Smart!</a>
               <a href="/" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

               <ul  class="right hide-on-med-and-down">

                 @if (Auth::guest())
                     <li><a href="/"><i class="material-icons">home</i> </a></li>
                     <li><a href="{{ url('/login') }}">Entrar</a></li>
                     <li><a href="{{ url('/register') }}">Cadastro</a></li>

                 @else
                <li><a href="/"><i class="material-icons">home</i> </a></li>
                 <li><a  href="/meus-links">Meus links</a></li>
                   <li><a href="#"><b>Bem-vindo(a)</b>,<b style="margin-left: 10px;">{{ Auth::user()->name }}</b></a></li></li>
                   <li>

                       <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                             Sair
                       </a>

                       <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                           {{ csrf_field() }}
                       </form>

                   </li>

                 @endif
               </ul>


               <ul class="sidenav" id="mobile-demo">

                   @if (Auth::guest())
                         <li> <a href="/">Home</a></li>
                       <li><a  href="/meus-links">Meus links</a></li>
                       <li><a href="{{ url('/login') }}">Entrar</a></li>
                       <li><a href="{{ url('/register') }}">Cadastro</a></li>
                   @else

                   <li> <a href="/">Home</a></li>
                   <li><a  href="/meus-links">Meus links</a></li>
                     <li><a href="#"><b>Bem-vindo(a)</b>,<b style="margin-left: 10px;">{{ Auth::user()->name }}</b></a></li></li>
                     <li>
                         <a href="{{ url('/logout') }}"
                             onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                             Sair
                         </a>
                         <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                             {{ csrf_field() }}
                         </form>
                     </li>

                   @endif
                </ul>
             </div>
         </div>
      </nav>

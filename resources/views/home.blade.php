@extends('layouts.app')
@section('header')
<div class="row">
    <div class="col">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="collapse navbar-collapse" id="navbarColor01">
                <a class="navbar-brand" href="{{ url('/') }}">
                   Inicio
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
@endsection

@section('content')
    
<div class="row">
    <div class="col-6">
        <div class="m-3">
            <h2>Chat de: {{Auth::user()->name}}</h2>
        </div>
        <div>
            <iframe  class="col embed-responsive-item" src="{{ url('/mensajes') }}" frameborder="1"></iframe><br>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <form action="{{ url('/mensajes') }}" method="POST">
            @csrf
            <input type="hidden" name="usuario" value="{{ Auth::user()->name }}">
            <h5>Ingrese su mensaje: </h5>
            <div>
                <div  class="form-group" >
                    <textarea class="form-control" type="text" name="mensaje">
                    </textarea>
                </div>
                <div>
                    <button class="btn btn-info" type="submit">Enviar Mensaje</button>
                </div>
            </div>
        </form>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary mt-3">
    <a class="navbar-brand" href="#">Footer</a>
</nav>

@endsection

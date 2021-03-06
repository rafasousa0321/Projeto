<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    </head>
    <body style="background-color: #e3e3e3">
        <div class="container">
                <div class="row">                    
                <div class="col-md-12">
                    <br>
                    <br>
                    <h1 style="color: #0000ff">@yield('header')</h1> 
                    </div> 
                    <div class="col-md-12">
                        @yield('conteudo')
                        <br>
                        <br>
                        <br>
                    </div> 
                    <div class="col-md-2">
                        <a href="{{route('index')}}"><i class="fas fa-home"></i></i>   Início</a>
                    </div>
                    <div class="col-md-2">
                        <a href="{{route('noticias')}}"><i class="fas fa-newspaper"></i></i>   Notícias</a>
                    </div>
                    <div class="col-md-2">
                        <a href="{{route('empresa')}}"><i class="fas fa-building"></i></i>   Empresa</a>
                    </div>
                    <div class="col-md-2">
                        <a href="{{route('onde.estamos')}}"><i class="fas fa-map-marker-alt"></i></i>   Onde Estamos</a>
                    </div>
                    <div class="col-md-2">
                        <a href="{{route('contactos')}}"><i class="fas fa-envelope"></i></i>   Contactos</a>
                    </div>
                    <div class="col-md-2">
                        <a href="{{route('form')}}"><i class="fas fa-id-card"></i></i>   Formulário</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/all.min.js')}}"></script>
    </body>
</html>
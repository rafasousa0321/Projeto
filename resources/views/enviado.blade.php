@extends ('layout')
@section ('titulo')
    Formulário Submetido
@endsection
@section ('header')
    Formulário Submetido
@endsection
@section ('conteudo')
    <h5>Nome: </h5>{{$nome}}
    <h5>Morada: </h5>{{$morada}}    
    <h5>Data de Nascimento: </h5>{{$datanasc}}
    <h5>Password: </h5>{{$password}}

@endsection
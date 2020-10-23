@extends ('layout')
@section ('titulo')
    Sites de Noticias
@endsection
@section ('header')
    Sites de Noticias
@endsection
@section ('conteudo')
    @foreach($noticias as $noticias)
        <h3>{{$sites}}</h3>
    @foreach
@endsection
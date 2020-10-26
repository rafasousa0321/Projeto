@extends ('layout')
@section ('titulo')
    Sites de Noticias
@endsection
@section ('header')
    Sites de Noticias
@endsection
@section ('conteudo')
@foreach($sites as $site)
        <h5><a href="{{$site}}">{{$site}}</h5>
@endforeach
@endsection
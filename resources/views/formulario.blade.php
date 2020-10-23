@extends ('layout')
@section ('titulo')
    Formulário
@endsection
@section ('header')
    Formulário
@endsection
@section ('conteudo')
    <form method="post" action="{{route('enviado')}}">
        @csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome">
    <label for="morada">Morada</label>
    <input type="text" name="morada">
    <label for="automovel">Automóvel</label>
    <select name="automovel">
        <option value="Bmw">Bmw</option>
        <option value="audi">Audi</option>
        <option value="Nissan">Nissan</option>
        <option value="Volkswagen">Volkswagen</option>
    </select>
    <button type="submit">enviar</button>
    </form>
@endsection
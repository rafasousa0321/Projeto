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
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="nome">
  </div>
  <div class="form-group">
    <label for="morada">Morada</label>
    <input type="text" class="form-control" name="morada">
  </div>
  <div class="form-group">
    <label for="datanasc">Data de nascimento</label>
    <select name="datanasc">
        @for($i = 1900; $i < 2004; $i++)
            <option value="{{$i}}">{{$i}}</option>
        @endfor
    </select>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection

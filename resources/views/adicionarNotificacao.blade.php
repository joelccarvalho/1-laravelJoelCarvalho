@extends('layouts.app')

@section('content')

<form class="container" method="post" action="adicionarNotificacao">
    <div class="row">
      <center><h1>Notificação:</h1><br><textarea name="conteudo" rows="5" cols="80"></textarea>
        <br><button type="submit" class="btn btn-primary">Adicionar</button></center>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" >
    </div>
</form>

@endsection

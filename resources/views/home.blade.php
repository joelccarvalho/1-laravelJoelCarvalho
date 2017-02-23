@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <center><div class="panel-heading"><h2>Olá {{ Auth::user()->name }}</h2></div></center>
            </div>
            <!--Mostrar mensagens de sucesso-->
            <?php if (Session::has('message')): ?>
              <div class="alert alert-success">{{ Session::get('message') }}</div>
            <?php endif; ?>

            <div class="list-group">
              <p class="lead">Lista de notificações</p>
              <?php
              $not = DB::table('notificacoes')->get();
              foreach ($not as $conteudo)
              {?>
                <table class="table">
                  <tr>
                   <td class="list-group-item"><?php echo $conteudo->conteudo; ?>
                   <a href="delete&<?php echo $conteudo->id; ?>">Delete</a>
                   </td>
                  </tr>
                </table>
              <?php
              }
              ?>
            </div>
            <center><a href="{{ url('/adicionarNotificacao') }}"><button type="submit" class="btn btn-primary">Adicionar nova</button></a></center>
        </div>
    </div>
</div>
@endsection

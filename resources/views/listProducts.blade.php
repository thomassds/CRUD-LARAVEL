<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supermarket</title>

    <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}"/>
</head>
<style>

    div#productsInputs{
    display: flex;
    justify-content: space-evenly;
    }
</style>

<body>
@extends('layouts.app')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

      <h2>Lista de Produtos</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Descrição</th>
              <th>Corredor</th>
              <th>Prateleira</th>
              <th>Lado</th>
              <th>Editar</th>
              <th>Excluir</th>
            </tr>
          </thead>
          <tbody>
          @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->hall }}</td>
                <td>{{ $product->shelf }}</td>
                <td>{{ $product->side }}</td>
                <td>

                    <form action="{{ route('editProduct', ['product' =>$product->id]) }}" method="get">
                        @csrf
                        <input type="hidden" name="description" value="{{ $product->id }}}">
                        <button type="submit" class="btn btn-primary btn-sm">Editar</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('destroyProduct', ['product' =>$product->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="description" value="{{ $product->id }}}">
                        <button type="submit" class="btn btn-danger btn-sm">Remover</button>
                    </form>

                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </main>
@stop
<script src="{{ asset('site/jquery.js') }}"></script>
<script src="{{ asset('site/bootstrap.js') }}"></script>

</body>
</html>

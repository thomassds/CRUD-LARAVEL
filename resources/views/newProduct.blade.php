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
        form#formRegister{
            width: 1200px;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
        }
        div#inputs{
            width: 1000px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
    </style>
<body>
@extends('layouts.app')
@section('content')
<div class="col-md-8 order-md-1">
      <h4 class="mb-3">Novo Produto</h4>
      <form class="needs-validation" novalidate action="{{route('post')}}" method="post">
      @csrf
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="description">Descrição</label>
            <input type="text" class="form-control" id="description"  name="description" placeholder="" value="" required>
          </div>
        </div>


        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Corredor</label>
            <select class="custom-select d-block w-100" id="country"  name="hall" required>
              <option>A</option>
              <option>B</option>
              <option>C</option>
            </select>
          </div>

          <div class="col-md-3 mb-3">
            <label for="zip">Prateleira</label>
            <input type="text" class="form-control" id="zip" placeholder="" name="shelf" required>
          </div>

          <div class="col-md-4 mb-3">
            <label for="state">Direção</label>
            <select class="custom-select d-block w-100" id="state"  name="side" required>
              <option>Direita</option>
              <option>Esquerda</option>
            </select>
          </div>
        </div>

        <button class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar</button>
        </form>
@stop
<script src="{{ asset('site/jquery.js') }}"></script>
<script src="{{ asset('site/bootstrap.js') }}"></script>

</body>
</html>

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
        body{
            margin: 0 0 0 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: #1b1e21;
        }
        view#register{
            margin-top: 100px;
            border-radius: 10px;
            width: 1200px;
            height: 300px;
            background: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
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

        view#products{
            margin-top: 30px;
            border-radius: 10px;
            width: 700px;
            height: 200px;
            background: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;

        }
        table {
            width: 500px;

        }

        div#productsInputs{
        display: flex;
        justify-content: space-between;

        }


    </style>

<body>

    <view id="register">
        <h1> Xastre Market </h1>
        <form id= "formRegister" action="{{route('post')}}" method="post">
            @csrf
            <div id="inputs">
                <div>
                    <label>Descrição</label>
                        <br>
                    <input type="text" name="description">
                </div>

                <div>
                    <label>Corredor</label>
                        <br>
                    <input type="text" name="hall">
                </div>

                <div>
                    <label>Prateleira</label>
                        <br>
                    <input type="text" name="shelf">
                </div>

                <div>
                    <label>Direção</label>
                        <br>
                    <input type="text" name="side">
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>

        </form>
    </view>
    <br>

    <view id="products">
    <table>
        <tr>
            <td>ID</td>
            <td>Descrição</td>
            <td>Corredor</td>
            <td>Prateleira</td>
            <td>Lado</td>
        </tr>

        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->hall }}</td>
            <td>{{ $product->shelf }}</td>
            <td>{{ $product->side }}</td>
            <td>


            <div id="productsInputs">
                <form action="{{ route('editProduct', ['product' =>$product->id]) }}" method="get">
                    @csrf
                    <input type="hidden" name="description" value="{{ $product->id }}}">
                    <button type="submit" class="btn btn-primary btn-sm">Editar</button>
                </form>
                <form action="{{ route('destroyProduct', ['product' =>$product->id]) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="description" value="{{ $product->id }}}">
                    <button type="submit" class="btn btn-danger btn-sm">Remover</button>
                </form>
            </div>
            </td>
        </tr>
        @endforeach
    </table>
    </view>

<script src="{{ asset('site/jquery.js') }}"></script>
<script src="{{ asset('site/bootstrap.js') }}"></script>

</body>
</html>

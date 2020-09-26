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
    view#edit{
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
    form#formEdit{
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
    <view id="edit">
        <h1> Xastre Market </h1>
        <form id ='formEdit' action="{{ route( 'editProduct', [ 'product' => $product->id ] ) }}" method="post">
            @csrf
            @method('put')
            <div id="inputs">
                <div>
                    <label>Descrição</label>
                    <br>
                    <input type="text" name="description" value="{{ $product->description }}">
                </div>

                <div>
                    <label>Corredor</label>
                    <br>
                    <input maxlength="1" type="text" name="hall" value="{{ $product->hall }}">
                </div>
                <div>
                    <label>Prateleira</label>
                    <br>
                    <input maxlength="1" type="number" name="shelf" value="{{ $product->shelf }}">
                </div>

                <div>
                    <label>Direção</label>
                    <br>
                    <input maxlength="1" type="text" name="side" value="{{ $product->side }}">
                </div>
            </div>

                <button type="submit" class="btn btn-primary btn-lg">Salvar</button>

        </form>
    </view>


    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
</body>
</html>

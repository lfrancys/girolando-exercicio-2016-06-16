<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        #content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
<div class="container">
    <div id="content">
        <form action="{{route('sair.index')}}" method="get">

            <div class="title">Bem vindo {{ $usuario->nomeUsuario }} !</div>

            <input type="submit" name="btnSair" value="Sair">

        </form>

        @if(\Session::has('flash_notice'))
            <div class="alert-box success">
                <h2>{{ Session::get('flash_notice') }}</h2>
            </div>
        @endif
    </div>
</div>
</body>
</html>

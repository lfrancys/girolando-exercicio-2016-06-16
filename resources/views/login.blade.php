




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
        <h1> Projeto Girolando</h1>

        <form action="{{ route('autenticar.store') }}" method="post">
            <input type="hidden" value="{{ csrf_token() }}" name="_token" />

            <table style="font-family: arial">
                <tr>
                    <td> Telefone: </td>
                    <td> <input type="text" name="telefone" /> </td>
                </tr>
                <tr>
                    <td> Senha: </td>
                    <td> <input type="password" name="senha" /> </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" value="Entrar"/>
                    </td>
                </tr>
            </table>

            @if(\Session::has('flash_notice'))
                <div class="alert-box success">
                    <h2>{{ Session::get('flash_notice') }}</h2>
                </div>
            @endif
        </form>
    </div>
</div>
</body>
</html>

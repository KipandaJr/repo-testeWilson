<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=roboto:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            .container{
                font-family: roboto;
                background: #ccc;
                display: flex;
                flex-direction: column;
                padding: 10px;
                height: 150px;
                justify-content: center;
                font-size: 20px;
                text-transform: uppercase;
                font-weight:lighter;
                border-radius: 10px;
                margin:auto;
            }
            .container div{
                display: flex;
                justify-content: space-around;
            }
            a{
                background: red;
                padding: 10px;
                width: 40%;
                align-self: center;
                margin-top: 10px;
                text-align: center;
                border-radius: 10px;
                text-decoration: none;
                color:#fff;
                background: #473c3cbe;
                transition:.5s;
            }
            a:hover{
                background: #473c3c;
            }
        </style>
    </head>
   <body >

        <div class="container">
            <div>
                @foreach ($data as $item)
                    <div style="cursor:pointer;padding:10px;border:1px solid #473c3c;border-radius:10px;background:#ddd; box-shadow:2px 3px 4px #473c3c;">
                        nome: {{ $item["name"]}}<br>
                        bonus: {{ $item["bonus"]}}<br>
                    </div>
                @endforeach
            </div>
            <a href="{{route('actualiza')}}">Actualizar</a>
        </div>
   </body>
</html>

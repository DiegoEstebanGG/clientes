<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .first {
                margin: 10px 0px;
                    }
            .second {
                margin: 10px 0px;
                    }
                    
            .third {
                margin: 10px 0px;
                    }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        <div class="content">
<form>            <div class="first">
            <input type="text" name="nombre" placeholder="Nombres"/>
            <input type="text" name="apellido" placeholder="Apellidos"/>
            </div>
            <div class="second">
            <input type="text" name="identificacion" placeholder="Identifricación"/>
            <input type="text" name="correo" placeholder="Email"/>
            </div>
            <div class="third">
            <input type="text" name="telefono" placeholder="Teléfono"/>
            <input type="text" name="direccion" placeholder="Dirección"/>
            </div>
            <button>enviar</button>
</form>
        </div>
        </div>
    </body>
</html>

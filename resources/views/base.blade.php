<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VMDB</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin:  0 25% 0 25% ;
            }
            /* body{
                background: url("bio.jpg");
            } */

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
                color: orange;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                background: #0000;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .card {
                border: 2px solid gray;
                width: auto;
                height: auto;
                padding: 2rem;
                display: flex;
                justify-content: center;
                flex-direction: column;
                margin-top: 25px;
                background: whitesmoke;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
        </style>
    </head>
    <body>
        <div class="container">
                <div class="links">
                    <a href="/actors">Actors</a>
                    <a href="/movies">Movies</a>
                </div>
                @yield('main')
        </div>
    </body>
</html>
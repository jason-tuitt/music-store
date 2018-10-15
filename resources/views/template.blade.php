<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>



        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Roboto', sans-serif;
                /*font-weight: 100;*/
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                /*align-items: center;*/
                display: flex;
                flex-direction: column;
                align-content: center;
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

            .table-list {
                width:50%;
                margin: 0 auto;
            }
            .button-container{
                width: 20%;
                margin: 0 auto;
            }

            .table-list td {
                width:100px;
                color: #636060 !important;
                font-weight: 500;
            }

        </style>
    </head>
    <body>
        <h1>List of @yield('h1')</h1>
        <h2>My name is @yield('name')</h2>
        <div class="flex-center position-ref full-height">
            @yield('table-content')
            <div class="button-container">
            <a href="{{url('/')}}"><button class="back-button btn btn-outline-dark">Go back to home</button></a>
            </div>
        </div>
    </body>
    <footer style="text-align: center;">
        Simple Laravel Project &copy; 2018 
    </footer>
</html>

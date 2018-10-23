<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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
                display: flex;
                justify-content: center;
                margin-bottom: 10px;
            }

            .table-list td {
                width:100px;
                color: #636060 !important;
                font-weight: 500;
            }

            .cardList {
                display: flex;
                padding:10px;
                flex-wrap: wrap;
                align-items:flex-start;
            }

            .cardListItem {
                flex:1 0 25%;
                max-width: 25%;
                min-height: 400px;
                padding: 5px 10px;
            }

            .card {
                min-height:100%;
            }

            .appBody {
                padding:20px 50px 0 50px;
            }
            
            .contentBody {
                min-height: 100vh;
            }

            .modal {
                height:100vh;
                width:100vw;
                position:fixed;
                background-color: rgba(0,0,0,.5); 
                display:block;
                /*z-index: 1;*/
            }

            .btn {
                margin: 5px 5px;
            }

        </style>
    </head>
    <body>
        <div class="appBody">
        <h1>List of @yield('h1')</h1>

        <div class="button-container">
            <a href="{{url('/')}}"><button class="back-button btn btn-outline-dark">Go back to home</button></a>
        </div>

        <div class="contentBody">
            @yield('form')      
            @yield('table-content')
        </div>

        <footer style="text-align: center;">
        Simple Laravel Project &copy; 2018 
        </footer>
        </div>
    </body>
    
</html>

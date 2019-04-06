<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PMS 380 Project Components</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #242424;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .link {
                color:aqua;
            }
        </style>
    </head>
    <body>
        <li>
            <a class="link" href="/components/task">Task</a>
        </li>
        <li>
            <a class="link" href="/components/issue">Issue</a>
        </li>
        <li>
            <a class="link" href="/components/deliverable">Deliverable</a>
        </li>
        {{-- <div>
            <a class="link" href="/components/task">Task Component</a>
        </div> --}}
    </body>
</html>
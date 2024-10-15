<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        footer {
            background-color: black;
            position: absolute;
            bottom: 0;
        }

        .text-center {
            text-align: center;
        }
    </style>
    @vite(["resources/sass/app.scss","resources/js/app.js"])

    @include("plantilla2")

</head>
<body>
       <h1>Contenido de la pagina</h1> 
</body>

<footer style="text-align: center; background-color: #f8f9fa; padding: 20px;">
    <p class="text-center">
           {{ Auth::user()->name }} <br>
           {{ Auth::user()->email }}</p>
</footer>
</html>
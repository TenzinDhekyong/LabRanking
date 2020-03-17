<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script
         src="https://code.jquery.com/jquery-3.4.1.js"
         integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
         crossorigin="anonymous"></script>
         <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <script>window.Laravel = {csrfToken : '{{csrf_token()}}'}</script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic|Material+Icons">
        <link rel="stylesheet" href="https://unpkg.com/buefy@0.8.13/dist/buefy.min.css">
        <!-- Styles -->
        
    </head>
    <body>
    <div id="ranking">
        
    </div>
    </body>
    <script src="https://unpkg.com/vue"></script>
    <!-- Full bundle -->
    <script src="https://unpkg.com/buefy/dist/buefy.min.js"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
</html>

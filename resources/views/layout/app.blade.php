<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

    <title>{{config('app-name', "Nodes App")}}</title>
    <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}">
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>  
    <script>
        $(document).ready(function() {
            $('#homeAdm').DataTable();
        } );
    </script>   
</body>
</html>
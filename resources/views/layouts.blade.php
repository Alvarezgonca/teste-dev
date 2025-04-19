<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Teste Dev</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>


    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">
        <header-component
            create-url="{{ route('contatos.create') }}"
            logo-url="{{ asset('img/libre_cor_branca.png') }}"
            index-Url="{{ route('contatos.index') }}">
        </header-component>

        @include('components.msg')

        @yield('content')

        <footer-component></footer-component>
        <script src="{{asset('js/mask.js')}}"></script>
    </div>

    {{--
    <script>
        $(document).ready(function () {
            $("#telefone").mask("(00) 0000-0000");
        });
    </script> --}}
</body>

</html>

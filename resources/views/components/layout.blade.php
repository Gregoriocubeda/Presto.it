
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Presto - Vendi Facile</title>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        {{-- CDN google fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
        {{-- Font Awesome CDN --}}
        <script src="https://kit.fontawesome.com/0992f05ded.js" crossorigin="anonymous"></script>
        {{-- Bootstrap --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    <body class="Wrapper">
    <x-navbar></x-navbar>

        {{$slot}}
        

        <a  id="button"></a>

    <x-footer></x-footer>
    </body>
    </html>

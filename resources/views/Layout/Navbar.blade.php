<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <style>
        .remove-arrow::-webkit-inner-spin-button,
        .remove-arrow::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .remove-arrow {
            -moz-appearance: textfield;
        }

        .scrollbar::-webkit-scrollbar {
            width: 16px;
        }

        .scrollbar::-webkit-scrollbar-track{
            background-color: white;
        }

        .scrollbar::-webkit-scrollbar-thumb {
            background-color: #F5682A;
        }

        html {
            scroll-behavior: smooth;
        }

        .preserveLines {
            white-space: pre-wrap;
        }
    </style>
    <link rel="stylesheet" href="./resources/output.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image" href="{{ url('img/assets/logoicon.png') }}">
    <title>Chick&Check @yield('title')</title>
</head>

<body class="font-[poppins] font-medium scrollbar">

    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>

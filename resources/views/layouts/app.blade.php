<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        #backgroundColorPicker {
            width: 100px;
            height: 40px;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }
    </style>
</head>
<body class="font-sans antialiased" id="body"  style=" direction: rtl;text-align:right">
    <div class="min-h-screen">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <!-- Header content here -->
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            @include('backend.home.dashboardinfo')
        </main>

        <div class="col-md-2" style="position:right;float:left">
            <div class="card" style="position:center;float:center" >
                <div class="card-body"style="position:center;float:center">

                        <h6 class="card-title"style="position:center;float:center"> لون الخلفية</h6>
                        <input type="color" id="backgroundColorPicker" class="form-control" value="#ffffff" hidden>

                        <button id="whiteButton" class="btn btn-primary">أبيض</button>
                        <button id="blackButton" class="btn btn-primary">أسود</button>


                </div>

            </div>
        </div>




        <div class="col-md-12">
            <div class="card">

            </div>
        </div>
    </div>

    <!-- Place your script at the end of the body -->
    <script>
        document.getElementById('backgroundColorPicker').addEventListener('input', function(event) {
            document.body.style.backgroundColor = event.target.value;
            localStorage.setItem('backgroundColor', event.target.value);
        });

        document.addEventListener('DOMContentLoaded', function() {
            const savedColor = localStorage.getItem('backgroundColor');
            if (savedColor) {
                document.body.style.backgroundColor = savedColor;
                document.getElementById('backgroundColorPicker').value = savedColor;
            }
        });



        document.getElementById('whiteButton').addEventListener('click', function(event) {
            document.body.style.backgroundColor = '#ffffff';
            localStorage.setItem('backgroundColor', '#ffffff');
        });

        document.getElementById('blackButton').addEventListener('click', function(event) {
            document.body.style.backgroundColor = '#000000';
            localStorage.setItem('backgroundColor', '#000000');
        });

        document.addEventListener('DOMContentLoaded', function() {
            const savedColor = localStorage.getItem('backgroundColor');
            if (savedColor) {
                document.body.style.backgroundColor = savedColor;
            }
        });

    </script>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js','resources/css/app.css'])

{{-- >>>>>>>>>>   Fonts <<<<<<<<<<< --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@400;500&display=swap" rel="stylesheet">

{{--    TailWind--}}
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-blue text-black font-hanken-grotesk">

<div class="px-10">
    <nav class="flex justify-between items-center py-4 border-b border-white/10">
        <div>
            <a href="/">
                <img width="50px" height="50px" src="{{ Vite::asset('resources/images/logo.jpg') }}" alt="logo">
            </a>
        </div>


        <div class="space-x-9 font-bold">
            <a href="#">Jobs</a>
            <a href="#">Careers</a>
            <a href="#">Salaries</a>
            <a href="#">Companies</a>
        </div>


        <div>
            <a href="#">post a job</a>
        </div>


    </nav>

    <main class="mt-10 max-w-[986px] mx-auto">
        @yield('content')
    </main>



</div>





<footer></footer>










</body>
</html>

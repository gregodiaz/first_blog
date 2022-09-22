<html>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP</title>
<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<style>
    body {
        font-family: 'Nunito', sans-serif;
    }
</style>
</head>

<body class="antialiased">

    <div class="container px-4 my-5 mx-auto text-xl font-bold">

        <a class="mr-4" href="/"> Home </a>
        <a class="" href="/blog"> Blog </a>

    </div>

    <hr>

    <div>
        @yield('content')
    </div>

</body>

</html>

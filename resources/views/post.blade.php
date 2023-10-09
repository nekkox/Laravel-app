<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Styles -->
</head>

<body class="antialiased">
<div class="relative min-h-screen bg-gray-900 ">
    <div class="mx-auto container bg-gray-800 flex flex-col items-center min-h-screen	">
        <div class="w-3/5 bg-gray-200 mt-16 p-9 rounded	">
            <article>
<?= $post ?>
            </article>
<?php

?>

        </div>
    </div>
</div>
</body>

</html>

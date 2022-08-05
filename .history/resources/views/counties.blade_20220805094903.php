<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Kenyan Counties Data') }}</title>
    </head>

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="card">
                    <h3> Kenyan Counties </h3>
                </div>
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <li> Nairobi </li>
                </div>
            </div>
        </div>
    </body>
</html>
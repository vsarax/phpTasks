<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Customer: {{ $customer->id }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body>
        <h1>Customer: {{ $customer->id }}</h1>
        <p>Customer: {{ $customer->name }} {{ $customer->surname }}</p>
        <p>Employee: {{ $employee->name }} {{ $employee->surname }}</p>
        <h2>Last 10 orders:</h2>
        <ul>
            @foreach ($orders as $order)
                <li>{{ $order->item }} ({{ $order->quantity }})</li>
            @endforeach
        </ul>
    </body>
</html>
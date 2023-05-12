<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>List of cars</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body>
        <div class="list-wrapper">
            <h1>List of cars</h1>

            @foreach ($listCars as $listCar)
                <h3>Car: {{$listCar->model}}, {{$listCar->year}}, {{$listCar->available ? 'available' : 'unavailable'}}</h3>
                @if ($listCar->available)
                    <form method="get" action="{{ route('showRentForm', $listCar->id) }}" accept-charset="UTF-8">
                        {{ csrf_field() }}
                        <button type="submit">Rent</button>
                    </form>
                    @else 
                    <p>Rented by: {{$listCar->customer->name}} {{$listCar->customer->surname}}</p>
                @endif
            @endforeach
</body>
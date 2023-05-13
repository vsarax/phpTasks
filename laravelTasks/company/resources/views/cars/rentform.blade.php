<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rent a car</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body>
        @if($errors->any())
            <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
            </div>
        @endif
        <form method="post" action="{{ route('rentCar', $car->id) }}">
            {{ csrf_field() }}
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="surname">Surname:</label>
                <input type="text" id="surname" name="surname" required>
                <button type="submit">Rent</button>
        </form>
    </body>
</html>


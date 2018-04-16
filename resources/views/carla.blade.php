<h1> hooola </h1>

<!-- obtenemos todos los usuarios desde el controlador-->


@foreach ($users->tipos as $user)
    <p>{{ $user->id }}</p>
    <p>{{ $user->name }}</p>
    <p>{{ $user->email }}</p>
@endforeach
@extends('layouts.partial')
@section('main')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/resources/css/app.css">
        <title>Contact Form</title>
    </head>

    <body>
        <div class="box">
            <h2 style="text-align: center">Write Message For Bedu ❤️ </h2>
            @if ($message = Session::get('sucess'))
                <div class="alert alert-sucess alert-block" style="color: rgb(200, 9, 47)">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <div container style="text-align: center">
                <form method="POST" action="/contacts/store" enctype="multipart/form-data">
                    @csrf

                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" {{ old('name') }} placeholder="Rojan dahal nei ta hola ni!"><br><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="La E-mail halam" required><br><br>

                    <label for="message" >Message😘:</label><br><br>
                    <textarea id="message" name="message" rows="4" cols="50" placeholder="Jaldi karo subhey panvel nikalna hein 😂" {{ old('message') }} required></textarea><br><br>

                    <label for="image">Image:</label><br><br>
                    <input type="file" name="image" value="{{ old('image') }}" required></textarea><br><br>

                    <button type="submit" class="btn btn-dark" style="background-color: rgb(114, 150, 247)">Submit</button>
                </form>
            </div>

        </div>
    </body>
@endsection

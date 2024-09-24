
@extends('layouts.partial')
@section('main')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>

<body>

    @if ($message= Session::get('sucess'))
    <div class="alert alert-sucess alert-block" style="color: rgb(200, 9, 47)">
        <strong>{{$message}}</strong>
    </div>
    @endif
    <div container style="text-align: center">
        <h3 >Product Edit: {{$contact->name}}</h3>
        <form method="POST" action="/contacts/{{$contact->id}}/update" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="name">Name:</label>
            <input type="text"  name="name" value="{{ old('name', $contact->name)}}" ><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email', $contact->email)}}" required><br><br>

            <label for="message">Message:</label><br><br>
            <textarea id="message" name="message" rows="4" cols="50">{{ old('message', $contact->message)}}</textarea><br><br>

            <label for="image">Image:</label><br>
            <input type="file" name="image"> value="{{ old('image', $contact->image)}}</textarea><br><br>

            <button type="submit" >Submit</button>


    </form>
    </div>
</body>

@endsection

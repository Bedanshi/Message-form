@extends('layouts.partial')
@section('main')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Messages Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <h2>Messages List</h2>

    <table>
        <thead>
            <tr>
                <th>S no.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</th>
                    <td>{{ $contact->name }}</th>
                    <td>{{ $contact->email }}</th>
                    <td>{{ $contact->message }}</th>
                    <td>
                        <img src="products/{{ $contact->image }}" class="rounded-circle" width="60" height="60" />
                    </td>
                    <td>
                        <a href="contacts/{{ $contact->id }}/edit">Edit</a><br>

                         <form method="POST"action="contacts/{{$contact->id}}/delete">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

@endsection

@extends('layout.mylayout')

@section('content')

    <table>
        <thead>
            <tr>
                <th>Book ID</th>
                <th>Book Name</th>
                <th>Number of Pages</th>
                <th>Book Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->name }} </td>
                    <td>{{ $book->page }}</td>
                    <td>{{ $book->type }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/insert_book.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="insert">
    <button>insert new book</button>
</a>
@foreach ($books as $book)
<br>
book name : {{$book['name']}} <br>
page number : {{$book['page']}}  <br>
type : {{$book['type']}}

<hr>
@endforeach
</body>
</html>

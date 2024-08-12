@extends('layout.mylayout')
@section('content')

    <div class="form_container">
        <h1>Book Info</h1>
        <form action="binsert"  method="get">
            <label for="bookName">Book Name</label>
            <input type="text" id="bookName" name="bname" required> <br>

            <label for="numOfPages">Number of Pages</label>
            <input type="text" id="numOfPages" name="pageNum" required> <br>

            <label for="bType">Book Type</label>
            <select name="btype" id="bookType" required>
                <option value="Romance">Romance</option>
                <option value="Roman">Roman</option>
                <option value="History">History</option>
                <option value="Science">Science</option>
                <option value="Sport">Sport</option>
                <option value="Techno">Techno</option>
            </select>
            <button type="submit">Add the book</button>

        </form>

@endsection



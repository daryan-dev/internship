<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="form">
<form action="binsert" method="GET">
    @csrf
    <input type="text" name="bname"><br>
    <input type="text" name="pageNum"><br>
    <select name="btype" id="">
        <option value="romance">romance</option>
        <option value="history">history</option>
    </select>
    <br><input type="submit">
</form>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test sending files</title>
</head>
<body>
    <form action="{{ route('t_files_u') }}" method="post">
        @csrf
        <div>
            <label for="file1">file 1</label>
            <input type="file" name="file1">
        </div>
        <div>
            <label for="file1">file 2</label>
            <input type="file" name="file3">
        </div>
        <div>
            <label for="file1">file 3</label>
            <input type="file" name="file3">
        </div>
        <button type="submit">send files</button>
    </form>
</body>
</html>
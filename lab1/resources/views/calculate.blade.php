<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculate</title>
</head>
<body>
    <h1>Calculate Sample</h1>
    <form action="/add" method="post">
        @csrf <!-- CSRF token for security -->
        Num1: <input type="text" name="num1"> <br>
        Num2: <input type="text" name="num2"> <br>
        <input type="submit" value="Add">
    </form>
    Result : @if(isset($sum)){{$sum}} @endif
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <h1>Add new book</h1>
    <form action="/postCreate" method="POST">
        <!-- CSRF token for form submission security -->
        @csrf
        <div>
            Title : <input type="text" name="title" required>
        </div>
        <div>
            Price : <input type="text" name="price" required>
        </div>
        <div>
            <input type="submit" value="Add Book">
        </div>
    </form>
</body>
</html>
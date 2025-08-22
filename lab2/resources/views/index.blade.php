<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Book List</h1>
    <a href="/create">Add New Book</a>
    <br>
    {{-- search form --}}
    <form action="/search" style="margin: 20px" method="get">
        <input type="text" name="searchText" placeholder="Search by title">
        <input type="submit" value="Search">
    </form>
    {{-- end search --}}
    
    <table>
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Price</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($bookList as $book)
            <tr>
                <td>{{ $book->id}}</td>
                <td>{{ $book->tittle}}</td>
                <td>{{ $book->price}}</td>
                <td>
                    <a href="/update/{{$book->id}}">Edit</a> |
                    <a href="/delete/{{$book->id}}"
                        onclick="return confirm('Are you sure you want delete this book')">Delete</a>
                </td>   
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
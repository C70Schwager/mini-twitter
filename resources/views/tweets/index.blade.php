
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Tweet von Cyrill Schwager</title>

    @vite('resources/css/app.css')
</head>
<body>
    



<body>

    <h1>Mini-Tweet List</h1>

    <ul>
        @foreach ($tweets as $tweet)
        <li>
            <p>{{ $tweet->title }}</p>
            <p>{{ $tweet->text }}</p>
            <p>{{ $tweet->created_at }}</p> 
            <a href="/tweets/{{ $tweet->id }}">See more</a>          
        </li>
        @endforeach
    </ul>

</body>
</html>
 




<!-- <!DOCTYPE html>
<html>
<head>
    <title>Tweet-Liste</title>
</head>
<body>
    <h1>Tweet-Liste</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Text</th>
                <th>Created at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tweets as $tweet)
            <tr>
                <td>{{ $tweet->id }}</td>
                <td>{{ $tweet->title }}</td>
                <td>{{ $tweet->text }}</td>
                <td>{{ $tweet->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html> -->


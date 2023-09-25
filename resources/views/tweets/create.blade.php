<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Tweet von Cyrill Schwager</title>

    @vite('resources/css/app.css')
</head>

<body>
<div>
    <h1>Mein Mini Tweet</h1>
    <form action="/tweets/store" method="POST">
        @csrf
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br>

        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="text">Text:</label><br>
        <textarea type="text" id="text" name="text"></textarea><br>

        @error('text')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit">Send</button>
    </form>
   
</div>


</body>





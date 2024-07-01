<!-- resources/views/register.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>register</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    
    <h2>register</h2>
    <div class="part1">
    <form action="/register" method="post">
        @csrf
        <label for="username"><h3>User:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password"><h3>Password:</h3></label>
        <input type="password" id="password" name="password" required><br><br><br><br>
        <button type="submit">register</button>
    </form>
    </div>
</body>
</html>

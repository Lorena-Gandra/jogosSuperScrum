<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forca Game</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script>
        let word = "{{ $word }}";
    </script>
    <script src="{{ asset('js/script.js') }}" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h2>Welcome, {{ Auth::user()->username }}!</h2><br><br>
    <div id="game-container">
        <p id="word-display"></p>
        <p id="message"></p>
        <input type="text" id="guess-input" maxlength="1">
        <button id="guess-button">Guess</button>
    </div>
    <a href="/logout"><h4>Logout</h4></a>
</body>
</html>

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
</head>
<body>
    <h2>Bem-vindo, {{ Auth::user()->username }}!</h2>
    <div id="game-container">
        <p id="word-display"></p>
        <p id="message"></p>
        <input type="text" id="guess-input" maxlength="1">
        <button id="guess-button">Guess</button>
    </div>
    <a href="/logout">Logout</a>
</body>
</html>

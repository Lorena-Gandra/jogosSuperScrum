<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>

body{
    background-image: URL('/images/body1.jpg');
}
       .game-list {
        display: flex;
        flex-wrap: wrap;
        list-style-type: none;
        padding: 0;
        justify-content: center;
    }
    .game-list li {
        margin: 20px;
        text-align: center;
        transition: transform 0.3s ease, filter 0.3s ease;
       
    }
    .game-list li img {
        max-width: 400px; /* Aumente este valor para aumentar o tamanho da imagem */
        height: auto;
        display: block;
        margin: 0 auto 10px;
        transition: transform 0.3s ease, filter 0.3s ease;
        border-radius: 20px;
        margin-top: 30%;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        
    }
    .game-list li img:hover {
        transform: scale(1.1); /* Aumenta o tamanho em 10% */
        filter: brightness(1.2); /* Aumenta o brilho em 20% */
    }

    h1{
    text-align: center;
    font-weight: bold;
    text-shadow: 2px 2px #eecf84;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    }

    p{
    text-align: center;
    color: #83d215;
    text-shadow: 2px 2px #05634b;
    font
    }
    </style>
</head>
<body>
    <div class="container"><br>
        <h1>Welcome</h1><br>
        <p>Choose a game to play:</p>
        <ul class="game-list">
            <li>
                <a href="{{ url('game') }}">
                    <img src="{{ asset('images/menuforca.jpg') }}" alt="Jogo da Forca Scrum">
                  
                </a>
            </li>
            <li>
                <a href="{{ url('memes') }}">
                    <img src="{{ asset('images/menumeme.jpg') }}" alt="Memes Scrum">
                   
                </a>
            </li>
            <li>
                <a href="{{ url('perguntas') }}">
                    <img src="{{ asset('images/memeperguntas.jpg') }}" alt="Perguntas Scrum">
              
                </a>
            </li>
        </ul>
    </div>
</body>
</html>

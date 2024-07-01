<!-- resources/views/memes.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas Super Scrum</title>
    <style>
        body {
    /*        display: flex;
           justify-content: center;
            align-items: center; */
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            background-image: URL('/images/body1.jpg');
        }

        .game-board {
            display: grid;
            grid-template-columns: repeat(4, 200px);
            grid-template-rows: repeat(3, 200px);
            gap: 10px;
            justify-content: center;
            align-items: center;
            margin-top: 3%;
            
        }

        .card {
            width: 80%;
            height:80%;
            background-image: URL('/images/inter.png');
            background-size: cover;

            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: transform 0.3s;
            overflow: hidden;
            position: relative;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
        }

        h1{
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    text-shadow: 4px 4px  #5f4937;
    color: #83d215;
font-size: 300%;
letter-spacing: 3px;

        }

        .card img {
            display: none;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #fullscreen {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }

        #fullscreen img {
            max-width: 90%;
            max-height: 90%;
        }

        header {
            font-weight: bold;
            background-color: #fecb00;
            border-radius: 30px;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;   
            padding-bottom: 4px;  
            padding-top: 4px; 
            margin-top: 20px;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }
    </style>
</head>
<body>
    <header><h1>Perguntas Super Scrum</h1></header>

    <div class="game-board">
        <div class="card" onclick="showImage(this, '{{ asset('images/image.png') }}')">
            <img src="{{ asset('images/image.png') }}" alt="image1">
        </div>
        <div class="card" onclick="showImage(this, '{{ asset('images/image2.png') }}')">
            <img src="{{ asset('images/image2.png') }}" alt="image2">
        </div>
        <div class="card" onclick="showImage(this, '{{ asset('images/image3.png') }}')">
            <img src="{{ asset('images/image3.png') }}" alt="image3">
        </div>
        <div class="card" onclick="showImage(this, '{{ asset('images/image4.png') }}')">
            <img src="{{ asset('images/image4.png') }}" alt="image4">
        </div>
        <div class="card" onclick="showImage(this, '{{ asset('images/image5.png') }}')">
            <img src="{{ asset('images/image5.png') }}" alt="image5">
        </div>
        <div class="card" onclick="showImage(this, '{{ asset('images/image6.png') }}')">
            <img src="{{ asset('images/image6.png') }}" alt="image6">
        </div>
        <div class="card" onclick="showImage(this, '{{ asset('images/image7.png') }}')">
            <img src="{{ asset('images/image7.png') }}" alt="image7">
        </div>
        <div class="card" onclick="showImage(this, '{{ asset('images/image8.png') }}')">
            <img src="{{ asset('images/image8.png') }}" alt="image8">
        </div>
        <div class="card" onclick="showImage(this, '{{ asset('images/image9.png') }}')">
            <img src="{{ asset('images/image9.png') }}" alt="image9">
        </div>
        <div class="card" onclick="showImage(this, '{{ asset('images/image10.png') }}')">
            <img src="{{ asset('images/image10.png') }}" alt="image10">
        </div>
        <div class="card" onclick="showImage(this, '{{ asset('images/image11.png') }}')">
            <img src="{{ asset('images/image11.png') }}" alt="image11">
        </div>
        <div class="card" onclick="showImage(this, '{{ asset('images/image12.png') }}')">
            <img src="{{ asset('images/image12.png') }}" alt="image12">
        </div>
        <div class="card" onclick="showImage(this, '{{ asset('images/image13.png') }}')">
            <img src="{{ asset('images/image13.png') }}" alt="image13">
        </div>
        <div class="card" onclick="showImage(this, '{{ asset('images/image14.png') }}')">
            <img src="{{ asset('images/image14.png') }}" alt="image14">
        </div>
        <div class="card" onclick="showImage(this, '{{ asset('images/image15.png') }}')">
            <img src="{{ asset('images/image15.png') }}" alt="image15">
        </div>
        <div class="card" onclick="showImage(this, '{{ asset('images/image16.png') }}')">
            <img src="{{ asset('images/image16.png') }}" alt="image16">
        </div>
    </div>
    <div id="fullscreen" onclick="hideImage()">
        <img id="fullscreen-img" src="" alt="">
    </div>
    <script>
        function showImage(card, imgSrc) {
            const fullscreen = document.getElementById('fullscreen');
            const fullscreenImg = document.getElementById('fullscreen-img');
            
            fullscreenImg.src = imgSrc;
            fullscreen.style.display = 'flex';
            
            card.classList.add('flipped');
        }

        function hideImage() {
            const fullscreen = document.getElementById('fullscreen');
            fullscreen.style.display = 'none';
            
            const flippedCards = document.querySelectorAll('.card.flipped');
            flippedCards.forEach(card => {
                const img = card.querySelector('img');
                img.style.display = 'block';
                card.style.backgroundColor = "transparent";
                card.classList.remove('flipped');
                card.removeAttribute('onclick');
            });
        }
    </script>
</body>
</html>

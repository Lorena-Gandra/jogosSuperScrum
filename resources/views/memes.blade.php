<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Memes Scrum</title>


<style>
.container {
    display: flex;
    flex-wrap: wrap;
    width: 90%; /* Ajuste conforme necessário */
    align-items: center;
    padding-left: 5%; /* Alterado para 5% para maior responsividade */
    padding-right: 5%; /* Alterado para 5% para maior responsividade */
    margin: 0 auto; /* Adiciona margem automática nos lados esquerdo e direito para centralizar */
    padding-left: 5%; /* Alterado para 5% para maior responsividade */
    padding-right: 5%; /* Alterado para 5% para maior responsividade */
}

.square {
    width: calc(25% - 20px); /* Ajuste conforme necessário */
    margin: 10px;
    height: 190px; /* Ajuste conforme necessário */
    background-image: url('{{ asset('images/mariomeme4.png') }}'); /* Defina a imagem inicial */
    background-size: cover;
    cursor: pointer;
    border-radius: 20px;
    box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
}
@media screen and (max-width: 768px) {
    /* Estilos para telas menores que 768px */
    .container {
        width: 90%; /* Reduz a largura do container para telas menores */
        padding-left: 2%; /* Reduz o padding esquerdo para telas menores */
        padding-right: 2%; /* Reduz o padding direito para telas menores */
    }
    
    .square {
        width: calc(50% - 20px); /* Reduz a largura dos quadrados para telas menores */
    }
}

h1 {
    font-weight: bold;
    background-color: #fecb00;
    border-radius: 30px;
    text-align: center;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    color: #83d312;
    text-shadow: 2px 2px #5f4937;
    padding-bottom: 4px;  
    padding-top: 4px; 
    margin-top: 20px;
    box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
    letter-spacing: 2px;
}


body {
   
   background-image: URL('/images/body1.jpg');
}
</style>
</head>
<body>
<h1>Memes Super Scrum</h1>

<div class="container">
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
</div>

<!-- JavaScript diretamente no arquivo Blade -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const squares = document.querySelectorAll('.square');

    // Array com o caminho das 16 imagens diferentes
    const images = [
        "{{ asset('images/segunda.jpg') }}",
        "{{ asset('images/terceira.jpeg') }}",
        "{{ asset('images/primeira.jpg') }}",
        "{{ asset('images/quarta.jpg') }}",
        "{{ asset('images/quinta.jpg') }}",
        "{{ asset('images/sexta.jpg') }}",
        "{{ asset('images/setima.jpg') }}",
        "{{ asset('images/oitava.jpg') }}",
        "{{ asset('images/nono.jpg') }}",
        "{{ asset('images/decimo.jpg') }}",
        "{{ asset('images/onze.jpg') }}",
        "{{ asset('images/doze.jpg') }}",
        "{{ asset('images/treze.jpg') }}",
        "{{ asset('images/quartorze.jpg') }}",
        "{{ asset('images/quinze.jpg') }}",
        "{{ asset('images/six.jpg') }}",
        "{{ asset('images/nono.jpg') }}",
    ];

    squares.forEach((square, index) => {
        square.addEventListener('click', () => {
            // Ao clicar em um quadrado, alterar a imagem para a próxima da lista
            const nextImageIndex = (index + 1) % images.length;
            const nextImage = images[nextImageIndex];
            square.style.backgroundImage = `url('${nextImage}')`;
        });
    });
});
</script>
</body>
</html>

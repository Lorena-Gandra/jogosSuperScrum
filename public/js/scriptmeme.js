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
            "{{ asset('images/six.jpg') }}"

];

squares.forEach((square, index) => {
  square.addEventListener('click', () => {
    // Ao clicar em um quadrado, alterar a imagem para a próxima da lista
    const nextImageIndex = (index + 1) % images.length;
    const nextImage = images[nextImageIndex];
    square.style.backgroundImage = `url('${nextImage}')`;
  });
});

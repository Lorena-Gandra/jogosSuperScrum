// public/js/script.js

document.addEventListener("DOMContentLoaded", () => {
    const wordDisplay = document.getElementById("word-display");
    const guessInput = document.getElementById("guess-input");
    const guessButton = document.getElementById("guess-button");
    const message = document.getElementById("message");

    let guessedLetters = [];
    let remainingGuesses = 6;
    
    // Inicialmente, exibe a palavra com underscores
    function displayWord() {
        wordDisplay.innerHTML = word.split('').map(letter => guessedLetters.includes(letter) ? letter : "_").join(' ');
    }

    // Checa se o palpite está correto e atualiza o estado do jogo
    function checkGuess() {
        const guess = guessInput.value.toLowerCase();
        guessInput.value = '';

        if (guess && !guessedLetters.includes(guess)) {
            guessedLetters.push(guess);

            if (!word.includes(guess)) {
                remainingGuesses--;
            }
            
            displayWord();
            updateMessage();
        }
    }

    // Atualiza a mensagem para o usuário com base no estado do jogo
    function updateMessage() {
        if (wordDisplay.innerText === word) {
            message.innerText = "Parabéns! Você adivinhou a palavra!";
            guessButton.disabled = true;
            guessInput.disabled = true;
        } else if (remainingGuesses === 0) {
            message.innerText = `Você perdeu! A palavra era: ${word}`;
            guessButton.disabled = true;
            guessInput.disabled = true;
        } else {
            message.innerText = `Você tem ${remainingGuesses} tentativas restantes.`;
        }
    }

    guessButton.addEventListener("click", checkGuess);
    guessInput.addEventListener("keypress", (e) => {
        if (e.key === 'Enter') {
            checkGuess();
        }
    });

    displayWord();
    updateMessage();
});

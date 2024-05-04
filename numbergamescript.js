// Generate a random number between 1 and 10
const randomNumber = Math.floor(Math.random() * 10) + 1;
let attempts = 0;

document.getElementById('submitBtn').addEventListener('click', checkGuess);

function checkGuess() {
    const guess = parseInt(document.getElementById('guessInput').value);
    const message = document.getElementById('message');

    // Check if input is a valid number between 1 and 10
    if (isNaN(guess) || guess < 1 || guess > 10) {
        message.textContent = "Invalid input: Please input a number between 1 and 10.";
        return;
    }

    attempts++;

    // Check if guess is correct
    if (guess === randomNumber) {
        message.textContent = `Congratulations! You've guessed it (${randomNumber}) in ${attempts} attempt${attempts === 1 ? '' : 's'}.`;
    } else if (guess < randomNumber) {
        message.textContent = "Too LOW! Guess again.";
    } else if (guess > randomNumber) {
        message.textContent = "Too HIGH! Guess again.";
    } else {
        message.textContent = "Too high! Guess again.";
    }
    
    // Display number of attempts
    document.getElementById('attempts').textContent = `Attempts: ${attempts}`;
}


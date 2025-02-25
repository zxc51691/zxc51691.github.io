// Step 1: Math Function
// This function takes two numbers and calculates their average
function calculateAverage(num1, num2) {
    return (num1 + num2) / 2;
}

// Get reference to the element where we'll display our math result
const mathResultElement = document.getElementById('mathResult');

// Average two numbers (10 and 20)
const firstNumber = 10;
const secondNumber = 20;
const average = calculateAverage(firstNumber, secondNumber);

// Display the result on the page
mathResultElement.textContent = `The average of ${firstNumber} and ${secondNumber} is ${average}`;

// Step 2: Event Listener
const clickArea = document.getElementById('clickArea');

// Set up an event listener for when the user clicks on the clickable area
clickArea.addEventListener('click', function() {
    // Generate a random color
    const randomColor = getRandomColor();
    
    // Change the background color of the clicked area
    clickArea.style.backgroundColor = randomColor;
    
    // Show what color was chosen
    clickArea.textContent = `My color is now ${randomColor}!`;
});

// Function to generate a random color
function getRandomColor() {
    const letters = '0123456789ABCDEF';
    let color = '#';
    for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}
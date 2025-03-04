// Wait for the document to fully load
document.addEventListener('DOMContentLoaded', function() {
    // Step 1: Math Function
    // This function multiplies two numbers together
    function multiplyNumbers(num1, num2) {
        return num1 * num2;
    }

    // Get references to HTML elements
    const firstNumberInput = document.getElementById('firstNumber');
    const secondNumberInput = document.getElementById('secondNumber');
    const calculateButton = document.getElementById('calculateButton');
    const mathResultElement = document.getElementById('mathResult');

    // Add event listener to the calculate button
    calculateButton.addEventListener('click', function() {
        // Get values from input fields and convert to numbers
        const firstNumber = parseFloat(firstNumberInput.value);
        const secondNumber = parseFloat(secondNumberInput.value);
        
        // Check if inputs are valid numbers
        if (isNaN(firstNumber) || isNaN(secondNumber)) {
            mathResultElement.textContent = "Please enter valid numbers";
            return;
        }
        
        // Calculate the product
        const product = multiplyNumbers(firstNumber, secondNumber);
        
        // Display the result on the page
        mathResultElement.textContent = `${firstNumber} × ${secondNumber} = ${product}`;
    });

    // Step 2: Event Listener for color change
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
});
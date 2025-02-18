// Function to check age and display message
function checkAge() {
    // Ask user for age using prompt
    let age = prompt("Please enter your age:");
    
    // Convert age to number
    age = Number(age);
    
    // Get element to display result
    let resultElement = document.getElementById("ageResult");
    
    // Check age and display appropriate message
    if (age < 18) {
        resultElement.textContent = "You are a minor.";
    } else if (age >= 65) {
        resultElement.textContent = "You are a senior.";
    } else {
        resultElement.textContent = "You are an adult.";
    }
}

// Wait for DOM to load before running color code
window.onload = function() {
    // Color array
    const colors = ["Red", "Green", "Blue", "Yellow", "Purple"];

    const colorListElement = document.getElementById("colorList");

    // Loop through color
    for (let i = 0; i < colors.length; i++) {
        // New paragraph element for each color
        const colorElement = document.createElement("p");
        colorElement.textContent = colors[i];
        colorListElement.appendChild(colorElement);
    }
}
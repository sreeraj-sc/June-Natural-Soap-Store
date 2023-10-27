// Get all of the quantity input fields
const quantityInputs = document.querySelectorAll('.counter-btn');

// Get all of the plus and minus buttons
const plusButtons = document.querySelectorAll('.plus-btn');
const minusButtons = document.querySelectorAll('.minus-btn');

// Add an event listener to all of the plus buttons
plusButtons.forEach((button) => {
  button.addEventListener('click', () => {
    // Get the quantity input field for the current button
    const quantityInput = button.closest('.input-counter').querySelector('.counter-btn');

    // Increment the quantity value
    quantityInput.value = parseInt(quantityInput.value) + 1;

  });
});

// Add an event listener to all of the minus buttons
minusButtons.forEach((button) => {
  button.addEventListener('click', () => {
    // Get the quantity input field for the current button
    const quantityInput = button.closest('.input-counter').querySelector('.counter-btn');

    // Decrement the quantity value
    quantityInput.value = parseInt(quantityInput.value) - 1;

    // Make sure the quantity value is not less than 1
    if (quantityInput.value < 1) {
      quantityInput.value = 1;
    }
  });
});

// Function to send the quantity to the PHP code
function sendQuantityToPHP(quantity) {
  // Make an AJAX request to the PHP code
  const xhr = new XMLHttpRequest();
  xhr.open('POST', './cart.php');
  xhr.setRequestHeader('Content-Type', 'application/json');
  xhr.send(JSON.stringify({ quantity }));

  // Handle the response from the PHP code
  xhr.onload = function() {
    if (xhr.status === 200) {
      // The quantity was successfully sent to the PHP code
    } else {
      // An error occurred while sending the quantity to the PHP code
    }
  };
}

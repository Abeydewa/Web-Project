// script.js

window.addEventListener('DOMContentLoaded', function () {
  const sliderImages = [
    "babo.png",
    "my_photo.png",
    "lamal.png"
  ];
  let currentIndex = 0;
  const sliderImage = document.getElementById("sliderImage");

  function changeImage() {
    currentIndex = (currentIndex + 1) % sliderImages.length;
    sliderImage.src = sliderImages[currentIndex];
  }

  setInterval(changeImage, 3000); // Change image every 5 seconds
});


  // Get references to the email and phone number input fields
var emailInput = document.getElementById('Your_Email');
var phoneInput = document.getElementById('Your_Telephone');

// Add event listener for form submission
document.getElementById('my-form').addEventListener('submit', function(event) {
  // Perform email and phone number validation
  if (!validateEmail(emailInput.value)) {
    alert('Please enter a valid email address.');
    event.preventDefault(); // Prevent form submission
  }
  
  if (!validatePhoneNumber(phoneInput.value)) {
    alert('Please enter a valid phone number.');
    event.preventDefault(); // Prevent form submission
  }
});

// Email validation function
function validateEmail(email) {
  // Regular expression pattern for email validation
  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailPattern.test(email);
}

// Phone number validation function
function validatePhoneNumber(phoneNumber) {
  // Regular expression pattern for phone number validation
  var phonePattern = /^\d{10}$/;
  return phonePattern.test(phoneNumber);
}

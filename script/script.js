function password_missmatch()
{
    document.getElementById("cun_pass").innerHTML = "password miss match";
}
function invalid_user_pass()
{
    document.getElementById("invalid_user_password").innerHTML = "Invalid Username Or Password !!!";
}
function user_notfound()
{
    document.getElementById("invalid_user_password").innerHTML = "User Not Found !!!";
}
document.addEventListener("DOMContentLoaded", function () {
    const floatingSearchBar = document.querySelector(".floating-search-bar");
    const scrollThreshold = 200; // Adjust this value to control when the search bar appears

    window.addEventListener("scroll", function () {
        if (window.scrollY > scrollThreshold) {
            floatingSearchBar.style.display = "block";
        } else {
            floatingSearchBar.style.display = "none";
        }
    });
});
// Get the image elements
const images = document.querySelectorAll("img");

// Set the max-width of the images to 100%
for (const image of images) {
  image.style.maxWidth = "100%";
  image.style.height = "auto";
  image.style.display = "block";
  image.style.margin = "0 auto";
}

// Set the slide index to 0
let slideIndex = 0;

// Show the slides
showSlides();

function showSlides() {
  // Hide all the slides
  for (const slide of slides) {
    slide.style.display = "none";
  }

  // Show the current slide
  slides[slideIndex].style.display = "block";

  // Increment the slide index
  slideIndex++;

  // If the slide index is greater than the number of slides, reset it to 0
  if (slideIndex >= slides.length) {
    slideIndex = 0;
  }

  // Call the showSlides() function again in 2 seconds
  setTimeout(showSlides, 2000);
}

const myElement = document.getElementById("demo");

// Gets location of user
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        myElement.innerHTML = "Geolocation is not supported by this browser.";
    }
}

// Shows position coordinates of user
function showPosition(position) {
    myElement.innerHTML = "Latitude: " + position.coords.latitude +
        "<br>Longitude: " + position.coords.longitude;
}

// Darkmode

function functionDark() {
    var element = document.body;
    element.classList.toggle("dark-mode");
}

// Hamburger Icon

function toggleIcon() {
  var icon = document.querySelector('.navbar-toggler-icon');
  icon.classList.toggle('fa-bars');
  icon.classList.toggle('fa-times');
}

var navbarToggler = document.querySelector('.navbar-toggler');
var navbarCollapse = document.querySelector('.navbar-collapse');

navbarToggler.addEventListener('click', function () {
    toggleIcon();
    navbarCollapse.classList.toggle('show');
    });
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
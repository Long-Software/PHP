const lng = document.getElementById('lng');
const lat = document.getElementById('lat');
const geo = document.getElementById('geo');
const ip = document.querySelector("#ip");

document.querySelector('#login').disabled = true;

$.getJSON("https://api64.ipify.org?format=json", function (data) {
    ip.setAttribute("value", data.ip);
    document.querySelector('#d-ip').innerText = data.ip;
});
geo.addEventListener('click', getLocation);


function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPos, alert("Please enable GeoLocation for this browser."), {enableHighAccuracy: true});
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}

function showPos(position) {
    lng.setAttribute('value', position.coords.longitude)
    lat.setAttribute('value', position.coords.latitude)
    geo.classList.remove('btn-danger');
    geo.classList.remove('bg-danger');
    geo.classList.add('btn-success')
    geo.classList.add('bg-success')
    if(ip.getAttribute('value')) {
        document.querySelector('#login').disabled = false;
    }
}


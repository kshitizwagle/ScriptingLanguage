function getPosition(position) {
    let lat = position.coords.latitude;
    let lon = position.coords.longitude;
    console.log("Lalitude:", lat, " Longitude", lon);
}

navigator.geolocation.getCurrentPosition(getPosition);
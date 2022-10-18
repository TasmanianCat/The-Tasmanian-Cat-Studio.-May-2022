'use strict';

function clickedLogo() {
    console.log('The logo was clicked!');

    document.getElementById('logo').style.transform = "rotate(360deg)";
    document.getElementById('logo').style.transition = "0.6s ease";
}

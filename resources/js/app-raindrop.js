// import './bootstrap';
// import '../css/app.css';
import '../css/pages/workspace/animation-raindrop.css';

document.addEventListener("DOMContentLoaded", function () {
    if (typeof window.RainyDay === "undefined") {
        console.error("RainyDay.js is not defined. Make sure the script is loaded.");
        return;
    }

    let image = document.getElementById('wrapper');

    image.onload = function () {
        // Get image dimensions
        let imgWidth = this.clientWidth || this.naturalWidth;
        let imgHeight = this.clientHeight || this.naturalHeight;

        // Create the RainyDay instance and set the canvas size
        let engine = new window.RainyDay({
            image: this,
            parentElement: document.body, // Attach to body or a specific container
        });

        // Set the canvas dimensions to match the image
        // engine.canvas.style.width = imgWidth + 'px';
        // engine.canvas.style.height = imgHeight + 'px';
        // engine.canvas.width = imgWidth * 2;
        // engine.canvas.height = imgHeight * 2;

        // Start the rain effect
        engine.rain([[1, 2, 8000]]);
        engine.rain([[3, 5, 6]], 100);
    };

    image.crossOrigin = 'anonymous';
    image.src = 'https://i.imgur.com/N7ETzFO.jpg';
});

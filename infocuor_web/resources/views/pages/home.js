let text = "Welcome to Infocuor";
let i = 0;
let speed = 100; // Speed in milliseconds

function typeWriter() {
    if (i < text.length) {
        document.getElementById("typewriter").innerHTML += text.charAt(i);
        i++;
        setTimeout(typeWriter, speed); // Wait and call again
    }
}

typeWriter(); // Start the typing effect

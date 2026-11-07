document.addEventListener("DOMContentLoaded", () => {
    const target = document.querySelector("#typing-target");

    if (!target) return;

    // Get text from data-text attribute and split by semicolon
    const rawData = target.getAttribute("data-text") || "";
    const texts = rawData.split(";").map(t => t.trim());

    let textIndex = 0;
    const typingSpeed = 50; // Speed in milliseconds per character
    const pauseTime = 2000;   // Wait time after finishing a text (2 seconds)

    function typeText() {
        const currentText = texts[textIndex];
        let charIndex = 0;
        target.textContent = ""; // Clear existing text

        function typeChar() {
            if (charIndex < currentText.length) {
                target.textContent += currentText.charAt(charIndex);
                charIndex++;
                setTimeout(typeChar, typingSpeed);
            } else {
                // Wait 2 seconds before moving to the next text
                setTimeout(() => {
                    textIndex = (textIndex + 1) % texts.length; // Loop back to start if at the end
                    typeText();
                }, pauseTime);
            }
        }

        typeChar();
    }

    // Start the animation if there is text
    if (texts.length > 0 && texts[0] !== "") {
        typeText();
    }
});
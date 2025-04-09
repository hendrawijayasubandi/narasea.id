document.addEventListener('DOMContentLoaded', function () {
    const texts = [
        { text: "Make ", colored: "Waves,", color: "text-teal-blue" },
        { text: "Create ", colored: "Impact,", color: "text-raspberry-pink" }
    ];

    const element = document.getElementById('changing-text');
    const cursor = document.querySelector('.typing-cursor');
    let index = 0;
    let isDeleting = false;
    let currentText = '';
    let typingSpeed = 100;
    let pauseBetween = 2000;

    function type() {
        const fullText = texts[index].text + texts[index].colored;

        if (isDeleting) {
            currentText = fullText.substring(0, currentText.length - 1);
        } else {
            currentText = fullText.substring(0, currentText.length + 1);
        }

        // Update HTML with colored part
        const coloredIndex = texts[index].text.length;
        element.innerHTML =
            currentText.substring(0, coloredIndex) +
            `<span class="${texts[index].color}">${currentText.substring(coloredIndex)}</span>`;

        // Adjust typing speed
        typingSpeed = isDeleting ? 50 : 100;

        // Check if complete
        if (!isDeleting && currentText === fullText) {
            typingSpeed = pauseBetween;
            isDeleting = true;
        } else if (isDeleting && currentText === '') {
            isDeleting = false;
            index = (index + 1) % texts.length;
            typingSpeed = 500;
        }

        setTimeout(type, typingSpeed);
    }

    // Start typing
    setTimeout(type, 1000);
});
document.addEventListener('DOMContentLoaded', function () {
    const texts = [
        { text: "Make ", colored: "Waves,", color: "text-teal-blue" },
        { text: "Create ", colored: "Impact,", color: "text-raspberry-pink" }
    ];

    const element = document.getElementById('changing-text');
    let index = 0;

    function changeText() {
        const fullText = texts[index].text + texts[index].colored;

        element.innerHTML = `
        <span class="text-slide">
            ${texts[index].text}
            <span style="color: ${texts[index].color === 'text-teal-blue' ? '#019AAA' : '#E84373'};">
            ${texts[index].colored}
            </span>
        </span>
        `;

        setTimeout(() => {
            index = (index + 1) % texts.length;
            changeText();
        }, 3000);
    }

    setTimeout(changeText, 1000)
});

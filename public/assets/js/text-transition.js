document.addEventListener('DOMContentLoaded', function () {
    const texts = [
        { text: "MAKE ", colored: "WAVES,", color: "text-peachy-orange" },
        { text: "CREATE ", colored: "IMPACT,", color: "text-raspberry-pink" }
    ];

    const element = document.getElementById('changing-text');
    let index = 0;

    function changeText() {
        const fullText = texts[index].text + texts[index].colored;

        element.innerHTML = `
        <span class="text-slide">
            ${texts[index].text}
            <span style="color: ${texts[index].color === 'text-peachy-orange' ? '#FF864A' : '#E84373'};">
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

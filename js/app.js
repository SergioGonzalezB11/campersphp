// Mostrar emoji según el nivel de inglés
var emojiElement = document.querySelector("#ingles");
emojiElement.addEventListener("click", async)

if ( $idioma  == 1) {
    emojiElement.innerHTML = "😔"; // Emoji de carita triste
} else if ( $idioma == 2) {
    emojiElement.innerHTML = "😐"; // Emoji de carita normal
} else if ( $idioma == 3) {
    emojiElement.innerHTML = "😀;"; // Emoji de carita feliz
}

document.body.appendChild(emojiElement);
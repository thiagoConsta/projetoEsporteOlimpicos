document.addEventListener("DOMContentLoaded", function() {  // Corrigido a sintaxe
    let count = 1;

    // Definindo o radio1 como checked
    const radio1 = document.getElementById("radio1");
    if (radio1) {
        radio1.checked = true;
    }

    // Alterando a imagem a cada 5 segundos
    setInterval(function() {
        nextImg();
    }, 5000);

    // Função para mudar a imagem
    function nextImg() {
        count++;
        if (count > 4) {
            count = 1;
        }

        const radioElement = document.getElementById("radio" + count);
        if (radioElement) {
            radioElement.checked = true;
        }
    }
});

 let fontSize = 1.25; // Tamanho de fonte inicial em rem

    function zoomIn() {
      fontSize += 0.1; // Ajustar o valor conforme necessário
      updateFontSize();
    }

    function zoomOut() {
      fontSize -= 0.1; // Ajustar o valor conforme necessário
      updateFontSize();
    }

    function updateFontSize() {
        const leadElements = document.querySelectorAll('.lead');
        leadElements.forEach((element) => {
          element.style.fontSize = fontSize + 'rem';
        });
      }



      
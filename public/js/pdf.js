document.getElementById('dl-pdf').onclick = function() {
  var element = document.getElementById('PDFresume');

  var opt = {
    margin: 0,
    width: 297, // Ширина страницы A4 в альбомной ориентации
    height: 210, // Высота страницы A4 в альбомной ориентации
    filename: 'Portfolio_Dziuba_Artsiomi.pdf',
    image: { type: 'jpeg', quality: 0.98},
    html2canvas: { scale: 0.8 }, // Уменьшение масштаба до 80%
    hsPDF: { unit: 'mm', format: 'a4', orientation: 'landscape' }, // Альбомная ориентация
    jsPDF: { format: 'a4', orientation: 'landscape' } // Альбомная ориентация
  };


  html2pdf(element, opt);
};

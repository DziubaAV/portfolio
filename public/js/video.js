function loadVideo(element, videoUrl) {
  // Создаем новый элемент iframe
  var iframe = document.createElement('iframe');

  // Задаем URL видео с параметром autoplay, чтобы видео воспроизводилось автоматически
  iframe.src = videoUrl + "?autoplay=1";

  // Устанавливаем значение frameborder в '0' для удаления границ iframe
  iframe.frameborder = '0';

  // Разрешаем полноэкранный режим для iframe
  iframe.allowfullscreen = true;

  // Очищаем содержимое HTML-элемента
  element.innerHTML = '';

  // Добавляем iframe в HTML-элемент
  element.appendChild(iframe);
}
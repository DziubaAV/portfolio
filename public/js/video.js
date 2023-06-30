function loadVideo(element, videoUrl) {
  var iframe = document.createElement('iframe');
  iframe.src = videoUrl + "?autoplay=1"; // Добавляем параметр autoplay
  iframe.frameborder = '0';
  iframe.allowfullscreen = true;

  element.innerHTML = '';
  element.appendChild(iframe);
}

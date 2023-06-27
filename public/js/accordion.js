const accordions = document.querySelectorAll('.faq_accordion');

// Добавляем обработчик события для каждого аккордеона
accordions.forEach(accordion => {
  const heading = accordion.querySelector('.faq_accordion-heading');

  // Добавляем обработчик события для нажатия на заголовок аккордеона
  heading.addEventListener('click', () => {
    // Переключаем класс активности для аккордеона
    accordion.classList.toggle('active');
  });
});
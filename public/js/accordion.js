const accordions = document.querySelectorAll('.accordion');

// Добавляем обработчик события для каждого аккордеона
accordions.forEach(accordion => {
  const heading = accordion.querySelector('.accordion-heading');

  // Добавляем обработчик события для нажатия на заголовок аккордеона
  heading.addEventListener('click', () => {
    // Переключаем класс активности для аккордеона
    accordion.classList.toggle('active');
  });
});
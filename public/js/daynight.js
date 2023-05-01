document.addEventListener('DOMContentLoaded', () => {
  const html = document.querySelector('html');
  const themeToggle = document.querySelector('.themetoggle');
  const themeToggleSpan = document.querySelector('.themetoggle span');
  const whiteThemeKey = 'theme';
  const whiteThemeValue = 'white';

  function toggleWhiteClass() {
    const isWhiteTheme = localStorage.getItem(whiteThemeKey) === whiteThemeValue;
    html.classList.toggle('white', isWhiteTheme);
    themeToggleSpan.textContent = isWhiteTheme ? 'wb_sunny' : 'dark_mode';
  }

  // Set initial theme on page load
  toggleWhiteClass();

  themeToggle.addEventListener('click', (event) => {
    event.preventDefault();
    const isWhiteTheme = localStorage.getItem(whiteThemeKey) === whiteThemeValue;
    try {
      if (isWhiteTheme) {
        localStorage.removeItem(whiteThemeKey);
      } else {
        localStorage.setItem(whiteThemeKey, whiteThemeValue);
      }
      toggleWhiteClass();
    } catch (error) {
      console.error(`Unable to toggle white theme: ${error.message}`);
    }
  });
});

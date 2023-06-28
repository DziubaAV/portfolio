let root = document.querySelector(":root");
let button = document.querySelector("#themeToggle");
let icon = document.querySelector("#themeToggle i");

// Проверяем, есть ли значение theme в Local Storage
const savedTheme = localStorage.getItem("theme");
if (savedTheme) {
  // Применяем сохраненную тему
  root.classList.add(savedTheme);
  if (savedTheme === "dark") {
    icon.classList.remove("bxs-sun");
    icon.classList.add("bxs-moon");
  } else {
    icon.classList.remove("bxs-moon");
    icon.classList.add("bxs-sun");
  }
}

button.addEventListener("click", () => {
  event.preventDefault();
  root.classList.toggle("dark");

  if (icon.classList.contains("bxs-sun")) {
    icon.classList.remove("bxs-sun");
    icon.classList.add("bxs-moon");
    // Сохраняем состояние темы в Local Storage
    localStorage.setItem("theme", "dark");
  } else {
    icon.classList.remove("bxs-moon");
    icon.classList.add("bxs-sun");
    // Сохраняем состояние темы в Local Storage
    localStorage.setItem("theme", "light");
  }
});

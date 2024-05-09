const lightMode = document.getElementById("light-mode");
const darkMode = document.getElementById("dark-mode");
const darkModeIcon = document.querySelector(".dark-mode-icon");
const lightModeIcon = document.querySelector(".light-mode-icon");
const modeSelected = document.querySelector(".mode-selected");
const modeSwitchContainer = document.querySelector(".mode-switch");
const theme = localStorage.getItem("theme");

// função que aplica o modo escuro e salva no localstorage
function darkModeSwitch() {
  document.body.classList.add("dark-mode");
  document.body.classList.remove("light-mode");
  darkMode.checked = true;
  lightMode.checked = false;
  lightModeIcon.setAttribute("hidden", "");
  darkModeIcon.removeAttribute("hidden");
  modeSelected.classList.add("dark-mode");
  modeSwitchContainer.classList.add("dark-mode");
  modeSelected.classList.remove("light-mode");
  modeSwitchContainer.classList.remove("light-mode");
  localStorage.setItem("theme", "dark");
}

// função que aplica o modo claro e salva no localstorage
function lightModeSwitch() {
  document.body.classList.remove("dark-mode");
  document.body.classList.add("light-mode");
  darkMode.checked = false;
  lightMode.checked = true;
  darkModeIcon.setAttribute("hidden", "");
  lightModeIcon.removeAttribute("hidden");
  modeSelected.classList.remove("dark-mode");
  modeSwitchContainer.classList.remove("dark-mode");
  modeSelected.classList.add("light-mode");
  modeSwitchContainer.classList.add("light-mode");
  localStorage.setItem("theme", "light");
}

// verifica o modo salvo no localstorage para aplicar as mudanças
function selectedModeVerify() {
  if (theme == "dark") {
    darkModeSwitch();
  } else if (theme == "light") {
    lightModeSwitch();
  }
}
// ativa a função ao carregar a página
selectedModeVerify()


// evento de clique que ativa as funções de troca de modo
modeSelected.addEventListener("click", () => {
  if (darkMode.checked) {
    lightModeSwitch();
  } else {
    darkModeSwitch();
  }
});

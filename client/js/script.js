document.querySelectorAll(".li__principal").forEach((item) => {
    item.addEventListener("click", () => {
      // Alterna a classe "active" para exibir/esconder a sublista
      item.classList.toggle("active");
    });
  });
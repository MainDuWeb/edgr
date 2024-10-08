// HEADER
class Collapse {
  constructor(trigger, target) {
    this.trigger = document.getElementById(trigger);
    this.target = document.getElementById(target);

    this.trigger.addEventListener("click", () => this.toggle());
  }

  toggle() {
    if (this.target.classList.contains("collapsed")) {
      this.target.classList.remove("collapsed");
      this.target.classList.add("expanded");
    } else {
      this.target.classList.remove("expanded");
      this.target.classList.add("collapsed");
    }
  }
}
// Création d'une instance de Collapse
const collapse = new Collapse('trigger', 'target');

// FIN DU HEADER

// LOADER
const loader = document.querySelector(".loader");

window.addEventListener("load", () => {
  loader.classList.add("fondu-out");
});


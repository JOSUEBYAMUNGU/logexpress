const elements = document.querySelectorAll('.animate-on-scroll');

function checkScroll() {
  const triggerBottom = window.innerHeight * 0.85;

  elements.forEach(el => {
    const boxTop = el.getBoundingClientRect().top;

    if (boxTop < triggerBottom) {
      el.classList.add('active');
    }
  });
}

window.addEventListener('scroll', checkScroll);
window.addEventListener('load', checkScroll);


// Hamburger menu
function toggleMenu() {document.querySelector("ul").classList.toggle("show");
  }

// Animation simple au scroll
// const cards = document.querySelectorAll('.service-card');
//const observer = new IntersectionObserver(entries => {
//entries.forEach(entry => {
//if (entry.isIntersecting) {
//entry.target.classList.add('visible');
//}
//});
//}, { threshold: 0.3 });

//cards.forEach(card => observer.observe(card));

//activation equipe
let lien = document.querySelector('.equipe')
let container = document.querySelector('.section_equipe')
let global = document.querySelector('.window_global')
let global_fenetre = document.querySelector('.global')
lien.addEventListener('click', () => {

  global.classList.toggle('window_global_active')
  global_fenetre.classList.add('flou')
  container.classList.toggle('section_equipe_activate')

}

)
window.addEventListener('click', (e) => {

  if (e.target == global) {
    global.classList.remove('window_global_active')
    global_fenetre.classList.remove('flou')
    container.classList.remove('section_equipe_activate')

  }
})


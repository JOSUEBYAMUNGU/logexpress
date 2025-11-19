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
const lien = document.querySelector('.equipe')
const container = document.querySelector('.section_equipe')
const global = document.querySelector('.global')
lien.addEventListener('click', () => {
  container.classList.toggle('section_equipe_activate')
  global.classList.toggle('flou')
}

)
// window.addEventListener('click', (e) => {

//   if (e.target == global) {
//     container.classList.remove('section_equipe_activate')
//     global.classList.remove('flou')
//   }
// })


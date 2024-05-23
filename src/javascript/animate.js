const elements = gsap.utils.toArray("[data-animate='main']");
const tarefas = gsap.utils.toArray("[data-animate='tarefa']");
const timeline = gsap.timeline();
const formElements = document.querySelectorAll("div.task");
if (formElements.length == 0) {
  timeline.fromTo(
    elements,
    { opacity: 0, x: -32 },
    { opacity: 1, x: 0, stagger: 0.2 }
  );
  timeline.fromTo(
    '[data-animate="icon"]',
    { opacity: 0, x: -32 },
    { opacity: 1, x: 0, stagger: 0.15 }
  );
}
else if(formElements.length > 0){
  timeline.fromTo(
    tarefas,
    { opacity: 0, x: -32 },
    { opacity: 1, x: 0, stagger: 0.2 }
  );
  console.log('alo')
}

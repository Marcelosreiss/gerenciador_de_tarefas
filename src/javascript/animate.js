const elements = gsap.utils.toArray("[data-animate='main']");
const timeline = gsap.timeline();
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


(function () {
  const $ = (s, c = document) => c.querySelector(s), $$ = (s, c = document) => [...c.querySelectorAll(s)];
  // 1. Mobile navigation toggle
  const tg = $('.nav-toggle'), nav = $('#nav');
  tg.addEventListener('click', () => { const o = nav.classList.toggle('open'); tg.setAttribute('aria-expanded', o); });
  // 2. Dark-mode toggle (remembered)
  const root = document.documentElement;
  try { if (localStorage.getItem('theme') === 'dark') root.dataset.theme = 'dark'; } catch (e) {}
  $('#theme').addEventListener('click', () => {
    const d = root.dataset.theme === 'dark' ? 'light' : 'dark'; root.dataset.theme = d;
    try { localStorage.setItem('theme', d); } catch (e) {}
  });
  // 3. Menu search + filter
  const q = $('#q');
  if (q) {
    let f = 'all';
    const run = () => $$('#menu-table tbody tr').forEach(r => {
      const ok = (f === 'all' || r.dataset.t === f) && r.textContent.toLowerCase().includes(q.value.toLowerCase());
      r.hidden = !ok;
    });
    q.addEventListener('input', run);
    $$('.chip').forEach(b => b.addEventListener('click', () => {
      f = b.dataset.f; $$('.chip').forEach(c => c.classList.toggle('on', c === b)); run();
    }));
  }
  // 4. Live contact-form validation
  const form = $('#contact-form');
  if (form) {
    const rules = { name: v => v.trim().length >= 2, email: v => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v), message: v => v.trim().length >= 10 };
    $$('input,textarea', form).forEach(el => el.addEventListener('blur', () => el.classList.toggle('invalid', !rules[el.name](el.value))));
    form.addEventListener('submit', e => {
      let bad = false;
      $$('input,textarea', form).forEach(el => { const ok = rules[el.name](el.value); el.classList.toggle('invalid', !ok); bad = bad || !ok; });
      if (bad) e.preventDefault();
    });
  }
  // 5. Back-to-top button
  const top = $('#top');
  addEventListener('scroll', () => { top.hidden = scrollY < 400; });
  top.addEventListener('click', () => scrollTo({ top: 0, behavior: 'smooth' }));
})();

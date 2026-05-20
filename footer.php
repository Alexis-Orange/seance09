</main>

<!-- Footer -->
<footer class="site-footer">
  <span class="footer-brand">Alexis Orange</span>
  <span class="footer-copy">&copy; <?= date('Y') ?> &mdash; Tous droits réservés</span>
  <span class="footer-id">mmi25g08 &middot; IUT Troyes</span>
</footer>

<script>
  /* ── Curseur custom ── */
  const cursor = document.getElementById('cursor');
  const ring   = document.getElementById('cursorRing');
  let ringX = 0, ringY = 0, curX = 0, curY = 0;
  let mouse = { x: 0, y: 0 };

  document.addEventListener('mousemove', e => {
    mouse.x = e.clientX;
    mouse.y = e.clientY;
    cursor.style.transform = `translate(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%))`;
  });

  function animateRing() {
    ringX += (mouse.x - ringX) * 0.12;
    ringY += (mouse.y - ringY) * 0.12;
    ring.style.transform = `translate(calc(${ringX}px - 50%), calc(${ringY}px - 50%))`;
    requestAnimationFrame(animateRing);
  }
  animateRing();

  document.querySelectorAll('a, button, .card, .skill-item').forEach(el => {
    el.addEventListener('mouseenter', () => document.body.classList.add('cursor-hover'));
    el.addEventListener('mouseleave', () => document.body.classList.remove('cursor-hover'));
  });

  /* ── Scroll reveal ── */
  const observer = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.style.opacity = '1';
        e.target.style.transform = 'translateY(0)';
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0.12 });

  document.querySelectorAll('.card, .skill-item, .about-text-col p').forEach((el, i) => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = `opacity 0.6s cubic-bezier(0.16,1,0.3,1) ${i * 0.07}s, transform 0.6s cubic-bezier(0.16,1,0.3,1) ${i * 0.07}s`;
    observer.observe(el);
  });
</script>

</body>
</html>

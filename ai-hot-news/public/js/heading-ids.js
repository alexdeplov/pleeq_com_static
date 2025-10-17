(function () {
  // Run after DOMContentLoaded to ensure content is present
  function slugify(text) {
    return text
      .toString()
      .trim()
      .toLowerCase()
      // Replace non-letter/digit characters with hyphens
      .replace(/[^\p{L}\p{N}]+/gu, '-')
      // Remove leading/trailing hyphens
      .replace(/^-+|-+$/g, '')
      // Collapse multiple hyphens
      .replace(/-+/g, '-');
  }

  function ensureUnique(base, used) {
    let id = base;
    let i = 1;
    while (used.has(id) || document.getElementById(id)) {
      id = base + '-' + i;
      i += 1;
    }
    used.add(id);
    return id;
  }

  function addHeadingIds() {
    // Scope to article content: look for common content containers
    const containers = document.querySelectorAll('.prose, article, .post-content, .content');
    if (!containers.length) return;

    const used = new Set();

    containers.forEach(container => {
      // Find headings h1-h6 inside each container
      const headings = container.querySelectorAll('h1, h2, h3, h4, h5, h6');
      headings.forEach(h => {
        if (h.id) return; // don't overwrite existing ids
        const text = h.textContent || h.innerText || '';
        if (!text.trim()) return;
        const base = slugify(text);
        if (!base) return;
        const id = ensureUnique(base, used);
        h.id = id;
      });
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', addHeadingIds);
  } else {
    addHeadingIds();
  }
})();

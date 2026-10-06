const menu = document.querySelector(".menu-toggle");
const nav = document.querySelector("nav");
menu?.addEventListener("click", () => nav.classList.toggle("open"));

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) entry.target.classList.add("show");
    });
}, { threshold: 0.12 });

document.querySelectorAll(".reveal").forEach(el => observer.observe(el));

let xp = 0;
const xpEl = document.getElementById("xp");
const levelEl = document.getElementById("level");

function gainXP() {
    xp += Math.floor(Math.random() * 7) + 1;
    if (xp >= 100) {
        xp = 0;
        let level = parseInt(levelEl.textContent, 10) + 1;
        levelEl.textContent = String(level).padStart(2, "0");
    }
    xpEl.textContent = String(xp).padStart(3, "0");
}
setInterval(gainXP, 1800);

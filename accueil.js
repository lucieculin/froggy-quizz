let astre = document.querySelector("#astre");
let fqz = document.querySelector("#title");
const span1 = document.querySelector("#span1");
const span2 = document.querySelector("#span2");
let cloud = document.querySelector("#cloud");
let cloudBack = document.querySelector("#cloud-back");
let tds1 = document.querySelector("#tds1");
let tds2 = document.querySelector("#tds2");
let justQ = document.querySelector("#just-q");
let nav1 = document.querySelector("#nav1");
let nav2 = document.querySelector("#nav2");
let parallax = document.querySelector("#section");

document.addEventListener("scroll", () => {
  let value = window.scrollY;
  fqz.style.top = value * 1 + 300 + "px";
  if (value < 340) {
    fqz.style.left = 50 - value / 40 + "%";
    tds1.style.width = value * 1 + "px";
    tds2.style.width = value * 1 + "px";
  }
  span1.style.left = 50 + value / 15 + "%";
  span1.style.top = value * 1 + 200 + "px";
  span2.style.left = 50 - value / 15 + "%";
  span2.style.top = value * 1 + 520 + "px";
  if (value < 10) {
    justQ.style.left = -80 + value * 1 + "px";
  }
  if (value >= 1040) {
    nav2.style.position = "fixed";
    nav2.style.top = "4rem";
  } else {
    nav2.style.position = "absolute";
    nav2.style.top = "";
  }

  astre.style.top = value * 1.1 - 400 + "px";
  astre.style.left = value * -0.1 - 150 + "px";
  cloudBack.style.top = value * 0.9 + "px";
  cloud.style.top = value * 0.5 + "px";
});

/*******navbarscroll************/

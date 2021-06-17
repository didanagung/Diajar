// DOM Selection
// document.getElementById() mengembalikan element
const title = document.getElementById("judul");
title.style.color = "red";
title.style.backgroundColor = "#ccc";
title.innerHTML = "Didan Agung Sergia";

// document.getElementsByTagName() mengembalikan HTMLColections (array)
const p = document.getElementsByTagName("p");
for (let i = 0; i < p.length; i++) {
  p[i].style.backgroundColor = "skyblue";
}

// jika kita mengambil HTMLCollection misalnya h1 cuma ada 1, tetep itu tudak bisa dikatakan element, tetapi tetap HTMLCollection
const h1 = document.getElementsByTagName("h1")[0];
h1.style.fontSize = "50px";

// document.getElementsByClassName() mengembalikan HTMLCollection
const p1 = document.getElementsByClassName("p1")[0];
p1.style.fontSize = "20px";

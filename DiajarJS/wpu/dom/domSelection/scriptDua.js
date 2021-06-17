// document.querySelector() menghasilkan element sama jeung document.getElementById()

// const p4 = document.querySelector("#b p");
// p4.style.color = "green";

// document.querySelectorAll() mengembalikan nodelist
const p = document.querySelectorAll("p")[3];
p.style.backgroundColor = "skyblue";
// anda bisa pakai cara yang diatas atau bisa untuk lebih spesifik pake cara yang ini

const section = document.getElementById("b");
const p4 = section.getElementsByTagName("p")[0];
p4.style.color = "green";

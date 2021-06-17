// manipulasi nodelist

// membuat element baru
const pBaru = document.createElement("p"); //membuat element p
const txtPBaru = document.createTextNode("Paragraf Baru"); //menambahkan text (tapi text ini belum milik siapapun artinya belum masuk ke dalam tag p)

// simpan tulisan ke dalam paragraf
pBaru.appendChild(txtPBaru);

// simpan pBaru di akhir section A
const sectionA = document.querySelector("section#a");
sectionA.appendChild(pBaru); //simpan ke akhir element parrent

const liBaru = document.createElement("li");
const txtLiBaru = document.createTextNode("List Baru");
liBaru.appendChild(txtLiBaru);

const ul = document.querySelector("section#b ul");
const li2 = ul.querySelector("li:nth-child(2)");

ul.insertBefore(liBaru, li2);
// di atas di dalam kiri yaitu apa yang kita inputkan dan yang kanan adalah dimana yang mau diinputkan

const link = sectionA.querySelector("a");
// menghapus child element
sectionA.removeChild(link);

const sectionB = document.getElementById("b");
const p4 = sectionB.getElementsByTagName("p")[0];

const h2Baru = document.createElement("h2");
const txtH2Baru = document.createTextNode("H2 Baru Nih");
h2Baru.appendChild(txtH2Baru);

// node baru menggantikan node lama
sectionB.replaceChild(h2Baru, p4);
// parameter pertama adalah yang baru, parameter kedua adalah dimana kita ingin menggantikannya

// yang tadi diubah
pBaru.style.backgroundColor = "blueviolet";
h2Baru.style.backgroundColor = "blueviolet";
liBaru.style.backgroundColor = "blueviolet";

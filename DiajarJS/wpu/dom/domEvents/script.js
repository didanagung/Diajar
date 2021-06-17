// inline HTML (sangat tidak disarankan)

// const p3 = document.querySelector(".p3");

// function ubahWarna() {
//   p2.style.backgroundColor = "blueviolet";
// }

// const p2 = document.querySelector(".p2");
// p2.onclick = ubahWarna;  -->tidak perlu menambahkan kurung karena bisa langsung

// addEventListener() <-- menggunakan ini lebih baik

const p4 = document.querySelector("section#b p");
p4.addEventListener("click", function () {
  const ul = document.querySelector("section#b ul");
  const liBaru = document.createElement("li");
  const txtLiBaru = document.createTextNode("List Baru");
  liBaru.appendChild(txtLiBaru);
  ul.appendChild(liBaru);
});
// perbedaan anara addEventListener dengan yang lainnya adalah jika memakai ini akan menumpukkan dengan perintah lainnya, berbeda dengan sebelumnya akan menggantikan

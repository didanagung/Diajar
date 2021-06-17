// const h1 = document.querySelector("h1");
const tmbl = document.getElementById("tUbhWarna");

// tmbl.addEventListener("click", function () {
//   h1.style.backgroundColor = "blueviolet";
// });

tmbl.onclick = function () {
  //   document.body.style.backgroundColor = "blueviolet";
  document.body.classList.toggle("ungu");
};

const tAcakWarna = document.createElement("button");
const txtAcakWarna = document.createTextNode("Ubah Warna Acak");
tAcakWarna.appendChild(txtAcakWarna);
tAcakWarna.setAttribute("type", "button");
// document.body.appendChild(tAcakWarna);
tmbl.after(tAcakWarna);

tAcakWarna.addEventListener("click", function () {
  // round(sekitar), floor(kebawah), ceil(keatas) adalah bentuk pembulatan
  const r = Math.round(Math.random() * 255 + 1);
  const g = Math.round(Math.random() * 255 + 1);
  const b = Math.round(Math.random() * 255 + 1);
  // math.random() adalah bagaimana kita mengacak angka yang kurang dari angka 1 dan lebih dari 0
  // untuk yang kali(*) 255 dan tambah (+) 1 adalah pembatas bahwa si angka tersebut akan lebih dari 1 dan kurang dari 255(sederhananya)
  document.body.style.backgroundColor = "rgb(" + r + "," + g + "," + b + ")";
});

// mengambil element range pada html
const sMerah = document.querySelector("input[name=sMerah]");
const sHijau = document.querySelector("input[name=sHijau]");
const sBiru = document.querySelector("input[name=sBiru]");

// event input adalah realtime kita menginputkan sesuatu
sMerah.addEventListener("input", function () {
  // sMerah.value untuk menangkap hasil yang diakibatkan pada input range tadi
  const r = sMerah.value;
  const g = sHijau.value;
  const b = sBiru.value;
  document.body.style.backgroundColor = "rgb(" + r + "," + g + "," + b + ")";
});

sHijau.addEventListener("input", function () {
  const r = sMerah.value;
  const g = sHijau.value;
  const b = sBiru.value;
  document.body.style.backgroundColor = "rgb(" + r + "," + g + "," + b + ")";
});

sBiru.addEventListener("input", function () {
  const r = sMerah.value;
  const g = sHijau.value;
  const b = sBiru.value;
  document.body.style.backgroundColor = "rgb(" + r + "," + g + "," + b + ")";
});

// mengubah warna sesuai jalannya mouse
document.body.addEventListener("mousemove", function (event) {
  // posisi mouse ketika digerakan jika X sumbunya horizontal dan Y adalah vertikal
  // event.clientX
  // ukuran browser
  // window.innerWidth adalah untuk mengetahui lebar body atau browsernya
  // window.innerHeight adalah untuk mengetahui Panjang body atau browsernya

  const xPos = Math.round((event.clientX / window.innerWidth) * 255);
  const yPos = Math.round((event.clientY / window.innerHeight) * 255);
  document.body.style.backgroundColor = `rgb(${xPos},${yPos},100)`;
});

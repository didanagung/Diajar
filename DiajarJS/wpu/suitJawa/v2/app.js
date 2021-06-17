function ambilPilihanComputer() {
  const comp = Math.random();

  if (comp < 0.34) return "semut";
  if (comp >= 0.34 && comp < 0.67) return "gajah";
  return "orang";
}

function ambilHasil(comp, player) {
  if (player == comp) return "SERI";
  if (player == "gajah") return comp == "semut" ? "KALAH" : "MENANG";
  if (player == "semut") return comp == "gajah" ? "MENANG" : "KALAH";
  if (player == "orang") return comp == "gajah" ? "KALAH" : "MENANG";
}

// membuat animasi putar gambar (seolah olah komputernya mikir dulu)
function putar() {
  const imgComputer = document.querySelector(".img-computer");
  const gambar = ["gajah", "semut", "orang"];
  let i = 0;

  const waktuMulai = new Date().getTime(); //mengambil waktu saat gambar ditekan
  setInterval(function () {
    if (new Date().getTime() - waktuMulai > 1000) {
      //angka dikanan berarti sedetik karena hitungannya miliseccond
      clearInterval; //gunanya memberhentikan interval
      return;
    }
    imgComputer.setAttribute("src", `img/${gambar[i++]}.png`); //memilih gambar acak dari value gambar tadi yang sudah di deklarasikan sebelumnya
    if (i == gambar.length) i = 0; //untuk mengembalikan lagi gambar jika sudah lebih dari data yang di dalam array gambar, karena kalau tidak diberhentikan atau dibalikan lagi maka si i akan terus bertambah dan gambar tidak akan muncul
  }, 100); //angka di kanan memiliki arti 0,1 detik
}

// memilih gambar di dalam list
const pilihan = document.querySelectorAll("li img");
// perulangan untuk memilih gambar
pilihan.forEach(function (pil) {
  // jadi di bawah ini kita pilih sesuai yang kita klik dan komputer memilih random fungsinya satu tapi mewakili semuanya karena di variable pilihan kita memilih nodelist bukan elementnya satu satu
  //   dan di bawah ini ketika player memilih rolenya
  pil.addEventListener("click", function () {
    const pilihanComputer = ambilPilihanComputer();
    const pilihanPlayer = pil.className;
    const hasil = ambilHasil(pilihanComputer, pilihanPlayer);

    putar();

    setTimeout(function () {
      const imgComputer = document.querySelector(".img-computer");
      imgComputer.setAttribute("src", `img/${pilihanComputer}.png`);
      const hasilAkhir = document.querySelector(".info");
      hasilAkhir.innerHTML = hasil;
    }, 1000); //ini berguna untuk menjalankan setelah menunggu 1 detik
  });
});

// const pGajah = document.querySelector(".gajah");
// pGajah.addEventListener("click", function () {
//   const pilihanComputer = ambilPilihanComputer();
//   const pilihanPlayer = pGajah.className;
//   const hasil = ambilHasil(pilihanComputer, pilihanPlayer);

//   //   mengganti gambar computer
//   const imgComputer = document.querySelector(".img-computer");
//   imgComputer.setAttribute("src", `img/${pilihanComputer}.png`);

//   const hasilAkhir = document.querySelector(".info");
//   hasilAkhir.innerHTML = hasil;
// });

// const pSemut = document.querySelector(".semut");
// pSemut.addEventListener("click", function () {
//   const pilihanComputer = ambilPilihanComputer();
//   const pilihanPlayer = pSemut.className;
//   const hasil = ambilHasil(pilihanComputer, pilihanPlayer);
//   const imgComputer = document.querySelector(".img-computer");
//   imgComputer.setAttribute("src", `img/${pilihanComputer}.png`);
//   const hasilAkhir = document.querySelector(".info");
//   hasilAkhir.innerHTML = hasil;
// });

// const pOrang = document.querySelector(".orang");
// pOrang.addEventListener("click", function () {
//   const pilihanComputer = ambilPilihanComputer();
//   const pilihanPlayer = pOrang.className;
//   const hasil = ambilHasil(pilihanComputer, pilihanPlayer);
//   const imgComputer = document.querySelector(".img-computer");
//   imgComputer.setAttribute("src", `img/${pilihanComputer}.png`);
//   const hasilAkhir = document.querySelector(".info");
//   hasilAkhir.innerHTML = hasil;
// });

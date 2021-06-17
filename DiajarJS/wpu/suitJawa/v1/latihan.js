var tanya = true;
while (tanya) {
  // menangkap pilihan player
  var p = prompt("Pilih? Gajah Semut Orang");

  // menangkap pilihan komputer dan mengacak pilihannya
  var comp = Math.random();

  if (comp < 0.34) {
    comp = "semut";
  } else if (comp >= 0.34 && comp < 0.67) {
    comp = "gajah";
  } else {
    comp = "orang";
  }

  // menentukan aturan
  var hasil = "";

  if (p == comp) {
    hasil = "Kalian Seri";
  } else if (p == "gajah") {
    hasil = comp == "semut" ? "Komputer Menang" : "Kamu Menang";
  } else if (p == "semut") {
    hasil = comp == "gajah" ? "Kamu Menang" : "Komputer Menang";
  } else if (p == "orang") {
    hasil = comp == "gajah" ? "Komputer Menang" : "Kamu Menang";
  } else {
    hasil = "Anda Salah memilih karakter!";
  }

  // menampilkan hasil
  alert(
    "Kamu memilih " +
      p +
      " dan Komputer memilih " +
      comp +
      "\nMaka hasilnya adalah : " +
      hasil
  );

  tanya = confirm("Bermain lagi?");
}
alert("Terimakasih Sudah Bermain");

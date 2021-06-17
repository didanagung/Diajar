// innerHTML adalah jika kita ingin mengubah sesuatu di dalam tag html tidak perduli apapun di dalamnya

// const title = document.getElementById("judul");
// title.innerHTML = "<strong> Didan Agung Sergia </strong>";

// const sectionA = document.querySelector("section#a");
// sectionA.innerHTML = "Hello World";

// mengubah css atau style pada html menggunakan JS

// const title = document.querySelector("#judul");
// title.style.color = "lightblue";
// title.style.backgroundColor = "blueviolet";

// atribute adalah sesuatu yang bisanya ada didalam tag HTML contoh id, class, dll

// const a = document.querySelector("section#a a");

// setAttribute adalah cara untuk menambahkan attribute baru kepada suatu tag yang sudah di seleksi, tetapi ini sifatnya me-replace suatu class, bukan menanbah
// a.setAttribute("id", "link");

// mengambil attribute yang mengarah kemana atau isinya apa
// a.getAttribute("href");  <-- di console we nyieunna

// menghilangkan Attribute
// a.removeAttribute("href");

const p2 = document.querySelector(".p2");

// untuk menambahkan class baru atau memanipulasi class

// p2.classList.add() --> untuk menambahkan class baru
// p2.classList.remove() --> untuk menghapus class
// p2.classList.toggle() --> jika ada kelasnya maka hapus (false), jika tidak ada kelasnya maka tambahkan (true)
// p2.classList.item() --> mengetahui kelas tertentu yang ada di sebuah ekement misal jika ada suatu element memounyai 3 kelas dan kita ingin mengetahui kelas ke 2 maka gunakan perintah ini
// p2.classList.contains() --> bertanya apakah ada class di dalamnya
// p2.classList.replace() --> untuk menimpa class yang sudah ada contoh : p2.classList.replace("p2", "p20")

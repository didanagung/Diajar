// // Setup
// var contacts = [
//   {
//     firstName: "Akira",
//     lastName: "Laine",
//     number: "0543236543",
//     likes: ["Pizza", "Coding", "Brownie Points"],
//   },
//   {
//     firstName: "Harry",
//     lastName: "Potter",
//     number: "0994372684",
//     likes: ["Hogwarts", "Magic", "Hagrid"],
//   },
//   {
//     firstName: "Sherlock",
//     lastName: "Holmes",
//     number: "0487345643",
//     likes: ["Intriguing Cases", "Violin"],
//   },
//   {
//     firstName: "Kristian",
//     lastName: "Vos",
//     number: "unknown",
//     likes: ["JavaScript", "Gaming", "Foxes"],
//   },
// ];

// function lookUpProfile(name, prop) {
//   //   fungsi di bawah untuk mengambil berapa banyak data yang ada di dalam object
//   for (var i = 0; i < contacts.length; i++) {
//     //   ini jika yang di ambil oleh user cocok dengan nama misalkan, maka JS akan memilih properti di bagian firstName dan jika tidak maka akan muncul notif No such property atau property tidak ada
//     if (contacts[i].firstName === name) {
//       return contacts[i][prop] || "No such property";
//     }
//   }
//   return "No such contact";
// }

// console.log(lookUpProfile("Vos", "likes"));

// membuat fungsi anu dihancurkan ES6
const stats = {
  firstName: 1,
  middleName: 2,
  lastName: "Sergia",
  age: 21,
  status: "Jomblo",
};

//  bentuk awal
// const profileUpdate = (profileData) => {
//   const { name, age, nationality, location } = profileData;
// }
const half = ({ firstName, middleName }) => firstName + middleName;

console.log(half(stats));

# gets.chomp adalah sebuah sytax dari ruby yang menangkap inputan dari user (biasanya bersifat string) dan bisa dipakai berulang ulan
puts "Jenis kelamin anda? L/P"
kelamin = gets.chomp
puts "Berapa umur anda?"
umur = gets.chomp

puts "Anda berjenis kelamin #{kelamin} dan anda berumur #{umur}"

# mengubah inputan menjadi integer dengan menambahkan .to_i
puts "Masukkan angka pertama"
a = gets.chomp.to_i
puts "Masukkan angka kedua"
b = gets.chomp.to_i

puts "jika dijumlahkan hasilnya adalah #{a+b}"
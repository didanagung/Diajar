# di ruby, variable array sebaiknya menggunakan kata jamak karena unruk mewakili data di dalam array yang pastinya jamak

name1 = "Didan Agung Sergia"
name2 = "Muhammad Fikri Abdillah"
name3 = "Aditya Maulana"

names = [name1, name2, name3]
# memanggil data di array
puts names[0]

puts nil

# untuk memanggil semua data pada array
names.each do |name|
    puts name
end
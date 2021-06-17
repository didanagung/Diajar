# operasi matematika pada array
a = [1,2,3,2,3,9]
b = [4,5,6]
c = [2,3,4]

sum = a + b
print sum

puts nil

min = a - c
print min

puts nil

# crs = a * b teu bisa wkwkkw
# print crs

# operasi boolean 
print a & c # menghasilkan nilai yang sama di dalam array
puts nil
print a | c #menggabungkan array dan memangil satu kali jika value di dalam arraynya ada yang sama

puts nil
print a.reverse #membalikkan nilai di dalam array
puts nil
print a.length #panjang nilai di dalam array atau bisa di tulis a.size
puts nil
print a.sort #mengurutkan nilai array yang terkecil
puts nil
print a.uniq #menghapus duplikat
puts nil
print a.uniq!
puts nil
print a.max #mengambil nilai maksimal
puts nil
print a.min #mengambil nilai minimum
puts nil
print a.freeze
puts nil
print a.include?(2) #pakah di dalam array terdapat nilai tersebut?
puts nil

# looping menggunakan for in
d = ["a", "b", "c"]

for elemen in d
    puts "Value: #{elemen}"
end
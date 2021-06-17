x = 0
=begin
#untuk x yang berada di dalam 1 sampai 5 maka tampilkan x
for x in 1..10
    next if x % 2 == 0 #untuk meloncat angka yang genap (harus ditulis diatas puts)
    puts x
    #redo untuk mengulangi syntax diatas (kalau dijalankan akan menghasilkan infinity loops)
    # retry if x > 2 
    #puts "ini nomor #{x}" ini juga akan menghasilkan infinity loops
    break if x == 5 #break untuk menghentikan program (harus ditulis dibawah puts)
=end

for i in 2...4
    x += i
end
puts x
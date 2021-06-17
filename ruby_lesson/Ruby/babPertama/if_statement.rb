# di dalam ruby jika anda menggunakan if statement maka kondisi di dalam if tidak menggunakan kurung ()

nilai = 30

if nilai >= 85
    puts "Nilai anda sangat bagus"
# perlu di ingat di dalam ruby else if diubah menjadi elsif
elsif nilai >= 70
    puts "Nilai anda lumayan bagus"
else 
    puts "Nilai anda kurang, silahkan coba lagi"
end

# ganjil genap

number = -1

if number % 2 == 0 || number == 0
    puts "Even"
else
    puts "Odd"
end
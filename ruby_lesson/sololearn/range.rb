=begin
 ruby memiliki syntax untuk mengatasi hal ini
 anda hanya tinggal menuliskan kode ..(titik dua) untuk mengetahui yang ada di dalam range tersebut
 contohnya : 
            x = 1..7
            puts x maka hasilnya akan berbentuk array yaitu [1,2,3,4,5,6,7] angka terakhir di masukkan
    dan ada satu lagi yaitu ...(titik tiga) yang tidak memasukkan angka seteahnya
contohnya : 
            y = 1...3
            puts y maka hasilnya adalah [1,2]

            MARKICOB 
            Mari Kita Cobaaaaa!
=end

x = (1..7).to_a #.to_a disini berguna untuk mengubah data menjadi array
puts x
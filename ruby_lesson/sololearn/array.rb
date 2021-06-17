# array di dalam ruby sama seperti bahasa yang lain [1,2,3]
arr = ["Didan", 16, true]

# menambahkan data kedalam array
arr << 8 #menambahkan di akhir
arr.push("Agung") #menambahkan di akhir array
arr.insert(3, "Sergia") #menambahkan parameter pertama diisi dengan mau di index ke berapa array di tambahkan dan parameter kedua berisi valuenya

# menghapus data yang ada di dalam array
arr.pop #menghapus data terakhir dalam array
arr.delete_at(1) #menghapus data yang anda mau,di dalam parameternya berarti index mana yang akan di hapus

# range di dalam array
# data di dalam range menunjukkan index ke berapa
print arr[1..3]

# print arr
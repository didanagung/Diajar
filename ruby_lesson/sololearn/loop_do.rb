x = 0

# akan melakukan pengulangan sampai bertemu syntax break, maka awas jangan sampai lupa syntax break jika anda tidak mau mendapatkan infinity loop

loop do 
    puts x
    x += 1
    break if x > 10
end
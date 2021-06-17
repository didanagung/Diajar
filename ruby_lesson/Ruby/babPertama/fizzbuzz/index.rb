#menggunakan each
def fizz_buzz(max)
    (1..max).each do |i|
        if i % 3 == 0 && i % 5 == 0
            print "FizzBuzz "
        elsif i % 3 == 0
            print "Fizz "
        elsif i % 5 == 0
            print "Buzz "
        else
            print "#{i} "
        end
    end
end

fizz_buzz(20)
soma = 0

(0..40).step(2) do |i|
  soma += i
end

resultado = soma.to_f / 30

puts "Resultado: %.2f" % resultado

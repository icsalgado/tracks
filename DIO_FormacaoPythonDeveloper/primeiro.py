print ("Hello World")

valor = 10
texto = str(valor) #conveersão de tipo

print(valor)
print(texto)

print(type(valor))#exibir o tipo da variavel
print(type(texto))

nome = input("Informe seu nome: ")
print(nome)
idade = input("Informe sua idade: ")
print(idade)

print(nome, idade, sep="#") #muda o separador
print(nome, idade, end="...\n") #insere no final ... e quebra de linha

curso = "Curso de Python"
nome_curso = curso

print(curso is nome_curso) #ocupam a mesma regiao de memoria?
print(curso is not nome_curso) #não ocupam a mesma regiao de memoria?

print("31" in idade) # a string 31 esta na variavel idade?
print("Java" not in curso) # a string java nao esta na variavel curso?
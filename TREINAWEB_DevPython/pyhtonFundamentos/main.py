nome = "Iuri"
idade = 31
sobrenome = "Salgado"


print("Olá", nome, sobrenome, idade)
print(f"Olá {nome} {sobrenome} {idade}")

nomeDoMeio = input("Informe seu nome do meio: ")

print(f"Nome completo {nome} {nomeDoMeio} {sobrenome}")

idade = int(input("Informe a idade atual: "))

print(f"Nome completo {nome} {nomeDoMeio} {sobrenome}, {idade}")

novoNome, novaIdade, novoSobrenome = "Joao", 20, "Silva" #atribuição multipla

print("Olá", novoNome, novoSobrenome, novaIdade)

print(type(nome))

texto = input()
partes = texto.split(" ")
print(partes[0])
print(partes[1])
print(partes[2])
print(partes[3])

soma_idades = idade + novaIdade;
print(soma_idades)

valor = int(input("Informe um numero"))

if (valor > 10):
    print("O valor eh maior que 10")
elif (valor < 5):
    print("O valor eh menor que 5")
else:
    print("O valor esta entre 5 e 10")

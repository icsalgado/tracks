saldo = 2000.0
saque = float(input("Informe o valor do saque"))

status = "Sucesso" if saldo >= saque else "Falha"

if(saque > saldo):
    print(status, " - Saque maior que o saldo")
elif(saque == saldo):
    print(status, " - Saldo zerado")
else:
    saldo = saldo - saque
    print(status, " - O saldo atual eh: ", saldo)

texto = input("informe uma palavra")
VOGAIS = "AEIOU"

for letra in texto:
    if letra.upper() in VOGAIS:
        print(letra, end="")
else: #não é muito usado
    print() #queba de linha

for numero in range(0, 51, 5): #tabuada do 5 com (start, stop, step)
    print(numero, end="\n")


opcao = -1

while opcao != 0:
    opcao = int(input("Informe 0 para sair"))
    if(opcao == 0):
        print("Saindo")
    elif(opcao == 10):
        break
    else:
        print("Continuando")
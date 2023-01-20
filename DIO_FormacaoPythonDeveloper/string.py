#tratamento de strings

nome = "    |iUri SalgadO|    "

print("."+ nome.upper()+".")
print("."+ nome.lower()+".")
print("."+ nome.title()+".")


print("."+ nome.strip()+".")
print("."+ nome.rstrip()+".")
print("."+ nome.lstrip()+".")

curso = "Python"
print(curso.center(20, "#"))

print("-".join(curso))

#interpolação de variaveis

print("Olá %s seu curso é %s" %(nome, curso))

print("Olá {1} seu curso é {0}" .format(nome, curso))

print("Olá {} seu curso é {}" .format(nome, curso))

print("Olá {course} seu curso é {name}" .format(name=nome, course=curso))

print(f"Olá {nome} seu curso é {curso}") #Esse é o mais recomendado

PI = 3.14159

print(f"Valor de PI: {PI:.2f}") #:.2f para formata a saida do floar(constante PI) com duas casas decimais

#Fatiamento de strings

nome_completo = "Iuri de Carvalho Salgado"

print(nome_completo[0])
print(nome_completo[:9])
print(nome_completo[9:])
print(nome_completo[9:11])
print(nome_completo[2:10:2])
print(nome_completo[:])
print(nome_completo[::-1])
print(nome_completo[-5])

#Strings Multiplas Linhas ou strings triplas

novo_nome  = "Guilherme"

mensagem = f'''.

O nome do professor é: 
{novo_nome}

.'''

print(mensagem)
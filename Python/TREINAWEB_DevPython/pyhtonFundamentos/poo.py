from usuario import Usuario #para importar um metodo do arquivo usuario

#import usuario #importa todos os metodos do arquivo

usuario = Usuario("Iuri", 31, "Salgado") #instanciar

print(f"{usuario.nome} {usuario.sobrenome}, {usuario.idade}")

#Estrutura de dados Lista

continuar = 1

lista_usuarios = []

while continuar != 0:
    try:
        nome = input("Nome: ")
        idade = int(input("Idade: "))
        sobrenome = input("Sobrenome: ")

        usuario2 = Usuario(nome, idade, sobrenome)

        lista_usuarios.append(usuario2)

        print(f"ola {usuario2.nome} {usuario2.sobrenome}, {usuario2.idade}")

        continuar = int(input("0 para sair"))
    except ValueError:
        print("Entrada invalida")
else:
    print("Lista usuarios: ")
    for x in lista_usuarios:
        print(f"{x.nome} {x.sobrenome}, {x.idade}")
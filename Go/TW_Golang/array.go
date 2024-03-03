package main
import "fmt"

func main(){
	var amigos [5]string //[tamanho do vetor]tipo

	fmt.Println(amigos)

	for i:=0; i < len(amigos); i++ {
		fmt.Println("Digite um nome")
		fmt.Scanf("%s", &amigos[i])
	}
	fmt.Println(amigos)
	fmt.Println("Seus amigos sao:")
	//opção para o foreach
	for _, amigo := range amigos{ //_ blan identifier
		fmt.Printf(" - %s \n", amigo)
	}

	var matriz [2][2]int
	for i:=0; i < 2; i++ {
		for j:=0; j < 2; j++ {
			fmt.Println("Digite um numero")
			fmt.Scanf("%d", &matriz[i][j])
		}
	}
	fmt.Println(matriz)

	novosAmigos:= make([]string, 3) //slice pode ser definido com tamanho inicial 3 mas é flexivel para expandir
	nome := ""

	i := 0

	for nome != "q"{
		fmt.Println("Informe um nome")
		fmt.Scanf("%s", &nome)
		if nome != "q"{
			if i < 3{
				novosAmigos[i] = nome
			} else {
				novosAmigos = append(novosAmigos, nome) //vai expandir o vetor - slice selecionado, o que vai ser inserido
			}
			i++
		}
	}
	fmt.Println(novosAmigos)
	for _, amigo := range novosAmigos{ //_ blank identifier
		fmt.Printf(" - %s \n", amigo)
	}

	algunsAmigos := novosAmigos[1:3] //indice inicial e indice final exceto ele mesmo
	for _, amigo := range algunsAmigos{ //_ blank identifier
		fmt.Printf(" - %s \n", amigo)
	}
}
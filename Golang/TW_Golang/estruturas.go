package main
import "fmt"

func main(){

	var idade int
	fmt.Print("Digite a sua idade: ")
	fmt.Scanf("%d", &idade)

	if idade >= 18{
		fmt.Println("Maior de idade")
	}else{
		fmt.Println("Menor de idade")
	}

	switch idade{
	case 18:
		fmt.Println("Tem 18 e é maior") //NÃO PRECISA DE BREAK
	case 17, 16, 15, 14:
		fmt.Println("Adolescente")
	default:
		fmt.Println("Outra idade")
	}

	var numero int

	fmt.Println("Informe o numero: ")
	fmt.Scanf("%d", &numero)

	for i := 0; i <= 10; i++{
		fmt.Println(numero," x ", i, " = ", numero*i)
	}

	//não existe while no go se usa o for a seguir

	for numero <= 10{
		fmt.Println(numero)
		numero++
	}

}
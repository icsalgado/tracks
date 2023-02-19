package main
import "fmt"

const ebulicaoF float64 = 212.0

func main(){
	var temperaturaF float64 = ebulicaoF
	var temperaturaC float64 = (temperaturaF - 32)*5/9

	fmt.Println(temperaturaC)

	//operador marmota ou operador Gopher ou operador curto

	numero := 30 //menos verboso

	//numero = "texto" //a tipagem não é fraca então vai retornar erro
	fmt.Println(numero)
	fmt.Printf("%d", numero)
	fmt.Printf("não quebrou a linha")

	fmt.Printf("%d %T", numero, numero) // para mostrar o tipo

	//conversão de tipo

	fmt.Println("")

	var valor int = 20
	
	var outroValor float64 = float64(valor) //casting

	fmt.Println(outroValor)

	
	
}
package main
import "fmt"

func main(){
	var numero1, numero2 int
	var operacao string
	fmt.Print("Digite um numero ")
	fmt.Scanf("%d", &numero1)
	fmt.Print("Digite operacao ")
	fmt.Scanf("%s", &operacao)
	fmt.Print("Digite um numero ")
	fmt.Scanf("%d", &numero2)

	if operacao == "+" {
		somar(numero1, numero2)
	} else if operacao == "-" {
		resultado := subtrair(numero1, numero2)
		fmt.Printf("%d - %d = %d\n", numero1,  numero2, resultado)
	} else if operacao == "*" {
		resultado := multiplicar(numero1, numero2)
		fmt.Printf("%d x %d = %d\n", numero1,  numero2, resultado)
	} else if operacao == "/" {
		resultado, resto := dividir(numero1, numero2)
		fmt.Printf("quociente = %d; resto = %d\n", resultado, resto)
	} else if operacao == "$" {
		incremento, decremento := incDecrementar(numero1, numero2)
		fmt.Printf("Incremento = %d; decremento = %d\n", incremento, decremento)
	}
}

func somar(n1 int, n2 int){
	fmt.Printf("%d + %d = %d \n", n1, n2, n1+n2)
}

//o retorno precisa ter o tipo declarado depois dos parametros
func subtrair(n1 int, n2 int) int {
	return n1-n2
}

//depois dos parametros já está sendo criada a variavel que retornara da função
func multiplicar(n1 int, n2 int) (resultado int) {
	resultado = n1 + n2
	return
}

//nada impede que se tenha mais de um retorno, mas não é muito indicado
func dividir(n1 int, n2 int) (int, int) {
	resultado := n1 / n2
	resto := n1 % n2
	return resultado, resto
}

func incDecrementar(n1 int, n2 int) (inc int, dec int) {
	inc = n1 + n2
	dec = n1 - n2
	return
}
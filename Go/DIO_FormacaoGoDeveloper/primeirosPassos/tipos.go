package main
import "fmt"

func main(){
	fmt.Println("2 + 2 = ", 2+2)

	fmt.Println(len("Hello World"))
	fmt.Println("Hello World"[2])
	fmt.Println("Hello" + " " + "World")

	var array[5] int //array de 5 inteiros
	array[4] = 80 //posicao 4 recebe 80

	fmt.Println(array)

}
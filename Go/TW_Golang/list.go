package main
import (
	"fmt"
	"container/list"
)

func main(){
	numeros := list.New()

	el := numeros.PushBack(1) //insere no final
	numeros.PushFront(0)
	numeros.PushBack(2)

	for e := numeros.Front(); e != nil; e = e.Next() { //Front retorna o primeiro elemento, nil é o nulo, e. vai mostrar a lista duplamente ligada
		fmt.Println(e.Value)
	}
	numeros.Remove(el)
	fmt.Println("-----------")
	for e := numeros.Front(); e != nil; e = e.Next() { //Front retorna o primeiro elemento, nil é o nulo, e. vai mostrar a lista duplamente ligada
		fmt.Println(e.Value)
	}
}
package main
import "fmt"

func main(){
	for i := 0; i <= 10; i++ {
	
		if i == 0{
			fmt.Println("zero")
		} else if i % 2 == 0{
			fmt.Println(i)
		} else {
			fmt.Println("impar")
		}
	
	}
}
package main
import "fmt"

func main(){
	for i := 0; i <= 10; i++ {
		if i == 0{
			fmt.Println("zero")
		} else if i % 2 == 0{

			switch i {
				case 2:
					fmt.Println("dois")
					break
				case 4:
					fmt.Println("quatro")
					break
				case 6:
					fmt.Println("seis")
					break
				case 8:
					fmt.Println("oito")
					break
				case 10:
					fmt.Println("dez")
					break
				default:
					fmt.Println("NaN")
					break
			} 
		
		} else {
			fmt.Println("impar")
		}
	}
}
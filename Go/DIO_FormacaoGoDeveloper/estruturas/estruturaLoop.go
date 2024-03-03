package main
import "fmt"

func main(){
	i := 0
	for i < 5{
		fmt.Println(i)
		i++
		if i == 2{
			continue
		} else if i == 4{
			break
		}
	}
}
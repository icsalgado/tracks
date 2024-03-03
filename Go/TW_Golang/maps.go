package main
import (
	"fmt"
	"bufio"
	"os"
)

func main(){
	mapaCursos := make(map[string]int)//todo mapa tem uma chave

	scanner := bufio.NewScanner(os.Stdin)

	curso := ""

	for curso != "q"{
		var cargaHoraria int
		fmt.Println("Informe um curso")
		scanner.Scan()
		curso = scanner.Text()

		if curso != "q" {
			fmt.Println("Informe a carga horaria")
			fmt.Scanf("%d", &cargaHoraria)

			mapaCursos[curso] = cargaHoraria
		}
	}
	fmt.Println("Cursos registrados")

	for nomeCurso, cargaHoraria := range mapaCursos{
		fmt.Printf(" - %s: %dh \n", nomeCurso, cargaHoraria)
	}

	curso = ""
	for curso != "q"{
		fmt.Println("Curso a remover")
		scanner.Scan()
		curso = scanner.Text()
		if curso != "q"{
			cargaHoraria, cursoExite := mapaCursos[curso]
			if cursoExite{
				delete(mapaCursos, curso)
				fmt.Printf("O curso %s: %dh foi removido", curso, cargaHoraria)
			} else {
				fmt.Println("Curso não existe")
			}
		}
	}

	for nomeCurso, cargaHoraria := range mapaCursos{
		fmt.Printf(" - %s: %dh \n", nomeCurso, cargaHoraria)
	}
}
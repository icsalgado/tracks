
package Exercicio20;

import java.util.Scanner;
/**
 *
 * @author icsalgado
 */
public class Main {

    public static void main(String[] args) {
        int anoFabricacao = 0;
        float valorCarro = 0.0f;
        float valorDesconto = 0.0f;
        float valorPagar = 0.0f;
        float porcentagemDesconto = 0.0f;
        int totalCarrosSeminovos = 0;
        int totalCarros = 0;
        
        Scanner leitor = new Scanner(System.in);
        
        char desejaRepetir = 's';
        
        while (desejaRepetir == 's'){
            System.out.println("Digite o ano de fabricação do veiculo");
            anoFabricacao = leitor.nextInt();
            
            System.out.println("Digite o valor do veiculo");
            valorCarro = leitor.nextFloat();
            
            if(anoFabricacao <= 2000){
                porcentagemDesconto = 0.12f;
            } else {
                porcentagemDesconto = 0.07f;
                totalCarrosSeminovos++;
            }
            totalCarros++;
            
            valorDesconto = valorCarro * porcentagemDesconto;
            valorPagar = valorCarro - valorDesconto;
            
            System.out.println("Desconto = " + valorDesconto);
            System.out.println("Desconto = " + valorPagar);
            
            System.out.println("Deseja continuar?");
            desejaRepetir = leitor.next().charAt(0);
        }
        
        System.out.println("Total de carros semi novos: " + totalCarrosSeminovos);
        System.out.println("Total de carros: " + totalCarros);
    }
    
}

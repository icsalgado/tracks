
package ComandosEntradaSaida;

import java.util.Scanner;

public class Main {
    
    /**
     * Entrada e sa�da de dados e vari�veis
     */

    public static void main(String[] args) {
        
        Scanner leitor = new Scanner(System.in);
        int idade = leitor.nextInt();
        float cotacaoDolar = leitor.nextFloat();
        double cotacaoEuro = leitor.nextDouble();
        String nome = leitor.nextLine();
        String codigoRua = leitor.next();
        
        System.out.println("Texto exibido no console");
        
    }
    
}

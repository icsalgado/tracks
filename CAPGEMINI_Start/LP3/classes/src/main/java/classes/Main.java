
package classes;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        
        Pessoa objetoPessoa = new Pessoa(70.0f, 1.70f);//instanciada a pessoa enviando valores default para o construtor        
        
        /*
        float imc;//sem orienta��o a objeto
        float peso;
        float altura;
        */
        
        Scanner leitor = new Scanner(System.in);
        
        System.out.println("Informe o peso");
        /*
        objetoPessoa.peso = leitor.nextFloat();//outra classe n�o deve alterar os dados de uma classe
        */
        objetoPessoa.setPeso(leitor.nextFloat());//O objeto gerencia suas informa��es
        System.out.println("Informe a altura");
        /*
        objetoPessoa.altura = leitor.nextFloat();//a classe deve disponibilizar metodos para acesso das suas informa��es
        */
        objetoPessoa.setAltura(leitor.nextFloat());
        
        System.out.println("IMC = " + objetoPessoa.calcularIMC());
        
        /* sem orienta��o a objeto
        System.out.println("Informe o peso");
        peso = leitor.nextFloat();
        System.out.println("Informe a altura");
        altura = leitor.nextFloat();
                
        imc = peso / (altura*altura);        
        System.err.println("IMC = " + imc);
        */
        
    }
    
}

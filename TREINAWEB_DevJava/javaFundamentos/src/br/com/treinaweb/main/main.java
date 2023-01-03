package br.com.treinaweb.main;

import java.util.ArrayList;
import java.util.Scanner;

public class main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		/*System.out.println("Ol� mundo"); // quebra a linha
		System.out.print("Ol� de novo"); // n�o quebra a linha
		System.out.print("Ol� mais uma vez \n"); // quebra a linha com metacaractere pode usar tamb�m o \r no windows
		
		Scanner scanner = new Scanner(System.in); //instaciado scanner, isso por que ele n�o � global
		
		System.out.println("Informe seu nome");
		String nome = scanner.nextLine();//faz a leitura da proxima linha
		System.out.println(nome);
		
		scanner.close();//para encerrar da stresm o scanner*/
		
		Scanner scanner = new Scanner(System.in);
		
		System.out.println("Informe um numero");
		int primeiroNumero = Integer.parseInt(scanner.nextLine());//casting para inteiro
		
		//System.out.println(primeiroNumero);
		
		System.out.println("Informe um numero");
		int segundoNumero = scanner.nextInt();//retorna de fato um inteiro
		
		//System.out.println(segundoNumero);
		
		System.out.println("Informe a operacao");
		char operacao = scanner.next().charAt(0);//.next.charAt vai capturar o caractere na posisao indicada
		//o nextLine considera ate o enter e o next considera o space
		System.out.println(operacao);
		
		System.out.println(String.format("operacao: %d %c %d", primeiroNumero, operacao, segundoNumero));
		
		
		int resultado = 0;
		
		if (operacao == '+') {
			resultado = primeiroNumero + segundoNumero;
			System.out.println(String.format("Soma = %d", resultado));
		}else if(operacao == '-') {
			resultado = primeiroNumero - segundoNumero;
			System.out.println(String.format("Subtracao = %d", resultado));
		}else if(operacao == '*') {
			resultado = primeiroNumero * segundoNumero;
			System.out.println(String.format("Multiplicacao = %d", resultado));
		}else {
			resultado = primeiroNumero / segundoNumero;
			System.out.println(String.format("Divisao = %d", resultado));
		}
		
		
		switch(operacao) {
		case '+':
			resultado = primeiroNumero + segundoNumero;
			System.out.println(String.format("Soma = %d", resultado));
			break;
		case '-':
			resultado = primeiroNumero - segundoNumero;
			System.out.println(String.format("Subtracao = %d", resultado));
			break;
		case '*':
			resultado = primeiroNumero * segundoNumero;
			System.out.println(String.format("Multiplicacao = %d", resultado));
			break;
		case '/':
			resultado = primeiroNumero / segundoNumero;
			System.out.println(String.format("Divisao = %d", resultado));
			break;

		default:
			System.out.println("Entrada invalida");
			break;
		}
		
		ArrayList<String> historico = new ArrayList<String>();//usa um Generics e um operador diamante e o construtor new
		
		String entradaHistorico = String.format("historico", resultado);
		
		historico.add(entradaHistorico); //colocado dentro do historico
		
		scanner.close();
		
		
		
		
	}

}

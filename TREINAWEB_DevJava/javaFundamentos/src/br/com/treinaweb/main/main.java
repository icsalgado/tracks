package br.com.treinaweb.main;

import java.util.Scanner;

public class main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		/*System.out.println("Ol� mundo"); // quebra a linha
		System.out.print("Ol� de novo"); // n�o quebra a linha
		System.out.print("Ol� mais uma vez \n"); // quebra a linha com
													// metacaractere pode usar
													// tamb�m o \r no windows
		
		Scanner scanner = new Scanner(System.in); //instaciado scanner, isso por que ele n�o � global
		
		System.out.println("Informe seu nome");
		String nome = scanner.nextLine();//faz a leitura da proxima linha
		System.out.println(nome);
		
		scanner.close();//para encerrar da stresm o scanner*/
		
		Scanner scanner = new Scanner(System.in);
		
		System.out.println("Informe um numero");
		int primeiroNumero = Integer.parseInt(scanner.nextLine());//casting para inteiro
		
		System.out.println(primeiroNumero);
		
		scanner.close();
	}

}

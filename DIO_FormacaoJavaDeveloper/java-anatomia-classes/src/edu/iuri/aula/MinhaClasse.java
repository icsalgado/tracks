package edu.iuri.aula;
public class MinhaClasse {
    public static void main(String [] args){ //metodo main recebe parametro args
        //System.out.print ("Primeira classe com metodo executavel");

        String primeiroNome = "Iuri";
        String ultimoNome = "Salgado";

        String nomeCompleto = completarNome (primeiroNome, ultimoNome);

        System.out.print(nomeCompleto);
    }

    public static String completarNome (String primeiroNome, String ultimoNome){
        return primeiroNome.concat(" ").concat(ultimoNome);
    }
}

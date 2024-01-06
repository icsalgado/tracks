public class Operadores {
    public static void main(String[] args) throws Exception {
        String nomeCompleto = "Iuri" + "Salgado";//concatenação

        String nome = "IuriSalgado";

        System.out.println(nomeCompleto);

        boolean variavel = true;

        System.out.println(!variavel);

        int a, b;
        a = 2;
        b = 2;

        String resultado = a == b ? "Verdadeiro" : "Falso";//ternario

        System.out.println(resultado);

        System.out.println(nomeCompleto.equals(nome));// compara conteúdos

    }
}

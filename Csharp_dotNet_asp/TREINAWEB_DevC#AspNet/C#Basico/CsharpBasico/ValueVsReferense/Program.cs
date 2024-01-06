using System;

namespace ValueVsReferense
{
    class Program
    {
        static void Main(string[] args)
        {
            //Passagem por valor
            int variavel1 = 5;
            int variavel2 = variavel1; //a atribuição é feita com o valor da variavel1
            variavel1 = 3; //mesmo alterando o valor da variavel1 a variavel2 não vai mudar o valor que recebeu
            Console.WriteLine($"Variavel 1 = {variavel1} e Variavel 2 = {variavel2}");

            //Passagem por referência usando um objeto
            Teste variavelUm = new Teste();
            variavelUm.valor = 5;
            Teste variavelDois = variavelUm; //a atribuição é feita fazendo referência ao espaço de memoria da variavelUm
            variavelUm.valor = 3; //logo, alterando o conteudo da propriedade da variavelUm, a variavelDois também vai mostar o valor atualizado
            Console.WriteLine($"Variavel Um = {variavelUm.valor} e a Variavel Dois = {variavelDois.valor}");


            // Inferência de Tipo ou do Compilador usar o keyword var, e não significa uma tipagem fraca
            var nome = "Iuri"; //é obrigatório na declaração, a atribuição do valor, e seu tipo vai ser sempre o mesmo até o fim da execução do programa
            var idade = 31;
            Console.WriteLine("Nome = {0} e idade = {1}", nome, idade);

            // Para forçar uma tipagem fraca usa-se o dynamic
            dynamic variavelSemTipo = "Iuri";//Esse tipo utiliza muita memoria
            Console.WriteLine($"Variavel = {variavelSemTipo}");
            variavelSemTipo = 31; //atribuido um outro tipo para a varivavel, sem problemas
            Console.WriteLine($"Variavel = {variavelSemTipo}");

        }

        class Teste
        {
            public int valor;
        }
    }
}

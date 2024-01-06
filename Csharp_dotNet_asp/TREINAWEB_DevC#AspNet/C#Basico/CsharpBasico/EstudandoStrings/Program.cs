using System;
using System.Text;

namespace EstudandoStrings
{
    class Program
    {
        static void Main(string[] args)
        {
            string textoUm = "ABC";
            string textoDois = "DEF";

            Console.WriteLine("{0}", textoUm + textoDois); //concatenação força bruta

            StringBuilder sb = new StringBuilder();
            sb.Append(textoUm);
            sb.Append("");
            sb.Append(textoDois);

            Console.WriteLine("{0}", sb.ToString()); //retorna todos os appends concatenados de forma mais eficiente
            
        }
    }
}

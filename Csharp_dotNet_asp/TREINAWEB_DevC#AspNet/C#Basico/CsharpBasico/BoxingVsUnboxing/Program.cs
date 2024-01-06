using System;

namespace BoxingVsUnboxing
{
    class Program
    {
        static void Main(string[] args)
        {
            //Boxing - armazenar um value type em um reference type - passa da memoria Stack para a RIP
            int inteiro1 = 2;
            object objeto1 = inteiro1;

            Console.WriteLine("Object = {0}", objeto1);

            //Unboxing - vai precisar fazer o cast
            int inteiro2 = (int)objeto1;

            Console.WriteLine("inteiro2 = {0}", inteiro2);
        }
    }
}

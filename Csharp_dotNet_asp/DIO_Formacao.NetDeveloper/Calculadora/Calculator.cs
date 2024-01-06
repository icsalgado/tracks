using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace Calculadora
{
    public class Calculator
    {
        public void Somar(int x, int y){
            Console.WriteLine($"{x} + {y} = {x + y}");
        }
        public void Subtrair(int x, int y){
            Console.WriteLine($"{x} - {y} = {x - y}");
        }
        public void Multiplicar(int x, int y){
            Console.WriteLine($"{x} * {y} = {x * y}");
        }
        public void Dividir(int x, int y){
            Console.WriteLine($"{x} / {y} = {x / y}");
        }
        public void Potencia(int x, int y){
            Console.WriteLine($"{x} ^ {y} = {Math.Pow(x, y)}");
        }
        public void Seno(double ang){
            double radiano = ang * Math.PI / 180; //conversao rad para angulo
            Console.WriteLine($"seno de {ang} = {Math.Round(Math.Sin(radiano), 4)}");
        }
        public void Cosseno(double ang){
            double radiano = ang * Math.PI / 180; //conversao rad para angulo
            Console.WriteLine($"cosseno de {ang} = {Math.Round(Math.Cos(radiano), 4)}");
        }
        public void Tangente(double ang){
            double radiano = ang * Math.PI / 180; //conversao angulo para radiano
            Console.WriteLine($"tangente de {ang} = {Math.Round(Math.Tan(radiano), 4)}");
        }
        public void RaizQuadrada(double x){
            Console.WriteLine($"Raiz quadrada de {x} = {Math.Sqrt(x)}");
        }
    }
}
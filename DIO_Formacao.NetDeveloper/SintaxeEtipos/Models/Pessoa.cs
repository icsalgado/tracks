using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace SintaxeEtipos.Models
{
    public class Pessoa //classe
    {
        public string? Nome { get; set; } //propriedade
        public int Idade { get; set; }

        public void Apresentar(){ //metodo
            Console.WriteLine($"Olá meu nome é {Nome}, e tenho {Idade} anos");
        }
    }
}
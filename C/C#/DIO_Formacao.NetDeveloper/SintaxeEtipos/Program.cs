// See https://aka.ms/new-console-template for more information

using SintaxeEtipos.Models;//para que a instância saiba onde está a classe Pessoa


Pessoa pess = new Pessoa();//instanciando uma pessoa

pess.Nome = "Iuri";
pess.Idade = 31;


pess.Apresentar();


string apresentacao = "Ola, como vai?";

DateTime dataAtual = DateTime.Now;

Console.WriteLine("Mensadgem: " + apresentacao + ", Hoje é: " + dataAtual);
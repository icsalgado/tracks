

int a = 10;
int b = 15;

int c = a + b;

Console.WriteLine(c);

c++; //c + 1
Console.WriteLine(c);

c--; //c - 1
Console.WriteLine(c);

c += 5; // c + 5
Console.WriteLine(c);

c -= 5; //c - 5
Console.WriteLine(c);

int numero = Convert.ToInt32("5"); //casting
int outroNumero = int.Parse("5"); //casting

String letra = numero.ToString(); //casting

Console.WriteLine(numero);
Console.WriteLine(outroNumero);
Console.WriteLine(letra);

String valor = "15";
int outroValor = 0;

int.TryParse(valor, out outroValor); //tenta converter, se não der certo imprime o outroValor, se der certo armazena em outroValor

Console.WriteLine(outroValor);

//Operadores condicionais

int quantidadeEmEstoque = 10;

int quantidadeComprada = 4;

bool possivelVenda = quantidadeComprada > 0 && quantidadeEmEstoque >= quantidadeComprada;

if(possivelVenda)
{
    Console.WriteLine("Venda realizada");
}
else if(quantidadeComprada == 0)
{
    Console.WriteLine("Venda zerada");
}
else
{
    Console.WriteLine("Sem estoque suficiente");
}

Console.WriteLine("Informe uma letra");
string novaLetra = Console.ReadLine();

switch(novaLetra)
{
    case "a":
    case "e":
    case "i":
    case "o":
    case "u":
        Console.WriteLine("eh uma vogal");
        break;
    default:
        Console.WriteLine("Nao eh uma vogal");
        break;
}

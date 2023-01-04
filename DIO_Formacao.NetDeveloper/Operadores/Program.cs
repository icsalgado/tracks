

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


/*
Programa para calcular o valor de uma viagem

1 preço do combustível
2 gasto médio de combustivel do carro por KM
3 distância em km
*/

let precoCombustivel = 4.69;
let distancia = 10;
let consumoMedio = 10;

let valor = (distancia/consumoMedio) * precoCombustivel;

console.log("O valor medio da viagem vai ser: ", valor.toFixed(2));//to fixed para arredondar em 2 casas decimais
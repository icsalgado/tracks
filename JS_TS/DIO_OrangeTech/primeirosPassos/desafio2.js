/*
Programa para calcular o valor de uma viagem num carro flex

1 preço da gasolina
2 preço do etanol
3 combustivel
4 gasto médio de combustivel do carro por KM
5 distância em km

*/

let precoGasolina = 4.69;
let precoEtanol = 3.69;
let distancia = 10;
let consumoMedioGasolina = 10;
let consumoMedioEtanol = 7;
let combustivel = 'gasolina'; //recomendado o uso de aspas simples

let valorGasolina = (distancia/consumoMedioGasolina) * precoGasolina;
let valorEtanol = (distancia/consumoMedioEtanol) * precoEtanol;

if(combustivel === 'etanol'){
    console.log("O valor medio da viagem usando etanol vai ser: ", valorEtanol.toFixed(2));
}else{
    console.log("O valor medio da viagem usando gasolina vai ser: ", valorGasolina.toFixed(2));
}
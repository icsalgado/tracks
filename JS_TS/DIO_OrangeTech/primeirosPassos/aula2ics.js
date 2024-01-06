//estruturas condicionais

const corAzul = false;

if (corAzul){
    console.log("A cor é azul");
}else{
    console.log("A cor não é azul");
}

let numero = "254775";

/*
= atribuição
== comparação independente do tipo
=== comparação considerando o tipo
*/

if(numero % 2 === 0){
    console.log("O numero ", numero, " é par");
}else if(numero % 2 ===! 0){
    console.log("O numero ", numero, " não é par");
}else{
    console.log(numero, " não é um numero");
}